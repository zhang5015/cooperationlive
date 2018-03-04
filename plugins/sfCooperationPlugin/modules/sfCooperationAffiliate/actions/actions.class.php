<?php

/**
 * affiliate actions.
 *
 * @package    cooperation
 * @subpackage affiliate
 * @author     Your name here
 * @version    1.0
 */
class sfCooperationAffiliateActions extends sfActions//
//autoAffiliateActions
{
    public function executeIndex(sfWebRequest $request)
    {
        $this->cooperation_affiliates = Doctrine_Core::getTable('CooperationAffiliate')
        ->createQuery('a')
        ->execute();
    }

    public function executeNew(sfWebRequest $request)
    {
        $this->form = new CooperationAffiliateForm();
    }

    public function executeCreate(sfWebRequest $request)
    {
        $this->forward404Unless($request->isMethod(sfRequest::POST));

        $this->form = new CooperationAffiliateForm();

        $this->processForm($request, $this->form);

        $this->setTemplate('new');
    }

    public function executeEdit(sfWebRequest $request)
    {
        $this->forward404Unless($cooperation_affiliate = Doctrine_Core::getTable('CooperationAffiliate')->find(array($request->getParameter('id'))), sprintf('Object cooperation_affiliate does not exist (%s).', $request->getParameter('id')));
        $this->form = new CooperationAffiliateForm($cooperation_affiliate);
    }

    public function executeUpdate(sfWebRequest $request)
    {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $this->forward404Unless($cooperation_affiliate = Doctrine_Core::getTable('CooperationAffiliate')->find(array($request->getParameter('id'))), sprintf('Object cooperation_affiliate does not exist (%s).', $request->getParameter('id')));
        $this->form = new CooperationAffiliateForm($cooperation_affiliate);

        $this->processForm($request, $this->form);

        $this->setTemplate('edit');
    }

    public function executeDelete(sfWebRequest $request)
    {
        $request->checkCSRFProtection();

        $this->forward404Unless($cooperation_affiliate = Doctrine_Core::getTable('CooperationAffiliate')->find(array($request->getParameter('id'))), sprintf('Object cooperation_affiliate does not exist (%s).', $request->getParameter('id')));
        $cooperation_affiliate->delete();

        $this->redirect('affiliate/index');
    }

    protected function processForm(sfWebRequest $request, sfForm $form)
    {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid())
        {
            $cooperation_affiliate = $form->save();

            //      $this->redirect('affiliate/edit?id='.$cooperation_affiliate->getId());
            $this->redirect($this->generateUrl('affiliate_wait', $cooperation_affiliate));
        }
    }

    public function executeWait(sfWebRequest $request)
    {
    }

    public function executeListActivate()
    {
        $affiliate = $this->getRoute()->getObject();
        $affiliate->activate();

        // send an email to the affiliate
        $message = $this->getMailer()->compose(
        array('cooperation@example.com' => 'Cooperation Bot'),
        $affiliate->getEmail(),
      'Cooperation affiliate token',
      <<<EOF
Your Cooperation affiliate account has been activated.
 
Your token is {$affiliate->getToken()}.
 
The Cooperation Bot.
EOF
        );

        $this->getMailer()->send($message);

        $this->redirect('cooperation_affiliate');
    }

}
