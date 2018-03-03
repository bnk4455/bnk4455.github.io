<?php
 $num_select = $_POST['number'];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>15 - 21</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <center>
    <h1>15 - 21</h1>
    <h2>to win</h2>
    <div class="row">
      <div class="col-md-6">
        <h3>Number of card/s you want</h3>
        <h5>(No more than 3)</h5>
        <form class="" action="cards.php" method="post">
          <select class="" name="number">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
          <button type="submit" name="submit" value="submit" class="btn">submit</button>
        </form>
      </div>
      <div class="col-md-6">
        <h3>the value of card</h3>
        <?php


    //    $card_num = count( $array_card );
    //    $input_count = count( $number );
        $array_card = array('1' , '2',
                            '3' , '4',
                            '5' , '6',
                            '7' , '8',
                            '9','10');
        shuffle($array_card);

      //  print_r ($array_card);

      //  print_r ($array_card[0] ."<br>");
      //  print_r ($array_card[1] ."<br>");
      //  print_r ($array_card[2] ."<br>");

        $card_1 = $array_card[0];
        $card_2 = $array_card[1];
        $card_3 = $array_card[2];
        $card_22 = $card_1 + $card_2;
        $card_33 = $card_1 + $card_2 + $card_3;
        ?><br><?php

        echo "your select" ." ". $num_select ." ". "card" . "<br>";

        if (isset($_POST['number'])) {
        //$num_select = $_POST['number'];
        if ($num_select == 1) {
            echo " " . $card_1 . " " . "<br>";
        } elseif ($num_select == 2) {
          echo $card_22 ."<br>";
        } elseif ($num_select == 3) {
          echo $card_33 ."<br>";
        } else {
          echo "NAN";
        }
        // ADD
        }
        ?><h3><?php
        if ($card_1) {
          echo "you loss";
        } elseif ($card_22 >= 15 && $card_22 <= 21) {
          echo "you win";
        } elseif ($card_33 >= 15 && $card_33 <= 21) {
          echo "you win";
        } else {
          echo "you loss";
        }
        //if (isset($_POST['number'])) {
        //$num_select = $_POST['number'];
        //if ($num_select == 1) {
        //    echo " " . $card_1 . " " . "<br>";
        //} elseif ($num_select == 2) {
        //  echo $card_22 ."<br>";
        //  if ($card_22 >= 15 && $card_22 <= 21) {
        //    echo "you win";
        //  } else {
        //    echo "you loss";
        //  }
        //} elseif ($num_select == 3) {
        //  echo $card_33 ."<br>";
        //  if ($card_33 >= 15 && $card_33 <= 21) {
        //    echo "you win";
        //  } else {
        //    echo "you loss";
        //  }
        //} else {
        //  echo "NAN";
        //}
        // ADD





        ?> </h3>

      </div>
    </div>
  </center>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
