<?php

require '../Controller/connection.php';

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
        $query .= ' From '.$table;
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
    
    public function GetQuestioniers($qid){
        $table = 'tbl_quiz_questions';
        $query = 'select QuizQuestionsID, ActualQuestion';
        $query .= ' From '.$table;
        $query .= ' WHERE quizFK ='.$qid;
        
    }

}

;
