<?php
require_once dirname(__FILE__) . '/../lib/sfGuardUserGeneratorConfiguration.class.php';
require_once dirname(__FILE__) . '/../lib/sfGuardUserGeneratorHelper.class.php';

/**
 * sfGuardUser actions.
 *
 * @package sfGuardPlugin
 * @subpackage sfGuardUser
 * @author Fabien Potencier
 * @version SVN: $Id: actions.class.php 23319 2009-10-25 12:22:23Z Kris.Wallsmith $
 */
class sfGuardUserActions extends autoSfGuardUserActions
{

    public function executeMobile($request)
    {
        $username = $request->getParameter("username");
        $password = $request->getParameter("password");
        
        $response->setContentType("text/json;charset=UTF-8");
        $returnValue = Array(
            "user",
            $username
        );
        
        return json_encode($returnValue);
    }
}
