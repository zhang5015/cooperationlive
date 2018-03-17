<?php

/**
 * CooperationArticle form base class.
 *
 * @method CooperationArticle getObject() Returns the current form's model object
 *
 * @package    cooperation
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCooperationArticleForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'category_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CooperationCategory'), 'add_empty' => false)),
      'title'        => new sfWidgetFormInputText(),
      'author'       => new sfWidgetFormInputText(),
      'body'         => new sfWidgetFormTextarea(),
      'link'         => new sfWidgetFormInputText(),
      'image'        => new sfWidgetFormInputText(),
      'abstract'     => new sfWidgetFormInputText(),
      'is_public'    => new sfWidgetFormInputText(),
      'is_activated' => new sfWidgetFormInputText(),
      'expires_at'   => new sfWidgetFormDateTime(),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'category_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CooperationCategory'))),
      'title'        => new sfValidatorString(array('max_length' => 50)),
      'author'       => new sfValidatorString(array('max_length' => 50)),
      'body'         => new sfValidatorString(array('max_length' => 65535)),
      'link'         => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'image'        => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'abstract'     => new sfValidatorString(array('max_length' => 255)),
      'is_public'    => new sfValidatorInteger(array('required' => false)),
      'is_activated' => new sfValidatorInteger(array('required' => false)),
      'expires_at'   => new sfValidatorDateTime(),
      'created_at'   => new sfValidatorDateTime(),
      'updated_at'   => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('cooperation_article[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CooperationArticle';
  }

}
