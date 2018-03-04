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
 
  static public function addNoticeToHistory(sfUser $user, CooperationNotice $notice)
  {
    $ids = $user->getAttribute('notice_history', array());
 
    if (!in_array($notice->getId(), $ids))
    {
      array_unshift($ids, $notice->getId());
      $user->setAttribute('notice_history', array_slice($ids, 0, 3));
    }
  }
 
  static public function getNoticeHistory(sfUser $user)
  {
    $ids = $user->getAttribute('notice_history', array());
 
    if (!empty($ids))
    {
      return Doctrine_Core::getTable('CooperationNotice')
        ->createQuery('a')
        ->whereIn('a.id', $ids)
        ->execute();
    }
 
    return array();
  }
 
  static public function resetNoticeHistory(sfUser $user)
  {
    $user->getAttributeHolder()->remove('notice_history');
  }
}
