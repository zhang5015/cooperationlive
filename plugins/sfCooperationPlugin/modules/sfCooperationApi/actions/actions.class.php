<?php

/**
 * api actions.
 *
 * @package    cooperation
 * @subpackage api
 * @author     Your name here
 * @version    1.0
 */
class sfCooperationApiActions extends sfActions
{
    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request)
    {
        $this->forward('default', 'module');
    }

  public function executeList(sfWebRequest $request)
  {
    $this->notices = array();
    foreach ($this->getRoute()->getObjects() as $notice)
    {
      $this->notices[$this->generateUrl('notice_show_user', $notice, true)] = $notice->asArray($request->getHost());
    }
 
    switch ($request->getRequestFormat())
    {
      case 'yaml':
        $this->setLayout(false);
        $this->getResponse()->setContentType('text/yaml');
        break;
    }
  }
    
}
