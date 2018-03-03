<?php
if (isset($_POST['scr_oe'])) {
  $scr_oe = $_POST['scr_oe'];

}
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Grading Application</title>
  </head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <body>


    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <h1>Grading Application</h1>
          <form class="" action="index.php" method="post" class="form-group">

            <input type="text" name="scr_oe" value="" class="form-control" placeholder="insert your score"><br>
            <input type="submit" name="" value="submit" class="btn btn-primary">
          </form>
          <br>
          <?php
          if (isset($_POST['scr_oe'])) {
            ?>
            <h5>score is <?php echo $scr_oe; ?></h5>
            <h5>the grade is <?php

            if ($scr_oe >= 80 && $scr_oe <= 100) {
              echo "A";
            } elseif ($scr_oe >= 70 && $scr_oe <= 79) {
              echo "B";
            } elseif ($scr_oe >= 60 && $scr_oe <= 69) {
              echo "C";
            } elseif ($scr_oe >= 50 && $scr_oe <= 59) {
              echo "D";
            } elseif ($scr_oe > 100) {
              echo "You can't get more than 100/100";
            } else {
              echo "F";
            }
            ?></h5>
            <?php
          }
          ?>
        </div>
      </div>
    </div>
    <style media="screen">
      input {
        text-align: right;
      }
    </style>


  </body>
</html>
