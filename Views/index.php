<!DOCTYPE html>

    <?php
require './header.php';
$quizlist = new QuizModel();


$quizes = $quizlist->GetQuizList();


?>
<section id="main" class="outer-wrapper">

    <div class="inner-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <h2 class="text-center">Technical Task</h2>
                    <form role="form">
                        <div class="form-group">
                            <input type="text" class="form-control" id="UserName" required placeholder="Enter Your Name">
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="test" required="">
                                <option value="0">Choose Test</option>
                                <?php foreach ($quizes as $key => $value) { ?>
                                    <option value="<?php echo $value['QuizID'] ?>"><?php echo $value['QuizName'] ?></option>    
                                    <?php
                                }
                               ?>
                            </select>
                        </div> 
                        <button type="button" onclick="nextround()" class="btn btn-default" name="start" value="start">Start</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>
<?php
require './footer.php';
?>


