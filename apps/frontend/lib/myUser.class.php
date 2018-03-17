<?php

// apps/frontend/lib/myUser.class.php
class myUser extends sfBasicSecurityUser
{
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