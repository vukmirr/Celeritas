<?php
/**
 * Created by PhpStorm.
 * User: Pandora
 * Date: 16-Dec-14
 * Time: 12:35 PM
 */

namespace Hakaton\Database\Entity;


/**
 * Class Subject aka Predmet
 * @package Hakaton\Database\Entity
 */
class Subject
{
    /** ID Primary key
     * @var
     */
    private $_id;
    /**
     * @var
     */
    private $_name;
    /**
     * @var
     */
    private $_description;







    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->_id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->_name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->_description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->_description = $description;
        return $this;
    }



}