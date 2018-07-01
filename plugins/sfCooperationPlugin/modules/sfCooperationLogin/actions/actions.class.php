<?php

/**
 * affiliate actions.
 *
 * @package    cooperation
 * @subpackage affiliate
 * @author     Your name here
 * @version    1.0
 */
class sfCooperationLoginActions extends sfActions
{

    public function executeIndex(sfWebRequest $request, sfWebResponse $response)
    {
        // $this->cooperation_affiliates = Doctrine_Core::getTable('CooperationAffiliate')
        // ->createQuery('a')
        // ->execute();
        
        // 得到用户输入信息
        // JSONObject jo = new JSONObject();
        // JSONArray ja = new JSONArray();
        $request->setCharacterEncoding("utf-8");
        $username = $request->getParameter("username") ;
        $password = $request -> getParameter("password");
        
        $authValue = auth();
        $response->setContentType("text/json;charset=UTF-8") ;
        $response->setContent($content);
        

    }
}
