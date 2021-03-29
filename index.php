<?php
session_start();
if(isset($_SESSION['kid'])){
    echo '<script>window.location.href="round1.php"</script>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Decryptit | Round-2</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href = "styleclue.css">
</head>
<body>
<div id="clue">

<button type="button" class="butt" data-toggle="modal" data-target="#ques1" id="q1"></button>
<div class="modal fade" id="ques1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Question</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>Decrypt the following message 😉

<br>Fictional border ordinary boredom
<br>Elephant fox programming genre 
<br>Robotics mini enigmatic son
<br>Classy experience</div>
        <textarea id="1"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>

<button type="button" class="butt" data-toggle="modal" data-target="#ques2" id="q2"></button><!--hidden-->
<div class="modal fade" id="ques2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Question</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>Decrypt the following message 😊
<br>12-5-1-18-14
</div>
        <textarea id="1"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>

<button type="button" class="butt" data-toggle="modal" data-target="#ques3" id="q3"></button><!--hidden-->
<div class="modal fade" id="ques3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Question</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>
        Decrypt the following message 😭
        <img src="images/3rd question img.png" alt="IMAGE">
        </div>
        <textarea id="1"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>

<button type="button" class="butt" data-toggle="modal" data-target="#ques4" id="q4"></button><!--hidden-->
<div class="modal fade" id="ques4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Question</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>Decrypt the following message 😎
<br>UM UZNKXY
<br>Hint:The number of the most valuable and the least valued thing in a million
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
<!--
<div class="form-group">
<input type="password" class="form-control" name="password" placeholder="Password" required="">
</div>
-->
<div class="form-group">
<button type="submit" class="form-control btn btn-primary submit px-3">PLAY!!!</button>
</div>

<button type="button" class="butt" data-toggle="modal" data-target="#ques5" id="q5"></button><!--hidden-->
<div class="modal fade" id="ques5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Question</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
        <div>Decrypt: 67-72-2-38-92 🙄
<br>Hint:“No matter what he does, every person on earth plays a central role in the history of the world. And normally he doesn't know it.”
</div>
        <textarea id="1"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>

<button type="button" class="butt" data-toggle="modal" data-target="#ques6" id="q6"></button><!--hidden-->
<div class="modal fade" id="ques6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="width:900px">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Question</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>Decrypt the following message 😶
        <img src="images/6th question img1.png" alt="img">
        <br>key:
        <img src="images/6th question img2.png" alt="img">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>

<button type="button" class="butt" data-toggle="modal" data-target="#ques7" id="q7"></button><!--hidden-->
<div class="modal fade" id="ques7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Question</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>Decrypt the following message 😴
            <br>LRRENOAFM
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>

<button type="button" class="butt" data-toggle="modal" data-target="#ques8" id="q8"></button><!--hidden-->
<div class="modal fade" id="ques8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Question</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Attend this question after completing all other 7 questions:
From the previously decrypted chunks of messages formulate the entire statement🙏     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</section>
<script src="./login_files/jquery.min.js.download"></script>
<script src="./login_files/popper.js.download"></script>
<script src="./login_files/bootstrap.min.js.download"></script>
<script src="./login_files/main.js.download"></script>
</body></html>
