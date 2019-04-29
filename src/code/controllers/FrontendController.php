<?php

class RyaanAnthony_FunForms_FormsController extends Mage_Core_Controller_Front_Action
{
  /**
   * Render the form
   */
  public function indexAction()
  {
    $this->loadLayout();
    $this->renderLayout();
  }

  /**
   * Handle the form submission
   * Attempt to follow PRG pattern
   */
  public function postAction()
  {
    $post = $this->getRequest()->getPost();
    $result = $this->saveSubmission(
      $post['field']['subject'],
      $post['field']['message']
    );
    if ($result) {
      Mage::getSingleton('core/session')->addSuccess(
        Mage::helper('funforms')->__('Success!')
      );
      $this->_redirectReferer();
      return;
    }
  }

  /**
   * Persist the submission to data model
   * @param string $subject
   * @param string $message
   * @return bool
   */
  private function saveSubmission(string $subject, string $message)
  {
    return Mage::getModel('funforms/submission')
      ->setSubject($subject)
      ->setMessage($message)
      ->save();
  }
}
