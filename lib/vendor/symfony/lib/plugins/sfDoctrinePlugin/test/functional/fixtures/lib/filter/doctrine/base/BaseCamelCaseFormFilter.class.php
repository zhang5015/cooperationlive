<?php

/**
 * CamelCase filter form base class.
 *
 * @package    symfony12
 * @subpackage filter
 * @author     Your name here
 * @version    1.0
 */
abstract class BaseCamelCaseFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'article_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Article'), 'add_empty' => true)),
      'testCamelCase' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'article_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Article'), 'column' => 'id')),
      'testCamelCase' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('camel_case_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CamelCase';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'article_id'    => 'ForeignKey',
      'testCamelCase' => 'Text',
    );
  }
}
