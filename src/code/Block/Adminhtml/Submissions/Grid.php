<?php
class RyaanAnthony_FunForms_Block_Adminhtml_Submissions_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
  public function __construct()
  {
    parent::__construct();
    $this->setId('funforms_grid');
    $this->setDefaultSort('id');
    $this->setDefaultDir('desc');
  }
  protected function _prepareCollection()
  {
    $collection = Mage::getModel('funforms/submission')
      ->getCollection()
      ->addFieldToSelect('*');
    $this->setCollection($collection);
    return parent::_prepareCollection();
  }
  protected function _prepareColumns()
  {
    $this->addColumn('id', [
      'header'    => Mage::helper('adminhtml')->__('ID'),
      'align'     =>'right',
      'width'     => '50px',
      'index'     => 'id',
    ]);
    $this->addColumn('subject', [
      'header'    => Mage::helper('adminhtml')->__('Subject'),
      'align'     =>'left',
      'index'     => 'subject',
    ]);
    $this->addColumn('message', [
      'header'    => Mage::helper('adminhtml')->__('Message'),
      'align'     =>'left',
      'index'     => 'message',
    ]);
    return parent::_prepareColumns();
  }
}
