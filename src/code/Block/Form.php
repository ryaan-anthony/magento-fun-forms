<?php
class RyaanAnthony_FunForms_Block_Form extends Mage_Core_Block_Template
{
  public function getFormAction()
  {
    return Mage::getUrl('funforms/form/post');
  }

  public function __($message)
  {
    return Mage::helper('funforms')->__($message);
  }
}
