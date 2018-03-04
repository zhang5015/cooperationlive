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
        $form = new sfFormLanguage(
        $this->getUser(),
        array('languages' => array('en', 'fr'))
        );
        $form->disableLocalCSRFProtection();

        $form->process($request);

        return $this->redirect('localized_homepage');
    }

//    public function executeChangeLanguage(sfWebRequest $request)
//    {
//        $this->form = new sfFormLanguage($this->getUser(), array('languages' => array('en', 'fr')));
//        if ($this->form->process($request))
//        {
//            // culture has changed
////            return $this->redirect('@homepage');
//            return $this->redirect('localized_homepage');
//        }
//
//        // the form is not valid (can't happen... but you never know)
//        return $this->redirect('@homepage');
//    }
}
