<?php

/**
 * language actions.
 *
 * @package    cooperation
 * @subpackage language
 * @author     Your name here
 * @version    1.0
 */
class sfCooperationLanguageActions extends sfActions
{
  /**
   * Executes index action
   *
   * @param sfRequest $request A request object
   */
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward('default', 'module');
  }

  public function executeChangeLanguage(sfWebRequest $request)
  {
    $form = new sfFormLanguage($this->getUser(), array('languages' => array('en', 'zh')));
    $form->disableLocalCSRFProtection();

    $form->process($request);

    return $this->redirect('localized_homepage');
  }
}
