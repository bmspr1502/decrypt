<?php
  session_start();
  echo $_SESSION["kid"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Decryptit | Round-1</title>
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
        <h5 class="modal-title" id="exampleModalLabel">Question number</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>Write a program for error correction in digital communication</div>
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
        <h5 class="modal-title" id="exampleModalLabel">Question number</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>Write a program to exchange all odd bits with even bits.(Note: input must be binary)</div>
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
        <h5 class="modal-title" id="exampleModalLabel">Question number</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>Write a program to print
            <div style="margin-left:50%">*</div>
            <div style="margin-left:43%">* A *</div>
            <div style="margin-left:37%">* A * B *</div>
            <div style="margin-left:32%">* A * B * C *</div>
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
        <h5 class="modal-title" id="exampleModalLabel">Question number</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>Take any two numbers for ex: 18 12
        <table>
          <tr>
            <td>18</td>
            <td>12</td>
          </tr>
          <tr>
            <td>6</td>
            <td>12</td>
          </tr>
          <tr>
            <td>12</td>
            <td>6</td>
          </tr>
          <tr>
            <td>6</td>
            <td>6</td>
          </tr>
          <tr>
            <td>0</td>
            <td>6</td>
          </tr>
        </table>
          take input from user and implement the opeation done above ,display only the final result.
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

<button type="button" class="butt" data-toggle="modal" data-target="#ques5" id="q5"></button><!--hidden-->
<div class="modal fade" id="ques5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Question number</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>91% of the girls aged 10-18 years have experienced all types of harasement.Studies show that due to social expression and fear of retaliation the reported number is far leass than the real number.</div>
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
<div class="modal fade" id="ques6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Question number</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>Our teams are over run with emergencies and urgent requests.This means we have no time to innovate or to get the best from staff.If this continues, our competion will push us out of the market.</div>
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

<button type="button" class="butt" data-toggle="modal" data-target="#ques7" id="q7"></button><!--hidden-->
<div class="modal fade" id="ques7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Question number</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>The boarding protocols used by XYZ airlines should aim to get each flights passengers aboard the plane quickly and efficiently so that the plane can take off as soon as possible.</div>
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

<button type="button" class="butt" data-toggle="modal" data-target="#ques8" id="q8"></button><!--hidden-->
<div class="modal fade" id="ques8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Question       number</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>All smart devices,uses our passwords,voice,touch ID etc and all of them are synced.How can we improve the security of data shared.</div>
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

<button type="button" class="butt" data-toggle="modal" data-target="#ques9" id="q9"></button><!--hidden-->
<div class="modal fade" id="ques9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Question number</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>Overfill has been a serious problem facing our city waste facilities for the last decade.By some estimations,our city dumps are an average,30% above capacity in unsanitary,unsafe & unwise position for our city to be in.</div>
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
<button type="button" name="end" onclick="end()" class="btn-primary">Click to End!!</button>
<script>
  function end(){
    window.location.href = 'end.php';
  }
</script>
