<?php
session_start();
if(isset($_SESSION['kid'])){
    echo '<script>window.location.href="round1.php"</script>';
}
?>
<!DOCTYPE html>
<!-- saved from url=(0059)https://preview.colorlib.com/theme/bootstrap/login-form-20/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Decryptit | Login</title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="./login_files/css" rel="stylesheet">
<link rel="stylesheet" href="./login_files/font-awesome.min.css">
<link rel="stylesheet" href="./login_files/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $('#rulesModal').modal('show');
    $("form").on("submit", function(event){
        event.preventDefault();

        var formValues= $(this).serialize();
        console.log(formValues);

        $.post("check.php", formValues, function(data){
            // Display the returned data in browser
            $("#result").html(data);
        });
    });
});
</script>
<link rel="stylesheet" href = "styleclue.css">

</head>
<!--<body class="img js-fullheight" style="background-image: url(images/image3.jpg); height: 754px;">-->
<body>
    <video autoplay muted loop id="myVideo">
        <source src="images/image4.mp4" type="video/mp4">
    </video>
    <nav class="navbar navbar-expand-md navbar-light bg-dark">
        <a href="#" class="navbar-brand">
            <img src="images/logo.png" height="50" alt="Robotics">
        </a>
        <h2 class = "text-white font-weight-bold" style = "margin-left:590px">DECRYPTIT</h2>
        <div class="navbar-nav ml-auto">
            <button type="button" name="rules" class="nav-item btn btn-primary" data-toggle="modal" data-target="#rulesModal">Rules</button>
            <div class="modal fade hide" id="rulesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
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
                  </ol>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                </div>
              </div>
            </div>
          </div>
        </div>
    </nav>
<section class="ftco-section">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-6 text-center mb-5">
</div>
</div>
<div class="row justify-content-center">
<div class="col-md-6 col-lg-4">
<div class="login-wrap p-0">
<form action="check.php" method="POST">
<div class="form-group">
<input type="text" class="form-control" name="kid" placeholder="K! ID" required="">
</div>
<div class="form-group">
<input type="text" class="form-control" name="name" placeholder="Name" required="">
</div>
<div class="form-group">
<input type="text" class="form-control" name="phone" placeholder="Phone" required="">
</div>
<div class="form-group">
<input type="email" class="form-control" name="email" placeholder="Email" required="">
</div>
<div class="form-group">
<input type="password" class="form-control" name="password" placeholder="Password" required="">
</div>
<div class="form-group">
  <input
    class="form-check-input"
    type="checkbox"
    value=""
    id="flexCheckDefault"
    required
  />
  <label class="form-check-label" for="flexCheckDefault">
    I agree with the Rules of this round
  </label>
</div>

<div class="form-group">
<button type="submit" class="form-control btn btn-primary submit px-3">PLAY!!!</button>
</div>


</div>

</div>
</form>
<div id="result"></div>
</div>
</div>
</div>
</div>
</div>
</section>
<script src="./login_files/jquery.min.js.download"></script>
<!--<script src="./login_files/popper.js.download"></script>
<script src="./login_files/bootstrap.min.js.download"></script>-->
<script src="./login_files/main.js.download"></script>
</body></html>
