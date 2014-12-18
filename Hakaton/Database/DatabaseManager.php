<?php


namespace Hakaton\Database;
use Hakaton\Database\Entity\Answer;
use Hakaton\Database\Entity\Question;
use Hakaton\Database\Entity\Subject;
use mysqli;


/**
 * Class DatabaseManager
 * is used for interaction with our database
 */
class DatabaseManager
{
    /** Stores our connection to the database
     * @var mysqli
     */
    private $connection;
    /** Result of a query
     * @var mysqli
     */
    private $result;		//
    /** Number of rows of a query
     * @var
     */
    private $numRows;
    /** Number of affected rows
     * @var
     */
    private $affected;




    /**
     * @var string
     */
    private $dbServer;
    /**
     * @var string
     */
    private $dbUser;
    /**
     * @var string
     */
    private $dbPass;
    /**
     * @var string
     */
    private $dbName;



    /**
     * Initiates server info
     */
    public function __construct(){
        $this->dbServer =	"localhost";
        $this->dbUser	=	"root";
        $this->dbPass	=	"";
        $this->dbName	=	"hakaton";
    }





    /**
     * Sets up connection with our database
     */
    function connect()
    {
        $this->connection = new mysqli($this->dbServer, $this->dbUser, $this->dbPass, $this->dbName);
        if($this->connection->connect_errno) {
            printf("Connection failure: %s\n", $this->connection->connect_error);
            die();
        }
        $this->connection->set_charset('utf8');
    }


    /** Executes Query
     *
     * @param $query
     * @return bool
     */
    function executeQuery($query)
    {
        if($this->result = $this->connection->query($query))
        {
            $this->affected =	mysqli_affected_rows($this->connection);
            return true;
        }
        else
        {
            return false;
        }
    }



    /** Forms and executes query
     * @param string $select
     * @param string $from
     * @param null $where
     * @param null $order
     * @return bool
     */
    function find($select = '*', $from = '', $where = null, $order = null)
    {
        $this->connect();
        $query	=	"SELECT "	.$select.
                    " FROM "	.$from;
        if($where != null) {
            $query .= " WHERE ".$where;
        }
        if($order != null) {
            $query .= " ORDER BY ".$order;
        }
        if(!$this->executeQuery($query)) {
            echo "Something bad happened !";
            return false;
        }
        else {
            $this->numRows  =   mysqli_num_rows($this->result);
            return true;
        }
    }


    /** Returns an array of all subjects
     * @return array
     * @throws \Exception
     */
    function getSubjects()
    {
        $this->connect();

        if($this->find('*', 'subjects')) {
            $array = [];

            while ($obj = mysqli_fetch_object($this->result)) {
                $s = new Subject();

                $s->setId($obj->id)
                    ->setDescription($obj->description)
                    ->setName($obj->name);

                array_push($array, $s);
            }

            mysqli_close($this->connection);
            return $array;
        }
        else {
            throw new \Exception("Could not get questions !");
        }
    }






    /** Returns an array of Question objects
     * @param Subject $subject
     * @return array
     * @throws \Exception
     */
    function getQuestions(Subject $subject)
    {
        /* Depending on the subject id */
        $where = "subject_id=".$subject->getId()."";

        $this->connect();
        if($this->find('*', 'questions',$where)) {
            $array = [];

            while ($obj = mysqli_fetch_object($this->result)) {
                $q = new Question();

                $q->setId($obj->id)
                    ->setDescription($obj->description)
                    ->setSubjectId($obj->subject_id);

                array_push($array, $q);
            }

            mysqli_close($this->connection);
            return $array;
        }
        else {
            throw new \Exception("Could not get questions !");
        }

    }


    /** Returns all answers for the passed subject
     * @param Question $question
     * @return array
     * @throws \Exception
     */
    function getAnswers(Question $question)
    {
        /* Depending on the question id */
        $where = "question_id={$question->getId()}";

        $this->connect();
        if($this->find('*', 'answers',$where)) {
            $array = [];

            while ($obj = mysqli_fetch_object($this->result)) {
                $a = new Answer();

                $a->setId($obj->id)
                    ->setDescription($obj->description)
                    ->setCorrect($obj->correct)
                    ->setQuestionId($obj->question_id);

                array_push($array, $a);
            }

            mysqli_close($this->connection);
            return $array;
        }
        else {
            throw new \Exception("Could not get questions !");
        }

    }



}