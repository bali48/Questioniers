<?php
session_start();
$Name = $_SESSION['name'];
$Score = $_GET['Result'];
$total = $_GET['total'];
?>
<section id="main" class="outer-wrapper">

    <div class="inner-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <h2>Thanks, <?php echo $Name ?> !</h2>
<h3>You responded Correctly to <?php echo $Score; ?> out of <?php echo $total; ?> Questions</h3>
                </div>
            </div>
        </div>
    </div>
</section>

