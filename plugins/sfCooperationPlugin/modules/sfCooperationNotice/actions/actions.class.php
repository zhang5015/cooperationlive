<?php

/**
 * notice actions.
 *
 * @package    cooperation
 * @subpackage notice
 * @author     Your name here
 * @version    1.0
 */
class sfCooperationNoticeActions extends sfActions
{
    //    public function executeIndex(sfWebRequest $request)
    //    {
    //        $this->cooperation_notices = Doctrine_Core::getTable('CooperationNotice')->getActiveNotices();
    //        $this->categories = Doctrine_Core::getTable('CooperationCategory')->getWithNotices();
    //    }

    public function executeIndex(sfWebRequest $request)
    {
        if (!$request->getParameter('sf_culture'))
        {
            if ($this->getUser()->isFirstRequest())
            {
                $culture = $request->getPreferredCulture(array('en', 'fr'));
                $this->getUser()->setCulture($culture);
                $this->getUser()->isFirstRequest(false);
            }
            else
            {
                $culture = $this->getUser()->getCulture();
            }

            $this->redirect('localized_homepage');
        }

        $this->categories = Doctrine_Core::getTable('CooperationCategory')->getWithNotices();
    }

    public function save(Doctrine_Connection $conn = null)
    {
        if ($this->isNew() && !$this->getExpiresAt())
        {
            $this->setCreatedAt(time());
            $now = $this->getCreatedAt() ? $this->getDateTimeObject('created_at')->format('U') : time();
            $this->setExpiresAt(date('Y-m-d H:i:s', $now + 86400 * sfConfig::get('app_active_days')));
        }

        return parent::save($conn);
    }

    public function executeShow(sfWebRequest $request)
    {
        $this->notice = $this->getRoute()->getObject();
        $this->category = $this->notice -> getCooperationCategory();

        $this->getUser()->addNoticeToHistory($this->notice);
    }

    public function executeNew(sfWebRequest $request)
    {
        $notice = new CooperationNotice();
        $notice->setType('full-time');

        $this->form = new CooperationNoticeForm($notice);
    }

    public function executeCreate(sfWebRequest $request)
    {
        $this->form = new CooperationNoticeForm();
        $this->processForm($request, $this->form);
        $this->setTemplate('new');
    }

    public function executeEdit(sfWebRequest $request)
    {
        $notice = $this->getRoute()->getObject();

        //        $this->forward404If($notice->getIsActivated());

        $this->form = new CooperationNoticeForm($notice);
    }

    public function executeUpdate(sfWebRequest $request)
    {
        $this->form = new CooperationNoticeForm($this->getRoute()->getObject());
        $this->processForm($request, $this->form);
        $this->setTemplate('edit');
    }

    //    public function executeDelete(sfWebRequest $request)
    //    {
    //        $request->checkCSRFProtection();
    //
    //        $notice = $this->getRoute()->getObject();
    //        $notice->delete();
    //
    //        $this->redirect('notice/index');
    //    }

    protected function processForm(sfWebRequest $request, sfForm $form)
    {
        $form->bind(
        $request->getParameter($form->getName()),
        $request->getFiles($form->getName())
        );

        if ($form->isValid())
        {
            $notice = $form->save();

            $this->redirect('notice_show', $notice);
        }
    }
    //    public function executePublish(sfWebRequest $request)
    //    {
    //        $request->checkCSRFProtection();
    //
    //        $notice = $this->getRoute()->getObject();
    //        $notice->publish();
    //
    //        $this->getUser()->setFlash('notice', sprintf('Your notice is now online for %s days.', sfConfig::get('app_active_days')));
    //
    //        $this->redirect('notice_show_user', $notice);
    //    }
    public function executePublish(sfWebRequest $request)
    {
        $request->checkCSRFProtection();

        $notice = $this->getRoute()->getObject();
        $notice->publish();

        if ($cache = $this->getContext()->getViewCacheManager())
        {
            $cache->remove('sfCooperationNotice/index?sf_culture=*');
            $cache->remove('sfCooperationCategory/show?id='.$notice->getCooperationCategory()->getId());
        }

        $this->getUser()->setFlash('notice', sprintf('Your notice is now online for %s days.', sfConfig::get('app_active_days')));

        $this->redirect($this->generateUrl('notice_show_user', $notice));
    }

    public function executeExtend(sfWebRequest $request)
    {
        $request->checkCSRFProtection();

        $notice = $this->getRoute()->getObject();
        $this->forward404Unless($notice->extend());

        $this->getUser()->setFlash('notice', sprintf('Your notice validity has been extended until %s.', $notice->getDateTimeObject('expires_at')->format('m/d/Y')));

        $this->redirect($this->generateUrl('notice_show_user', $notice));
    }

    //    public function executeSearch(sfWebRequest $request)
    //    {
    //        $this->forwardUnless($query = $request->getParameter('query'), 'notice', 'index');
    //
    //        $this->notices = Doctrine_Core::getTable('CooperationNotice')->getForLuceneQuery($query);
    //
    //        if ($request->isXmlHttpRequest())
    //        {
    //            return $this->renderPartial('notice/list', array('notices' => $this->notices));
    //        }
    //    }
    //    public function executeSearch(sfWebRequest $request)
    //    {
    //        $this->forwardUnless($query = $request->getParameter('query'), 'notice', 'index');
    //
    //        $this->notices = Doctrine_Core::getTable('CooperationNotice')->getForLuceneQuery($query);
    //
    //        if ($request->isXmlHttpRequest())
    //        {
    //            if ('*' == $query || !$this->notices)
    //            {
    //                return $this->renderText('No results.');
    //            }
    //
    //            return $this->renderPartial('notice/list', array('notices' => $this->notices));
    //        }
    //    }
    public function executeSearch(sfWebRequest $request)
    {
        $this->forwardUnless($query = $request->getParameter('query'), 'sfCooperationNotice', 'index');

        $this->notices = Doctrine_Core::getTable('CooperationNotice') ->getForLuceneQuery($query);

        if ($request->isXmlHttpRequest())
        {
            if ('*' == $query || !$this->notices)
            {
                return $this->renderText('No results.');
            }

            return $this->renderPartial('sfCooperationNotice/list', array('notices' => $this->notices));
        }
    }

    public function executeDelete(sfWebRequest $request)
    {
        $request->checkCSRFProtection();

        $cooperation_notice = $this->getRoute()->getObject();
        $cooperation_notice->delete();

        $this->redirect('sfCooperationNotice/index');
    }

    }
