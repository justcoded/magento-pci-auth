<?php

class JustCoded_PCIAuth_Model_Observer extends Varien_Object
{
    /**
     * @var JustCoded_PCIAuth_Helper_Data
     */
    private $_helper;

    protected function _construct()
    {
        $this->_helper = Mage::helper('justcoded_pciauth');
    }

    public function deactivateNotActiveCustomer()
    {
        if (!$this->_helper->isEnabled()) {
            return $this;
        }

        $session = Mage::getSingleton('customer/session');

        if (!$session->isLoggedIn()) {
            return $this;
        }

        $currentDate      = Mage::getModel('core/date')->date();
        $lastActivityDate = $session->getLastActivityDate();

        $deactivationPeriod = $this->_helper->accountDeactivationPeriod();

        if ($lastActivityDate && $deactivationPeriod) {
            if ($deactivationPeriod < $this->_getActivityMinutesInterval($currentDate, $lastActivityDate)) {
                $session->logout();
                Mage::getSingleton('core/session')->addNotice($this->_helper->__('Your session was expired'));

                return $this;
            }
        }

        $session->setLastActivityDate($currentDate);

        return $this;
    }

    protected function _getActivityMinutesInterval($currentDate, $lastActivityDate)
    {
        $currentDate      = new DateTime($currentDate);
        $lastActivityDate = new DateTime($lastActivityDate);

        return $lastActivityDate->diff($currentDate)->i;
    }
}