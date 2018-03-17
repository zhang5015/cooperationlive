<?php

// apps/frontend/lib/myUser.class.php
class myUser extends sfBasicSecurityUser
{
	public function resetNoticeHistory()
	{
		$this->getAttributeHolder()->remove('notice_history');
	}

	public function getNoticeHistory()
	{
		$ids = $this->getAttribute('notice_history', array());

		if (!empty($ids))
		{
			return Doctrine_Core::getTable('CooperationNotice')
			->createQuery('a')
			->whereIn('a.id', $ids)
			->execute()
			;
		}

		return array();
	}

	public function addNoticeToHistory(CooperationNotice $notice)
	{
		$ids = $this->getAttribute('notice_history', array());

		if (!in_array($notice->getId(), $ids))
		{
			array_unshift($ids, $notice->getId());

			$this->setAttribute('notice_history', array_slice($ids, 0, 3));
		}
	}

	//Return true only for the very first request of a user session
	public function isFirstRequest($boolean = null)
	{
		if (is_null($boolean))
		{
			return $this->getAttribute('first_request', true);
		}

		$this->setAttribute('first_request', $boolean);
	}
	public function resetArticleHistory()
	{
		$this->getAttributeHolder()->remove('article_history');
	}

	public function getArticleHistory()
	{
		$ids = $this->getAttribute('article_history', array());

		if (!empty($ids))
		{
			return Doctrine_Core::getTable('CooperationArticle')
			->createQuery('a')
			->whereIn('a.id', $ids)
			->execute()
			;
		}

		return array();
	}

	public function addArticleToHistory(CooperationArticle $article)
	{
		$ids = $this->getAttribute('article_history', array());

		if (!in_array($article->getId(), $ids))
		{
			array_unshift($ids, $article->getId());

			$this->setAttribute('article_history', array_slice($ids, 0, 3));
		}
	}
}
