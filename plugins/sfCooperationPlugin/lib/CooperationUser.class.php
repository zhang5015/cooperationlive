<?php
// plugins/sfCooperationPlugin/lib/CooperationUser.class.php
class CooperationUser
{
  static public function methodNotFound(sfEvent $event)
  {
    if (method_exists('CooperationUser', $event['method']))
    {
      $event->setReturnValue(call_user_func_array(
        array('CooperationUser', $event['method']),
        array_merge(array($event->getSubject()), $event['arguments'])
      ));
 
      return true;
    }
  }
 
  static public function isFirstRequest(sfUser $user, $boolean = null)
  {
    if (is_null($boolean))
    {
      return $user->getAttribute('first_request', true);
    }
    else
    {
      $user->setAttribute('first_request', $boolean);
    }
  }
 
  static public function addArticleToHistory(sfUser $user, CooperationArticle $article)
  {
    $ids = $user->getAttribute('article_history', array());
 
    if (!in_array($article->getId(), $ids))
    {
      array_unshift($ids, $article->getId());
      $user->setAttribute('article_history', array_slice($ids, 0, 3));
    }
  }
 
  static public function getArticleHistory(sfUser $user)
  {
    $ids = $user->getAttribute('article_history', array());
 
    if (!empty($ids))
    {
      return Doctrine_Core::getTable('CooperationArticle')
        ->createQuery('a')
        ->whereIn('a.id', $ids)
        ->execute();
    }
 
    return array();
  }
 
  static public function resetArticleHistory(sfUser $user)
  {
    $user->getAttributeHolder()->remove('article_history');
  }
}
