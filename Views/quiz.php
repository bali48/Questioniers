<?php

session_start();
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require './header.php';
//$quizlist = new QuizModel();
//$quizes = $quizlist->GetQuizList();

if (isset($_GET['name'], $_GET['test'])) {
    $_SESSION['name'] = $_GET['name'];
}
?>
<style>
    body{
        text-align: center;
    }

    .mcq{
        position: relative;
        display: block;
        margin:50px auto;
        width: 900px;
        height: 50%;
        /*background-color: crimson;*/ 
        border-radius: 5px;
        padding:10px;
        border:5px solid #c51236;   
    }                                                                                                                      
    .quiz{
        display: block;
        padding:10px;  
    }
    .quiz .output{
        position: relative;
        padding: 10px;
        margin-bottom: 10px;                            
    }
    .output p{
        padding: 10px;
        line-height: 30px;
        font-size: 26px;

        border-radius: 5px;
        margin-bottom: 5px;
    }
    .next{  
        display: block; 
        width: 50%;
        margin: 0 auto;
    } 
    
</style>
<div class="mcq">
    <div class="quiz">
        <div class="output">
            <p>Who Are You ?</p>
            <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="btn btn-primary">
                                <input checked="checked" data-val="true" data-val-required="The IsSmallBusiness field is required." id="IsSmallBusiness" name="IsSmallBusiness" value="False" type="radio">
                                IndividualIndividual
                            </label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="btn btn-primary">
                                <input checked="checked" data-val="true" data-val-required="The IsSmallBusiness field is required." id="IsSmallBusiness" name="IsSmallBusiness" value="False" type="radio">
                                IndividualIndividual
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="btn btn-primary">
                                <input checked="checked" data-val="true" data-val-required="The IsSmallBusiness field is required." id="IsSmallBusiness" name="IsSmallBusiness" value="False" type="radio">
                                IndividualIndividual
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="btn btn-primary">
                                <input checked="checked" data-val="true" data-val-required="The IsSmallBusiness field is required." id="IsSmallBusiness" name="IsSmallBusiness" value="False" type="radio">
                                IndividualIndividual
                            </label>
                        </div>
                    </div>

                </div>

            </form>
        </div>
        <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">

            </div>
        </div>
    </div>
    
    <div class="next btn  btn-default">Next</div>   
</div>
<?php

include './footer.php';
/*
 SELECT * FROM tbl_quiz_questions q
INNER join tbl_quiz_answers a on q.QuizQuestionsID = a.QuizQuestionsID
WHERE q.quizID = 1
LIMIT 4 OFFSET 1
 
 */
?>

