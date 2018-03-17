<?php

/**
 * article actions.
 *
 * @package    cooperation
 * @subpackage article
 * @author     Your name here
 * @version    1.0
 */
class sfCooperationArticleActions extends sfActions
{

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

		$this->categories = Doctrine_Core::getTable('CooperationCategory')->getWithArticles();
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
		$this->article = $this->getRoute()->getObject();
		$this->category = $this->article -> getCooperationCategory();

		$this->getUser()->addArticleToHistory($this->article);
	}

	public function executeNew(sfWebRequest $request)
	{
		$article = new CooperationArticle();

		$this->form = new CooperationArticleForm($article);
	}

	public function executeCreate(sfWebRequest $request)
	{
		$this->form = new CooperationArticleForm();
		$this->processForm($request, $this->form);
		$this->setTemplate('new');
	}

	public function executeEdit(sfWebRequest $request)
	{
		$article = $this->getRoute()->getObject();


		$this->form = new CooperationArticleForm($article);
	}

	public function executeUpdate(sfWebRequest $request)
	{
		$this->form = new CooperationArticleForm($this->getRoute()->getObject());
		$this->processForm($request, $this->form);
		$this->setTemplate('edit');
	}


	protected function processForm(sfWebRequest $request, sfForm $form)
	{
		$form->bind(
		$request->getParameter($form->getName()),
		$request->getFiles($form->getName())
		);

		if ($form->isValid())
		{
			$article = $form->save();

			$this->redirect('article_show', $article);
		}
	}
	public function executePublish(sfWebRequest $request)
	{
		$request->checkCSRFProtection();

		$article = $this->getRoute()->getObject();
		$article->publish();

		if ($cache = $this->getContext()->getViewCacheManager())
		{
			$cache->remove('sfCooperationArticle/index?sf_culture=*');
			$cache->remove('sfCooperationCategory/show?id='.$article->getCooperationCategory()->getId());
		}

		$this->getUser()->setFlash('article', sprintf('Your article is now online for %s days.', sfConfig::get('app_active_days')));

		$this->redirect($this->generateUrl('article_show_user', $article));
	}

	public function executeExtend(sfWebRequest $request)
	{
		$request->checkCSRFProtection();

		$article = $this->getRoute()->getObject();
		$this->forward404Unless($article->extend());

		$this->getUser()->setFlash('article', sprintf('Your article validity has been extended until %s.', $article->getDateTimeObject('expires_at')->format('m/d/Y')));

		$this->redirect($this->generateUrl('article_show_user', $article));
	}

	public function executeSearch(sfWebRequest $request)
	{
		$this->forwardUnless($query = $request->getParameter('query'), 'sfCooperationArticle', 'index');

		$this->articles = Doctrine_Core::getTable('CooperationArticle') ->getForLuceneQuery($query);

		if ($request->isXmlHttpRequest())
		{
			if ('*' == $query || !$this->articles)
			{
				return $this->renderText('No results.');
			}

			return $this->renderPartial('sfCooperationArticle/list', array('articles' => $this->articles));
		}
	}

	public function executeDelete(sfWebRequest $request)
	{
		$request->checkCSRFProtection();

		$cooperation_article = $this->getRoute()->getObject();
		$cooperation_article->delete();

		$this->redirect('sfCooperationArticle/index');
	}

}
