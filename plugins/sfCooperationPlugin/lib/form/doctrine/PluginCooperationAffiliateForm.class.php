<?php

/**
 * CooperationAffiliate form.
 *
 * @package    cooperation
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PluginCooperationAffiliateForm extends BaseCooperationAffiliateForm
{
    public function setup()
    {
        parent::setup();
    }

    public function configure()
    {
        $this->useFields(array(
      'url', 
      'email', 
      'cooperation_categories_list'
      ));
      $this->widgetSchema['cooperation_categories_list']->setOption('expanded', true);
      $this->widgetSchema['cooperation_categories_list']->setLabel('Categories');

      $this->validatorSchema['cooperation_categories_list']->setOption('required', true);

      $this->widgetSchema['url']->setLabel('Your website URL');
      $this->widgetSchema['url']->setAttribute('size', 50);

      $this->widgetSchema['email']->setAttribute('size', 50);

      $this->validatorSchema['email'] = new sfValidatorEmail(array('required' => true));
    }
}
