<?php
  //$order_11 = isset($_POST['order_11']);
  //$order_22 = isset($_POST['order_22']);
  $order_arry = array('Tomato' ,'Onion' ,'Olives' ,'Ham' ,
                      'Bacon' ,'Chicken' ,);

 ?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Pizza world!</title>

    <!-- Bootstrap -->
    <link href="css/main.css" rel="stylesheet"> 
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="body-main">
    <center><h1>Pizza world!</h1></center>

      <center> <h2> Pick a Flavor</h1> </center>
      <form class="" method="post" action="pizza.php">
      <center><div class="form-group">
              <input type="radio" name="order_11"  value="Double Cheese">
              Double Cheese <br>
              <input type="radio" name="order_11"  value="Pepperoni">
              Pepperoni <br>
              <input type="radio" name="order_11"  value="Hawaiian">
              Hawaiian <br>
              <input type="radio" name="order_11"  value="Seafood">
              Seafood <br>
              <input type="radio" name="order_11"  value="Shrimp & Pesto">
              Shrimp & Pesto <br>
        </div></center>

        <center><h2>Pick a Topping</h1>  </center>
      <center>  <div class="form-group">
          <div class="checkbox">
              <label><input type="checkbox" value="Tomato" name="order_22[]">Tomato</label>
              <label><input type="checkbox" value="Onion" name="order_22[]">Onion</label>
              <label><input type="checkbox" value="Olives" name="order_22[]">Olives</label>
              <label><input type="checkbox" value="Ham" name="order_22[]">Ham</label>
              <label><input type="checkbox" value="Bacon" name="order_22[]">Bacon</label>
              <label><input type="checkbox" value="Chicken" name="order_22[]">Chick</label>
          </div>
        </div><center>
          <button type="submit" name="submit" class="btn btn-main" value="submit">Order</button>

        </form>


        <hr>
        <!--<button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#my-order-fin" >Order</button>-->


          <center><h3>
            Your order is A
          <?php
          if (isset($_POST['order_11'])) {
            $order_11 = $_POST['order_11'];
            echo " ".$order_11. " ";
          } else {
            echo "Plz select a Flavor";
          }

          ?>
          with
          <?php
          //$order_arry = array('Tomato' ,'Onion' ,'Olives' ,
                              //'Ham' ,'Bacon' ,'Chicken' ,);
          if (isset($_POST['submit'])) {
          if (!empty($_POST['order_22'])) {

          $order_count = count($_POST['order_22']);


            foreach ($_POST['order_22'] as $order_222) {
              echo  $order_222 . "<br>";
            }

          }else {
            echo "!!!!!!!";
          }
          echo "You add" . " " . $order_count . " " . "Topping";
          }
          ?>

        </h3></center>








    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
