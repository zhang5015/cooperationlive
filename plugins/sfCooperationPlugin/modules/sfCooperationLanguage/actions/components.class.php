<?php
// apps/frontend/modules/language/actions/components.class.php
class sfCooperationLanguageComponents extends sfComponents
{
  public function executeLanguage(sfWebRequest $request)
  {
    $this->form = new sfFormLanguage(
      $this->getUser(),
      array('languages' => array('en', 'fr'))
    );
    $this->form->disableLocalCSRFProtection();
  }
}
