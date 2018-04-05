<?php

class JustCoded_PCIAuth_Model_Resource_Customer_PasswordHistory extends Mage_Core_Model_Resource_Db_Abstract
{
    const ID_COLUMN = 'entity_id';

    protected function _construct()
    {
        $this->_init('justcoded_pciauth/customer_password_history_entity', self::ID_COLUMN);
    }
}
