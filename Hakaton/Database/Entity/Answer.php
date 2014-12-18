<?php
/**
 * Created by PhpStorm.
 * User: Pandora
 * Date: 16-Dec-14
 * Time: 12:35 PM
 */

namespace Hakaton\Database\Entity;


/**
 * Class Answer
 * @package Hakaton\Database\Entity
 */
class Answer
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
    private $_correct;
    /**
     * @var
     */
    private $_questionId;









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
    public function getCorrect()
    {
        return $this->_correct;
    }

    /**
     * @param mixed $correct
     */
    public function setCorrect($correct)
    {
        $this->_correct = $correct;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuestionId()
    {
        return $this->_questionId;
    }

    /**
     * @param mixed $questionId
     */
    public function setQuestionId($questionId)
    {
        $this->_questionId = $questionId;
        return $this;
    }






}