<?php
  session_start();
  if(isset($_SESSION['kid'])){
      $kid = $_SESSION['kid'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Decryptit | Round-2</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/logo.png" type="image/icon type">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href = "styleclue.css">
</head>

<body id="clue">
<div >

<button type="button" class="butt" data-toggle="modal" onclick="text_load(1)" data-target="#ques1" id="q1"></button>
<div class="modal fade" id="ques1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Question 1</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div><b>Decrypt the following message 😉</b>
<br>Fictional border ordinary boredom
<br>Elephant fox programming genre 
<br>Robotics mini enigmatic son
<br>Classy experience</div>
          <p id="error1" class="text-white text-center bg-danger"></p>
          <p id="success1" class="text-white text-center bg-success"></p>
          <textarea rows="5" class="form-control" id="answer1"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success" onclick="answer_update(1)" >Save changes</button>
      </div>
    </div>
  </div>
</div>

<button type="button" class="butt" data-toggle="modal" onclick="text_load(2)" data-target="#ques2" id="q2"></button><!--hidden-->
<div class="modal fade" id="ques2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Question 2</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div><b>Decrypt the following message 😊</b>
      <br>12-5-1-18-14
      </div>
          <p id="error2" class="text-white text-center bg-danger"></p>
          <p id="success2" class="text-white text-center bg-success"></p>
          <textarea rows="5" class="form-control" id="answer2"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success" onclick="answer_update(2)" >Save changes</button>
      </div>
    </div>
  </div>
</div>

<button type="button" class="butt" data-toggle="modal" onclick="text_load(3)" data-target="#ques3" id="q3"></button><!--hidden-->
<div class="modal fade" id="ques3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Question 3</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div>
        <b>Decrypt the following message 😭</b>
        <img src="images/3rd question img.png" class='img-fluid' alt="IMAGE">
        <p class='text-center'><b>NTP EMJQCITHOP → Gopal</b></p>
        </div>
          <p id="error3" class="text-white text-center bg-danger"></p>
          <p id="success3" class="text-white text-center bg-success"></p>
          <textarea rows="5" class="form-control" id="answer3"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success" onclick="answer_update(3)" >Save changes</button>
      </div>
    </div>
  </div>
</div>

<button type="button" class="butt" data-toggle="modal" onclick="text_load(4)" data-target="#ques4" id="q4"></button><!--hidden-->
<div class="modal fade" id="ques4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Question 4</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div><b>Decrypt the following message 😎</b>
<br>UL UZNKXY
<br>Hint:The number of the most valuable and the least valued thing in a million
        </div>
          <p id="error4" class="text-white text-center bg-danger"></p>
          <p id="success4" class="text-white text-center bg-success"></p>
          <textarea rows="5" class="form-control" id="answer4"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success" onclick="answer_update(4)" >Save changes</button>
      </div>
    </div>
  </div>
</div>

<button type="button" class="butt" data-toggle="modal" onclick="text_load(5)" data-target="#ques5" id="q5"></button><!--hidden-->
<div class="modal fade" id="ques5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Question 5</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div><b>Decrypt:</b> 67-72-2-38-92 🙄
<br>Hint:“No matter what he does, every person on earth plays a central role in the history of the world. And normally he doesn't know it.”
</div>
          <p id="error5" class="text-white text-center bg-danger"></p>
          <p id="success5" class="text-white text-center bg-success"></p>
          <textarea rows="5" class="form-control" id="answer5"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success" onclick="answer_update(5)" >Save changes</button>
      </div>
    </div>
  </div>
</div>

<button type="button" class="butt" data-toggle="modal" onclick="text_load(6)" data-target="#ques6" id="q6"></button><!--hidden-->
<div class="modal fade" id="ques6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Question 6</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div><b>Decrypt the following message 😶</b>
        <img src="images/6th question img1.png" class='img-fluid' alt="img">
        <br>key:
        <img src="images/6th question img2.png" class='img-fluid' alt="img">
      </div>
          <p id="error6" class="text-white text-center bg-danger"></p>
          <p id="success6" class="text-white text-center bg-success"></p>
          <textarea rows="5" class="form-control" id="answer6"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success" onclick="answer_update(6)" >Save changes</button>
      </div>
    </div>
  </div>
</div>

<button type="button" class="butt" data-toggle="modal" onclick="text_load(7)" data-target="#ques7" id="q7"></button><!--hidden-->
<div class="modal fade" id="ques7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Question 7</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div><b>Decrypt the following message 😴</b>
            <br>LRRENOAFM
      </div>
          <p id="error7" class="text-white text-center bg-danger"></p>
          <p id="success7" class="text-white text-center bg-success"></p>
          <textarea rows="5" class="form-control" id="answer7"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success" onclick="answer_update(7)" >Save changes</button>
      </div>
    </div>
  </div>
</div>

<button type="button" class="butt" data-toggle="modal" onclick="text_load(8)" data-target="#ques8" id="q8"></button><!--hidden-->
<div class="modal fade" id="ques8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Question 8</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>
        Attend this question after completing all other 7 questions:
        <br>From the previously decrypted chunks of messages formulate the entire statement🙏     
        </div>
          <p id="error8" class="text-white text-center bg-danger"></p>
          <p id="success8" class="text-white text-center bg-success"></p>
          <textarea rows="5" class="form-control" id="answer8"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success" onclick="answer_update(8)">Save changes</button>
      </div>
    </div>
  </div>
</div>



    <nav class="navbar navbar-expand-md navbar-light bg-dark">
        <a href="#" class="navbar-brand">
            <img src="images/logo.png" height="50" alt="Robotics">
        </a>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <p id="qnsans" class="nav-item text-white text-center"></p>
            </div>
            <h2 class = "text-white" style = "margin-left:20vw">DECRYPTIT</h2>
            <div class="navbar-nav ml-auto">
                <button type="button" name="rules" class="nav-item btn btn-primary" data-toggle="modal" data-target="#rulesModal">Rules</button>
                <div class="modal fade" id="rulesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Rules</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <ol>
                        <li>Participants shortlisted from Round 1 alone will be playing this round.</li>
                        <li>Round 2 shall be accessed only from laptops.</li>
                        <li>You would have received an email containing your unique password for this round.Enter your email id, unique password,mobile number(the same you entered for round 1) and proceed.</li>
                        <li>Make sure to complete the round at a single stretch.</li>
                        <li>The timer begins as soon as you login to the page.It keeps running till you click the “End Quiz” button.The site automatically closes at 3:00 P.M IST.</li>
                        <li>Make sure to click the "End Quiz" button when you want to end the round even if you haven’t completed all the answers before you leave the site.</li>
                        <li>Questions are hidden within the room displayed immediately after login.Search for the questions by hovering your mouse over the image.Click on the image to view the question.</li>
                        <li>Marks will be based on correctness as well as time elapsed and difficulty of questions.</li>
                        <li>Malpractice in any forms will not be tolerated.</li>
                        <li>Organiser's decision will be final.</li>
                        <li><b>Please click end quiz button if you finish the test before 3 pm IST.</b></li>
                      </ol>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="navbar-nav ml-auto">
                <p id = "clock" class="nav-item text-white text-center"></p>
            </div>
            <div class="navbar-nav ml-auto">
            <button type="button" name="end" onclick="end()" class="nav-item btn btn-success">End Quiz</button>
            </div>
        </div>
    </nav>
</div>
</body>
<script>


    var kid = "<?php echo $kid?>";
    var startTime = new Date('<?php echo $_SESSION['start'];?>');

    function updateClock(){
        let currentTime = new Date ();
        var hours = currentTime.getHours();
        var minutes = currentTime.getMinutes();
        
        if (hours >=15 ){
           end();
           return;
        }
        
       let elapsedTime = currentTime - startTime;
       let elapsedSec = Math.floor(elapsedTime/1000);
       let elapsedMin = Math.floor(elapsedSec/60);
       let elapsedHr = Math.floor(elapsedMin/60);
       elapsedSec = elapsedSec%60;
       elapsedMin = elapsedMin%60;

        elapsedSec = ( elapsedSec < 10 && elapsedSec >=0 ? "0" : "" ) + elapsedSec;
        elapsedMin = ( elapsedMin < 10 && elapsedMin >=0 ? "0" : "" ) + elapsedMin;
        elapsedHr = ( elapsedHr < 10 && elapsedHr >=0? "0" : "" ) + elapsedHr;

       let elapsedString = ' Elapsed Time: <br>'+elapsedHr + " : " + elapsedMin + " : " + elapsedSec;

        $("#clock").html(elapsedString);
        //console.log(elapsedString);

     }


    function checkround1(){
        $.post('functions/checkround1.php', {
            kid:kid
        }, function (result){
            if(result==='DONE'){
                alert('Already attempted the round. Wait for result.');
                end();
            }
        });

    }


    function checkkid(){
        $.post('functions/checkkid.php', {
            kid: kid
        }, function (result){
            console.log(result);
            });
        }


    $(document).ready(function (){

        console.log(startTime);
        checkround1();
        checkkid();
        question_answered();
        setInterval(function () {updateClock(startTime)}, 1000);

    });
    function end(){
        let error=$('#error');

        $.post('end.php', {
            kid:kid
        }, function (result){
            if(result==='Done'){
                window.location.href = 'thankyou.php';
            }else{
                alert(result);
            }
        })
    }

    function question_answered(){
        let qnsans= $("#qnsans");
        $.post('functions/numqnsans.php', {
            kid: kid
        }, function (result){
            qnsans.html("No of qns answered by : "+kid+" is "+result+" of 8");
        });
    }

    function text_load(answerid){
        let answer = $("#answer"+answerid);
        let error = $("#error"+answerid);
        let success = $("#success"+answerid);

        $.post('functions/textload.php', {
            kid: kid,
            answerid: answerid
        }, function (result){
            answer.val(result);
            error.empty();
            success.empty();
        })
    }

    function answer_update(answerid){
        let answer = $("#answer"+answerid);
        let error = $("#error"+answerid);
        let success = $("#success"+answerid);
        console.log(answerid);

        $.post('functions/updateanswer.php', {
            answerid: answerid,
            kid: kid,
            answer: answer.val()
        }, function (result){
            if(result==='SUCCESS') {
                error.empty();
                success.html("Answer "+ answerid +" updated!");
                question_answered();
            }else{
                error.html(result);
            }
        });
    }
</script>
</html>
<?php
  }else{
      echo '<script>alert("Login to attempt.");';
      echo "window.location.href = 'index.php';</script>";
  }
