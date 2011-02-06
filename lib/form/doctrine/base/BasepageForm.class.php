<?php

/**
 * page form base class.
 *
 * @method page getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasepageForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'name'        => new sfWidgetFormInputText(),
      'layout'      => new sfWidgetFormInputText(),
      'title'       => new sfWidgetFormInputText(),
      'body'        => new sfWidgetFormTextarea(),
      'published'   => new sfWidgetFormInputCheckbox(),
      'description' => new sfWidgetFormInputText(),
      'keywords'    => new sfWidgetFormInputText(),
      'robots'      => new sfWidgetFormInputText(),
      'author'      => new sfWidgetFormInputText(),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'layout'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'title'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'body'        => new sfValidatorString(array('required' => false)),
      'published'   => new sfValidatorBoolean(array('required' => false)),
      'description' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'keywords'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'robots'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'author'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'  => new sfValidatorDateTime(),
      'updated_at'  => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('page[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'page';
  }

}
