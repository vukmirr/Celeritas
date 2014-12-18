<?php
/**
 * Created by PhpStorm.
 * User: Pandora
 * Date: 16-Dec-14
 * Time: 12:35 PM
 */

namespace Hakaton\Database\Entity;


/**
 * Class Question
 * @package Hakaton\Database\Entity
 */
class Question
{
    /** ID Primary Key
     * @var
     */
    private $_id;
    /**
     * @var
     */
    private $_description;
    /**
     * @var
     */
    private $_subjectId;








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

    /**
     * @return mixed
     */
    public function getSubjectId()
    {
        return $this->_subjectId;
    }

    /**
     * @param mixed $subjectId
     */
    public function setSubjectId($subjectId)
    {
        $this->_subjectId = $subjectId;
        return $this;
    }


}