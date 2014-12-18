<?php

namespace Hakaton\Controller;


use Hakaton\Database\DatabaseManager;
use Hakaton\Database\Entity\Subject;

/** Controls all shit
 * Class DefaultController
 * @package Hakaton\Controller
 */
class DefaultController
{

    /** Returns answers associated with question array
     * @param Subject $subject
     * @return array
     * @throws \Exception
     */
    function buildQA(Subject $subject)
    {
        $questions = $this->getRandomQuestions($subject);

        $QAArray = [];
        $dm = new DatabaseManager();

        foreach ($questions as $q) {
            array_push($QAArray, [  "question" => $q,
                "answers"  =>  $dm->getAnswers($q)]);
        }

        return $QAArray;
    }







    /** Returns an array of 10 random questions
     * @param Subject $subject
     * @return array|bool
     * @throws \Exception
     */
    function getRandomQuestions(Subject $subject)
    {
        $dm = new DatabaseManager();

        $questions = $dm->getQuestions($subject);   //Array of questions
        $arraySize = count($questions);
        $randQuest = [];

        /* we need to have atleast 10 questions in the database */
        if ($arraySize < 10) { return false; }

        /* we need to fill up 10 random questions */
        while (count($randQuest) < 10) {
            $rNumber = rand(0, $arraySize - 1);
            $q = $questions[$rNumber];

            /* Strict check if contains */
            if (!in_array($q, $randQuest, true)) {
                array_push($randQuest, $questions[$rNumber]);
            }
        }

        return $randQuest;
    }








}