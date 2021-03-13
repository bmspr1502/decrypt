<?php
    $kid = 'abcd';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Photo display</title>
</head>
<body>

<div class="container">
    <h2 class="text-center">Enter answer</h2>
    <p id="qnsans" class="text-white text-center bg-info"></p>
    <p id="error" class="text-white text-center bg-danger"></p>
    <p id="success" class="text-white text-center bg-success"></p>

    <div class="container">
        <div class="col-md-6 mx-auto card p-4">
            <form>
                <div class="form-group">
                    <label for="kid">KID:</label>
                    <input type="text" class="form-control" placeholder="Enter kid" id="kid" name="kid" value="abcd" disabled>
                </div>
                <div class="form-group">
                    <label for="answer1">Enter Answer 1</label>
                    <textarea class="form-control" rows="5" id="answer1"></textarea>
                    <button type="button" class="btn btn-primary submit" onclick="answer_update(1)">Update</button>
                </div>
                <div class="form-group">
                    <label for="answer2">Enter Answer 2</label>
                    <textarea class="form-control" rows="5" id="answer2"></textarea>
                    <button type="button" class="btn btn-primary submit" onclick="answer_update(2)">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>


</body>
<script>
    var error = $("#error");
    var success = $("#success");
    var qnsans = $("#qnsans");
    var kid = '<?php echo $kid?>';
    /*
    function question_answered(){
        $.post('numqnsans.php', {
            kid: kid
        }, function (result){
            qnsans.html(result);
        })
    }

     */
    function answer_update(answerid){
        let answer = $("#answer"+answerid);
        console.log(answerid);

        $.post('updateanswer.php', {
            answerid: answerid,
            kid: kid,
            answer: answer.val()
        }, function (result){
            if(result==='SUCCESS') {
                error.empty();
                success.html("Answer "+ answerid +" updated!");
                //question_answered();
            }else{
                error.html(result);
            }
        });
    }
</script>
</html>


