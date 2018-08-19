<?php

session_start();
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require './header.php';
require '../Model/QuizModel.php';
//$quizlist = new QuizModel();
//$quizes = $quizlist->GetQuizList();

if (isset($_GET['name'], $_GET['test'])) {
    $_SESSION['name'] = $_GET['name'];
    $quizlist = new QuizModel();
    $quizesCount = $quizlist->GetQuestionsCount($_GET['test']);
    $numberofquestions = $quizesCount['rows'];
    if($numberofquestions == 0 || $numberofquestions == NULL){
        echo '<h1> Sorry No Question Availible </h1>';
        
    }else{
        $testid = $_GET['test'];
    ?>
<script>
    var QuestionsCount = <?php echo $numberofquestions ?>;
    var TotalResult = 0;
GetQuestion(<?php echo $_GET['test']; ?>,0);
</script>


<style>

</style>
<div class="mcq">
    <div class="quiz">
        <div class="output">
            
        </div>
        <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                <input type="hidden" id='offset' value="0">
                
            </div>
        </div>
    </div>
    
    <button class="next btn  btn-default" onclick="nextQuestion(<?php echo $testid; ?>)">Next</button>   
    <button class="done btn  btn-default" style="display: none;" onclick="FinalizeResult()">View Result</button>   
</div>
<?php

    }
}

include './footer.php';
/*
 SELECT * FROM tbl_quiz_questions q
INNER join tbl_quiz_answers a on q.QuizQuestionsID = a.QuizQuestionsID
WHERE q.quizID = 1
LIMIT 4 OFFSET 1
 
 */
?>

