<?php


    if (isset($_POST['num_weight'])) {
      $num_weight = $_POST['num_weight'];
    } else {
      $num_weight = 0;
    }
    if (isset($_POST['num_height'])) {
      $num_height = $_POST['num_height'];
    } else {
      $num_height = 1;
    }

    $re_sult = $num_weight / $num_height / $num_height;







 ?>
 <!--NENG&TEAI-->
 <!--NENG&TEAI-->
 <!--NENG&TEAI-->
 <!DOCTYPE html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     <title>Body Mass index</title>

     <!-- Bootstrap -->
     <link rel="stylesheet" href="css/main1.css">

     <link href="css/bootstrap.min.css" rel="stylesheet">


     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
     <!--[if lt IE 9]>
       <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
       <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
     <![endif]-->
   </head>
   <body>

     <div class="content">
       <div class="row">
         <div class="col-md-12">
           <h1>BMI</h1>
           <h2>Body Mass index</h2>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,<br>
             sed do eiusmod tempor incididunt ut labore et dolore magna<br>
              aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
         </div>
       </div>
     </div>


     <div class="row">
       <div class="col-md-6">

       </div>
       <div class="col-md-6">

       </div>
     </div>


     <div class="row">
       <div class="col-md-6">
         <form action="bmi.php" method="post">
            <div class="form-group">
              <label>Weight (Kg)</label>
              <div class="input-group">
                <input type="text" class="form-control" name="num_weight" value="0">
                <div class="input-group-addon">Kg.</div>
              </div>
            </div>
            <div class="form-group">
              <label>Height (M)</label>
              <div class="input-group">
                <input type="text" class="form-control" name="num_height" value="1">
                <div class="input-group-addon">M.</div>
              </div>
            </div>
            <button type="submit" name="submit" value="submit" class="btn btn-default">Submit</button>
        </form>
       </div>




       <div class="col-md-6">
         <div class="content-php">
           <h2> You BMI POINT IS <br><?php

            echo $re_sult;

            if ($re_sult > 30) {
              echo "<br>You are very extremely fat";
            } elseif ($re_sult >= 25 && $re_sult <= 29.90) {
              echo "<br>You are very fat";
            } elseif ($re_sult >= 23 && $re_sult <= 24.90) {
              echo "<br>You are fat";
            } elseif ($re_sult >= 18.50 && $re_sult <= 22.90) {
              echo "<br>Congratulation! You are healthy";
            } elseif ($re_sult > 0 && $re_sult <= 18.49) {
              echo "<br>You are too thin ";
            } else {
              echo "<br>Enter your weigth & height</p>";
            }

            ?></h2>
         </div>
       </div>
      </div>






     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <!-- Include all compiled plugins (below), or include individual files as needed -->
     <script src="js/bootstrap.min.js"></script>
   </body>
 </html>
