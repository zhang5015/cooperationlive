<?php

/**
 * PluginCooperationArticle form.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: sfDoctrineFormPluginTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
abstract class PluginCooperationArticleForm extends BaseCooperationArticleForm
{

	public function setup()
	{
		parent::setup();
		$this->removeFields();

		unset($this['created_at'], $this['updated_at']);

		$this->widgetSchema['image'] = new sfWidgetFormInputFile(array(
      'label' => 'Sample Picture',
		));

		$this->validatorSchema['image'] = new sfValidatorFile(array(
      'required'   => false,
      'path'       => sfConfig::get('sf_upload_dir').'/articles',
//      'max_size'   => '800K',
      'mime_types' => 'web_images',
		//      'onchange'   =>'imgPreview(this)'
		));

		$this->widgetSchema->setLabels(array(
      'category_id'    => 'Category'
      ));
		
	}

	public function configure()
	{
		$this->removeFields();

		unset($this['created_at'], $this['updated_at']);

		$this->widgetSchema['image'] = new sfWidgetFormInputFile(array(
      'label' => 'Sample Picture',
		));

		$this->validatorSchema['image'] = new sfValidatorFile(array(
      'required'   => false,
      'path'       => sfConfig::get('sf_upload_dir').'/articles',
      'max_size'   => '2M',
      'mime_types' => 'web_images',
		//      'onchange'   =>'imgPreview(this)'
		));

		$this->widgetSchema->setLabels(array(
      'category_id'    => 'Category'
      ));

      $this->disableLocalCSRFProtection();
	}

	protected function removeFields()
	{
		unset(
		$this['created_at'], $this['updated_at'],
		$this['expires_at'], $this['is_activated']
		);
	}

}
