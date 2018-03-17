<?php

/**
 * notice module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage notice
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseNoticeGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'cooperation_notice' : 'cooperation_notice_'.$action;
  }
}
