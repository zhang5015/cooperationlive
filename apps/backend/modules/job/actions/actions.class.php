<?php

require_once dirname(__FILE__).'/../lib/noticeGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/noticeGeneratorHelper.class.php';

/**
 * notice actions.
 *
 * @package    cooperation
 * @subpackage notice
 * @author     Your name here
 * @version    1.0
 */
class noticeActions extends autoNoticeActions
{
    public function executeListExtend(sfWebRequest $request)
    {
        $notice = $this->getRoute()->getObject();
        $notice->extend(true);

        $this->getUser()->setFlash('notice', 'The selected notices have been extended successfully.');

        $this->redirect('cooperation_notice');
    }

    public function executeListDeleteNeverActivated(sfWebRequest $request)
    {
        $nb = Doctrine_Core::getTable('CooperationNotice')->cleanup(60);

        if ($nb)
        {
            $this->getUser()->setFlash('notice', sprintf('%d never activated notices have been deleted successfully.', $nb));
        }
        else
        {
            $this->getUser()->setFlash('notice', 'No notice to delete.');
        }

        $this->redirect('cooperation_notice');
    }

    public function executeBatchExtend(sfWebRequest $request)
    {
        $ids = $request->getParameter('ids');

        $q = Doctrine_Query::create()
        ->from('CooperationNotice j')
        ->whereIn('j.id', $ids);

        foreach ($q->execute() as $notice)
        {
            $notice->extend(true);
        }

        $this->getUser()->setFlash('notice', 'The selected notices have been extended successfully.');

        $this->redirect('cooperation_notice');
    }

}
