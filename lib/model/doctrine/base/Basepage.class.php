<?php

/**
 * Basepage
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $layout
 * @property string $title
 * @property clob $body
 * @property boolean $published
 * @property string $description
 * @property string $keywords
 * @property string $robots
 * @property string $author
 * 
 * @method integer getId()          Returns the current record's "id" value
 * @method string  getName()        Returns the current record's "name" value
 * @method string  getLayout()      Returns the current record's "layout" value
 * @method string  getTitle()       Returns the current record's "title" value
 * @method clob    getBody()        Returns the current record's "body" value
 * @method boolean getPublished()   Returns the current record's "published" value
 * @method string  getDescription() Returns the current record's "description" value
 * @method string  getKeywords()    Returns the current record's "keywords" value
 * @method string  getRobots()      Returns the current record's "robots" value
 * @method string  getAuthor()      Returns the current record's "author" value
 * @method page    setId()          Sets the current record's "id" value
 * @method page    setName()        Sets the current record's "name" value
 * @method page    setLayout()      Sets the current record's "layout" value
 * @method page    setTitle()       Sets the current record's "title" value
 * @method page    setBody()        Sets the current record's "body" value
 * @method page    setPublished()   Sets the current record's "published" value
 * @method page    setDescription() Sets the current record's "description" value
 * @method page    setKeywords()    Sets the current record's "keywords" value
 * @method page    setRobots()      Sets the current record's "robots" value
 * @method page    setAuthor()      Sets the current record's "author" value
 * 
 * @package    symfony
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Basepage extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('page');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('layout', 'string', 255, array(
             'type' => 'string',
             'default' => 'layout',
             'length' => 255,
             ));
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('body', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('published', 'boolean', null, array(
             'type' => 'boolean',
             ));
        $this->hasColumn('description', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('keywords', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('robots', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('author', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));

        $this->option('symfony', array(
             'filter' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}