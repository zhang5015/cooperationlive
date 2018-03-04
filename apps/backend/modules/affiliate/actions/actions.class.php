<?php

require_once dirname(__FILE__).'/../lib/affiliateGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/affiliateGeneratorHelper.class.php';

/**
 * affiliate actions.
 *
 * @package    cooperation
 * @subpackage affiliate
 * @author     Your name here
 * @version    1.0
 */
class affiliateActions extends autoAffiliateActions
{
    public function executeListActivate()
    {
        $this->getRoute()->getObject()->activate();

        $this->redirect('cooperation_affiliate');
    }

    public function executeListDeactivate()
    {
        $this->getRoute()->getObject()->deactivate();

        $this->redirect('cooperation_affiliate');
    }

    public function executeBatchActivate(sfWebRequest $request)
    {
        $q = Doctrine_Query::create()
        ->from('CooperationAffiliate a')
        ->whereIn('a.id', $request->getParameter('ids'));

        $affiliates = $q->execute();

        foreach ($affiliates as $affiliate)
        {
            $affiliate->activate();
        }

        $this->redirect('cooperation_affiliate');
    }

    public function executeBatchDeactivate(sfWebRequest $request)
    {
        $q = Doctrine_Query::create()
        ->from('CooperationAffiliate a')
        ->whereIn('a.id', $request->getParameter('ids'));

        $affiliates = $q->execute();

        foreach ($affiliates as $affiliate)
        {
            $affiliate->deactivate();
        }

        $this->redirect('cooperation_affiliate');
    }

}
