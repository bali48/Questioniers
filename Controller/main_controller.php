<?php
require_once '../Model/QuizModel.php';

if(isset($_POST['GetQuestionparams'])){
    $TestID = $_POST['GetQuestionparams']['TestID'];
    $OffSet = $_POST['GetQuestionparams']['OffSet'];
    $quizlist = new QuizModel();
    $quizes = $quizlist->GetQuestioniers($TestID,$OffSet);
    if($quizes != NULL){
        print_r(json_encode($quizes,JSON_PRETTY_PRINT));
    } else {
        print_r(json_encode(array('error' => 'No Record Found'),JSON_PRETTY_PRINT));
    }
    
}