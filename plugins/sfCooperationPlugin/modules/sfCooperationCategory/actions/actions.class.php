<?php
// apps/frontend/modules/category/actions/actions.class.php

/**
 * category actions.
 *
 * @package    cooperation
 * @subpackage category
 * @author     Your name here
 * @version    1.0
 */
class sfCooperationCategoryActions extends sfActions
{
    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeShow(sfWebRequest $request)
    {
        $this->category = $this->getRoute()->getObject();

//        $this->pager = new sfDoctrinePager('CooperationNotice',
//        sfConfig::get('app_max_notices_on_category')
//        );
        $this->pager = new sfDoctrinePager('CooperationNotice',
        sfConfig::get('app_max_notices_on_category')
        );
        $this->pager->setQuery($this->category->getActiveNoticesQuery());
        $this->pager->setPage($request->getParameter('page', 1));
        $this->pager->init();
    }
    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeArticle(sfWebRequest $request)
    {
        $this->category = $this->getRoute()->getObject();

        $this->pager = new sfDoctrinePager('CooperationArticle',
        sfConfig::get('app_max_articles_on_category')
        );
        $this->pager->setQuery($this->category->getActiveArticlesQuery());
        $this->pager->setPage($request->getParameter('page', 1));
        $this->pager->init();
    }
}
