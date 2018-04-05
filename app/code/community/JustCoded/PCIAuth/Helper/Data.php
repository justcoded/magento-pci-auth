<?php

class JustCoded_PCIAuth_Helper_Data extends Mage_Core_Helper_Abstract
{
    const XML_PATH_IS_ENABLED                  = 'justcoded_pciauth/settings/enabled';
    const XML_PATH_PASSWORD_MIN_LENGTH         = 'justcoded_pciauth/settings/password_min_length';
    const XML_PATH_LOGIN_MAX_TRIES             = 'justcoded_pciauth/settings/login_max_tries';
    const XML_PATH_LOGIN_MAX_TRIES_RESET_TIME  = 'justcoded_pciauth/settings/login_tries_reset_time';
    const XML_PATH_LOCKOUT_EFFECTIVE_PERIOD    = 'justcoded_pciauth/settings/lockout_effective_period';
    const XML_PATH_ACCOUNT_DEACTIVATION_PERIOD = 'justcoded_pciauth/settings/account_deactivation_period';

    protected function _getStoreConfigNumber($path)
    {
        return intval(Mage::getStoreConfig($path));
    }

    public function isEnabled()
    {
        return Mage::getStoreConfigFlag(self::XML_PATH_IS_ENABLED);
    }

    public function getPasswordMinLength()
    {
        return $this->_getStoreConfigNumber(self::XML_PATH_PASSWORD_MIN_LENGTH);
    }

    public function getLoginMaxTries()
    {
        return $this->_getStoreConfigNumber(self::XML_PATH_LOGIN_MAX_TRIES);
    }

    public function getLoginMaxTriesResetTime()
    {
        return $this->_getStoreConfigNumber(self::XML_PATH_LOGIN_MAX_TRIES_RESET_TIME);
    }

    public function getLockoutEffectivePeriod()
    {
        return $this->_getStoreConfigNumber(self::XML_PATH_LOCKOUT_EFFECTIVE_PERIOD);
    }

    public function accountDeactivationPeriod()
    {
        return $this->_getStoreConfigNumber(self::XML_PATH_ACCOUNT_DEACTIVATION_PERIOD);
    }
}