<?php

/**
 * article actions.
 *
 * @package    cooperation
 * @subpackage article
 * @author     Your name here
 * @version    1.0
 */
class sfCooperationMainActions extends sfActions
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

}
