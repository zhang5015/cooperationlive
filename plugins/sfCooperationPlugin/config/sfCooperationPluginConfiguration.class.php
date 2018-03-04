<?php 
// plugins/sfCooperationPlugin/config/sfCooperationPluginConfiguration.class.php
class sfCooperationPluginConfiguration extends sfPluginConfiguration
{
  public function initialize()
  {
    $this->dispatcher->connect('user.method_not_found', array('CooperationUser', 'methodNotFound'));
  }
}