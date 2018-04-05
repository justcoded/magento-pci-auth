<?php

class JustCoded_PCIAuth_Model_Customer_PasswordHistory extends Mage_Core_Model_Abstract
{
    const PASSWORD_HISTORY_MODEL_CLASS_CODE = 'justcoded_pciauth/customer_passwordHistory';

    protected function _construct()
    {
        parent::_construct();
        $this->_init(self::PASSWORD_HISTORY_MODEL_CLASS_CODE);
    }

    public function getAllPasswordHashesForCustomer(Mage_Customer_Model_Customer $customer)
    {
        $passwordHashes = [];

        $records = $this->getCollection()->addFilter('customer_id', $customer->getId());
        foreach ($records as $record) {
            array_push($passwordHashes, $record->getPasswordHash());
        }

        return $passwordHashes;
    }
}
