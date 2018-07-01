<?php

/**
 * PluginCooperationCategory
 *
 * This class has been auto-generated by the Doctrine ORM Framework
 *
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class PluginCooperationCategory extends BaseCooperationCategory
{


	public function getActiveNoticesQuery()
	{
		$q = Doctrine_Query::create()
		->from('CooperationNotice j')
		->where('j.category_id = ?', $this->getId());

		return Doctrine_Core::getTable('CooperationNotice')->addActiveNoticesQuery($q);
	}

	public function getActiveArticlesQuery()
	{
		$q = Doctrine_Query::create()
		->from('CooperationArticle j')
		->where('j.category_id = ?', $this->getId());

		return Doctrine_Core::getTable('CooperationArticle')->addActiveArticlesQuery($q);
	}
	public function getArticlesByCategory($id = 5)
	{
		$q = Doctrine_Query::create()
		->from('CooperationArticle j')
		->where('j.category_id = ?', $id);

		return Doctrine_Core::getTable('CooperationArticle')->addActiveArticlesQuery($q);
	}

	public function getActiveNotices($max = 10)
	{
		$q = $this->getActiveNoticesQuery()
		->limit($max);

		return $q->execute();
	}
	public function getActiveArticles($max = 10)
	{
		$q = $this->getActiveArticlesQuery()
		->limit($max);

		return $q->execute();
	}
	public function countActiveNotices()
	{
		return $this->getActiveNoticesQuery()->count();
	}

	public function countActiveArticles()
	{
		return $this->getActiveArticlesQuery()->count();
	}

	public function getLatestPost()
	{
		return $this->getActiveNotices(1)->getFirst();
	}

	//由于每次改变分类名，都需要重新生成slug，所有覆盖setName()方法
	//在每次保存分类名的同时保存相应的slug
	public function setName($name)
	{
		parent::setName($name);
		$this->setSlug(Cooperation::slugify($name));
	}

	public function getSlug()
	{
		return Cooperation::slugify($this->getName());
	}



}