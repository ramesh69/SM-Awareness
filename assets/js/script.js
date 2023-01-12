
$(function(){
  "use strict";
  // ========== Form-select-option ========== //
  $(".step_1").on('click', function(){
    $(".step_1").removeClass("active");
    $(this).addClass("active");
  });
});

var currentTab = 0; 
var progress_value = 0;
var progress_full_value = 100 / questions.length;

var yes_count = 0;
var no_count = 0;

showQuestion(currentTab); 

progress_value = progress_value + progress_full_value;

document.getElementById('q_progress_bar').setAttribute("style","width:"+ progress_value +"%");

function showQuestion(n) {

 if(currentTab < questions.length){


    var x = questions.length;

    document.getElementById("q_title").innerHTML = questions[currentTab].question;

    //currentTab = currentTab + 1;
    var temp = currentTab + 1
    var no_text = "Question " + temp + " / " + x;
    
    document.getElementById("q_no").innerHTML = no_text;

  }

  if(currentTab == questions.length){
    document.getElementById("nextBtn").innerHTML = "Finished";

    var display_msg = "Your score is " + yes_count + " our of " + questions.length + ". Better read Our Suggestion Articles!!";

    swal("Good job!", display_msg,"success")
    .then((value) => {
      //swal(`The returned value is: ${value}`);
      window.location.href='article.php?result='+ yes_count +'';

    });

    //swal("Good job!", display_msg,"success");


  }

  

  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }

  
  fixStepIndicator(n)
}

function nextPrev(n) {

  progress_value = progress_value + progress_full_value;

  document.getElementById('q_progress_bar').setAttribute("style","width:"+ progress_value +"%");
  
  currentTab = currentTab + n;

    var check_value = $("input[name='stp_1_select_option']:checked").val();
    console.log(check_value);

    if(currentTab != questions.length){
      if(check_value.trim() === questions[currentTab].answer){
        console.log("run");
        yes_count += 1;
      }else {
        no_count += 1;
      }
    }

    $(".step_1").removeClass("active");

  showQuestion(currentTab);

}

function backPrev(n) {
  progress_value = progress_value - progress_full_value;
  //console.log("progress value "+progress_value);
  document.getElementById('q_progress_bar').setAttribute("style","width:"+ progress_value +"%");
  currentTab = currentTab - n;
  console.log(currentTab);
  showQuestion(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("multisteps_form_panel");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  // var i, x = document.getElementsByClassName("step");
  // for (i = 0; i < x.length; i++) {
  //   x[i].className = x[i].className.replace(" active", "");
  // }
  //... and adds the "active" class to the current step:
  //x[n].className += " active";

  

 // console.log("rn fix");


}
