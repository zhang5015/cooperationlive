<?php

/**
 * PluginCooperationCategory form.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: sfDoctrineFormPluginTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
abstract class PluginCooperationCategoryForm extends BaseCooperationCategoryForm
{
    public function setup()
    {
        parent::setup();
    }
    public function configure()
    {
        $this->removeFields();

        $this->embedI18n(array('en', 'fr'));
        $this->widgetSchema->setLabel('en', 'English');
        $this->widgetSchema->setLabel('fr', 'French');
    }

    protected function removeFields()
    {
        unset(
            $this['cooperation_affiliates_list'],
            $this['created_at'],
            $this['updated_at']
        );
    }
}
