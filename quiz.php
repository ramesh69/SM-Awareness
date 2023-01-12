<?php
//include auth_session.php file on all user panel pages
// include("auth_session.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <!-- FontAwesome-cdn include -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!-- Google fonts include -->
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700;800&amp;family=Sen:wght@400;700;800&amp;display=swap"
        rel="stylesheet">
    <!-- Bootstrap-css include -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Animate-css include -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- Main-StyleSheet include -->
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
</head>

<body>
    <div class="wrapper">
        <!-- Top content -->
        <div class="container">
            <div class="row">
                <div style="text-align: center; padding-top:25px"><h3>Checking Your Social Media privacy & Security Awareness!!</h3></div>
            </div>
        </div>
        <div class="container"> 
            
            <form class="multisteps_form overflow-hidden position-relative" id="wizard" method="POST" action="#">
                <!------------------------- Step-1 ----------------------------->
                <div class="multisteps_form_panel">
                    <div class="question_title">
                        <h1 class="text-center py-5 animate__animated animate__fadeInRight animate_25ms" id="q_title">Question title here</h1>
                    </div>
                    <div class="row pt-3">
                        <ul class="text-center">
                            <li
                                class="position-relative step_1 d-inline-block animate__animated animate__fadeInRight animate_50ms" onclick="yesCheckBox()">
                                <input id="opt_1" type="checkbox" name="stp_1_select_option" value="Yes">
                                <label for="opt_1">YES</label>
                                <span class="position-absolute">A</span>
                            </li>
                            <li
                                class="step_1 position-relative d-inline-block animate__animated animate__fadeInRight animate_100ms" onclick="noCheckBox()">
                                <input id="opt_2" type="checkbox" name="stp_1_select_option" value="No">
                                <label for="opt_2">NO</label>
                                <span class="position-absolute">B</span>
                            </li>
                        </ul>
                    </div>
                    <div class="row">
                        <!-- Progress bar -->
                        <div class="step_progress position-absolute text-center step">
                            <span class="text-capitalize" id="q_no">question 1 / 4</span>
                            <div class="progress rounded-pill">
                                <div class="progress-bar rounded-pill" role="progressbar" id="q_progress_bar"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!---------- Form Button ---------->
                <button type="button" class="f_btn prev_btn text-uppercase position-absolute" id="prevBtn"
                    onclick="backPrev(1)"><span><i class="fas fa-arrow-left"></i></span> Last Question</button>
                <button type="button" class="f_btn next_btn text-uppercase position-absolute" id="nextBtn"
                    onclick="nextPrev(1)">Next Question</button> 
            </form>
        </div>
    </div>


    <script src="questions.js"></script>

    <script>

function yesCheckBox(){
    //console.log("yes checked");
    $("#opt_1").prop("checked", true);
    $("#opt_2").prop("checked", false);
}

function noCheckBox(){
    //console.log("uno checked");
    $("#opt_1").prop("checked", false);
    $("#opt_2").prop("checked", true);
}






    </script>





































    
    <!-- jQuery-js include -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!-- jquery-count-down include -->
    <script src="assets/js/countdown.js"></script>
    <!-- Bootstrap-js include -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- jQuery-validate-js include -->
    <script src="assets/js/jquery.validate.min.js"></script>
    <!-- Custom-js include -->
    <script src="assets/js/script.js"></script>
    <!-- <script type="text/javascript">
    $('#getting-started').countdown('2020/07/25', function(event) {
        $(this).html(event.strftime('%w weeks %d days %H:%M:%S'));
    });
</script> -->
</body>


</html>