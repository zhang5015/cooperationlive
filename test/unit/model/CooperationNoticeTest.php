<?php
// test/unit/model/CooperationNoticeTest.php
include(dirname(__FILE__).'/../../bootstrap/Doctrine.php');
 
$t = new lime_test(1, new lime_output_color());

$t->comment('->getCompanySlug()');
$notice = Doctrine_Core::getTable('CooperationNotice')->createQuery()->fetchOne();
$t->is($notice->getCompanySlug(), Cooperation::slugify($notice->getCompany()), '->getCompanySlug() return the slug for the company');

$t->comment('->save()');
//$notice = create_notice();
//$notice->save();
//$expiresAt = date('Y-m-d', time() + 86400 * sfConfig::get('app_active_days'));
//$t->is(date('Y-m-d', strtotime($notice->getExpiresAt())), $expiresAt, '->save() updates expires_at if not set');
// 
//$notice = create_notice(array('expires_at' => '2008-08-08'));
//$notice->save();
//$t->is(date('Y-m-d', strtotime($notice->getExpiresAt())), '2008-08-08', '->save() does not update expires_at if set');
// 
//function create_notice($defaults = array())
//{
//  static $category = null;
// 
//  if (is_null($category))
//  {
//    $category = Doctrine::getTable('CooperationCategory')
//      ->createQuery()
//      ->limit(1)
//      ->fetchOne();
//  }
// 
//  $notice = new CooperationNotice();
//  $notice->fromArray(array_merge(array(
//    'category_id'  => $category->getId(),
//    'company'      => 'Sensio Labs',
//    'position'     => 'Senior Tester',
//    'location'     => 'Paris, France',
//    'description'  => 'Testing is fun',
//    'how_to_apply' => 'Send e-Mail',
//    'email'        => 'notice@example.com',
//    'token'        => rand(1111, 9999),
//    'is_activated' => true,
//  ), $defaults));
// 
//  return $notice;
//}