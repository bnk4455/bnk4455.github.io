<?php

  //$number1 = $_GET['number_1'];
  //$number2 = $_GET['number_2'];




 ?>

 <h1>Bank Math</h1>
 <link rel="stylesheet" href="main.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

 <form class="form-group" action="indexcal.php" method="get">
   Number1 : <input type="text" name="number_1" value="">
   <br>
   Number2 : <input type="text" name="number_2" value="">
   <br>


     <select name="operator">
       <option>none</option>
       <option>+</option>
       <option>-</option>
       <option>X</option>
       <option>/</option>
     </select>


   <input type="submit" name="submit" value="Calculate">
 </form>
  this is Result

  <?php
  if (isset($_GET['submit'])) {
    $number1 = $_GET['number_1'];
    $number2 = $_GET['number_2'];
    $operator = $_GET['operator'];
    echo "<br>","$number1"," " ,"$operator"," " ,"$number2"," ","="," ";
    switch ($operator) {
      case 'none':
      echo "none";
        break;
        case '+':
        echo $number1 + $number2;
          break;

          case '-':
            echo $number1 - $number2;
            break;

            case 'X':
              echo $number1 * $number2;
              break;

              case '/':
                echo $number1 / $number2;
                break;
    }
}
  ?>
