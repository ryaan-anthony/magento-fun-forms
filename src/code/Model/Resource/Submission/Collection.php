<?php
class RyaanAnthony_FunForms_Model_Resource_Submission_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
  protected function _construct()
  {
    $this->_init('funforms/submission');
  }
}
