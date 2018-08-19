<?php

//require '../Controller/connection.php';

class QuizModel {

    private $db;
    private $servername;
    private $password;
    private $username;
    private $dbname;
    private $conn;

    public function __construct() {
        $this->servername = "localhost";
        $this->dbname = "msq";
        $this->password = "";
        $this->username = "root";
        $this->db = $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
//parent::connect();
    }

    public function GetQuizList() {

        $table = 'tbl_quiz';
        $query = 'select QuizID, QuizName';
        $query .= ' From ' . $table;
        //$output = $ths->db->query();
        $output = mysqli_query($this->db, $query);
        $result = NULL;
        while ($row = mysqli_fetch_assoc($output)) {
            $result[] = $row;
        }
        return $result;


        //return $result;
//        $conn
    }

    public function GetQuestioniers($qid, $offset) {

        $table1 = 'tbl_quiz_questions';
        $Parentquery = 'select QuizQuestionsID, ActualQuestion';
        $Parentquery .= ' From ' . $table1;
        $Parentquery .= ' WHERE quizID =' . $qid;
        $Parentquery .= ' LIMIT 1 OFFSET ' . $offset;
        $Parentoutput = mysqli_query($this->db, $Parentquery);
        $ParentResult = mysqli_fetch_assoc($Parentoutput);
        if ($ParentResult != NULL) {

            $table2 = 'tbl_quiz_answers';
            $Childquery = 'select QuizAnswersID, Answer, IsValid';
            $Childquery .= ' From ' . $table2;
            $Childquery .= ' WHERE QuizQuestionsID =' . $ParentResult['QuizQuestionsID'];
            $Childoutput = mysqli_query($this->db, $Childquery);
            $AnswerArray = array();
            while ($row = mysqli_fetch_assoc($Childoutput)) {
                $AnswerArray[] = $row;
            }

            $result = array(
                'QuizQuestionsID' => $ParentResult['QuizQuestionsID'],
                'ActualQuestion' => $ParentResult['ActualQuestion'],
                'Answers' => $AnswerArray
            );
            return $result;
        } else {
            $result = NULL;
            return $result;
        }
    }

    public function GetQuestionsCount($testid) {
        $table = 'tbl_quiz_questions';
        $query = 'select Count(QuizID) as rows';
        $query .= ' From ' . $table;
        $query .= ' Where quizID = ' . $testid;
        //$output = $ths->db->query();
        $output = mysqli_query($this->db, $query);
        $row = NULL;
        $row = mysqli_fetch_assoc($output);
        return $row;
    }

}

;
