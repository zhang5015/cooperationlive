<?php

/**
 * PluginCooperationNotice form.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: sfDoctrineFormPluginTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
abstract class PluginCooperationNoticeForm extends BaseCooperationNoticeForm
{
    public function setup()
    {
        parent::setup();
    }
    public function configure()
    {
        
        $this->removeFields();

        $this->validatorSchema['email'] = new sfValidatorAnd(array(
        $this->validatorSchema['email'],
        new sfValidatorEmail(),
        ));

        unset($this['created_at'], $this['updated_at'], $this['cooperation_affiliates_list']);

        $this->validatorSchema['email'] = new sfValidatorAnd(array(
        $this->validatorSchema['email'],
        new sfValidatorEmail(),
        ));

        $this->widgetSchema['type'] = new sfWidgetFormChoice(array(
      'choices'  => Doctrine_Core::getTable('CooperationNotice')->getTypes(),
      'expanded' => true,
        ));
        $this->validatorSchema['type'] = new sfValidatorChoice(array(
      'choices' => array_keys(Doctrine_Core::getTable('CooperationNotice')->getTypes()),
        ));

        $this->widgetSchema['logo'] = new sfWidgetFormInputFile(array(
      'label' => 'Company logo',
        ));

        $this->widgetSchema->setLabels(array(
      'category_id'    => 'Category',
      'is_public'      => 'Public?',
      'how_to_apply'   => 'How to apply?',
        ));

        $this->validatorSchema['logo'] = new sfValidatorFile(array(
      'required'   => false,
      'path'       => sfConfig::get('sf_upload_dir').'/notices',
      'mime_types' => 'web_images',
        ));

        $this->widgetSchema->setHelp('is_public', 'Whether the notice can also be published on affiliate websites or not.');
        $this->disableLocalCSRFProtection();
    }

    protected function removeFields()
    {
        unset(
        $this['created_at'], $this['updated_at'],
        $this['expires_at'], $this['is_activated'],
        $this['token']
        );
    }
}
