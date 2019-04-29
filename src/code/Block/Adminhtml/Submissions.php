<?php

class RyaanAnthony_FunForms_Block_Adminhtml_Submissions extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    parent::__construct();
    $this->_controller = 'adminhtml_funforms';
    $this->_blockGroup = 'funforms';
    $this->_headerText = Mage::helper('adminhtml')->__('Fun Form Submissions');
  }
}
