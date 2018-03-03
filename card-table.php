<?php

#$h = 'hea';
#$d = 'dia';
#$s = 'spa';
#$c = 'clu';



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Card Table</title>

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

    <h1>Card Table</h1>
    <center><div class="card">


      <table class="table table-bordered">
        <tbody>
          <tr>Card<?php
            for ($s=1; $s <= 13 ; $s++) { ?>
            <td style="color:#000000;">♠︎<br><?php
              if ($s == 1) {
                echo "A";
              } elseif ($s == 11) {
                echo "J";
              } elseif ($s == 12) {
                echo "Q";
              } elseif ($s == 13) {
                echo "K";
              } else {
                echo "$s";
              }
            }
              ?> <br>
            </td><br><?php for ($d=1; $d <= 13; $d++) {  ?>
            <td style="color:#ff0000;">♦︎<br><?php

              if ($d == 1) {
                echo "A";
              } elseif ($d == 11) {
                echo "J";
              } elseif ($d == 12) {
                echo "Q";
              } elseif ($d == 13) {
                echo "K";
              } else {
                echo "$d";
              }
              }
              ?>
            </td><?php for ($c=1; $c <= 13; $c++) { ?>
            <td style="color:#000000;">♣︎<br><?php
              if ($c == 1) {
                echo "A";
              } elseif ($c == 11) {
                echo "J";
              } elseif ($c == 12) {
                echo "Q";
              } elseif ($c == 13) {
                echo "K";
              } else {
                echo "$c";
              }
              }
              ?>
            </td>
            <?php for ($h=1; $h <= 13; $h++) {  ?>
            <td style="color:#ff0000;">♥︎<br><?php
              if ($h == 1) {
                echo "A";
              } elseif ($h == 11) {
                echo "J";
              } elseif ($h == 12) {
                echo "Q";
              } elseif ($h == 13) {
                echo "K";
              } else {
                echo "$h";
              }
            }
              ?>
            </td>

          </tr>
        </tbody><br>
   </div><form class="" action="card.php" method="post"><input type="submit" name="submit" class="btn btn-default" value="submit"> </form>


     <?php
       #$card_s = array("$h" , "$s" , "$c" , "$d");
       #$deck_s = array_rand($card_s);
       #echo $deck_s;
       #$card_1 = rand($h ,$s);
       #$card_2 = rand($c ,$d);


     ?>



          <table>
             <tbody>
               <tr><h1>You card is</h1>
                 <td><?php


                          #$dec_k = array("hea", "dia" , "spa" , "clu");
                          #$dec_k = rand(2 ,13);
                          $rand_card = rand(1 ,4);
                          if ($rand_card == 1) {
                            echo "<div id=\"red\">♥︎</div>";
                          } elseif ($rand_card == 2) {
                            echo "<div id=\"red\">♦︎</div>";
                          } elseif ($rand_card == 3) {
                            echo "<div id=\"black\">♠︎</div>";
                          } elseif ($rand_card == 4) {
                            echo "<div id=\"black\">♣︎</div>";
                          }

                          ?><?php

                          $car_ds = rand(1 ,13);
                          if ($car_ds == 1) {
                            echo "A";
                          } elseif ($car_ds == 11) {
                            echo "J";
                          } elseif ($car_ds == 12) {
                            echo "Q";
                          } elseif ($car_ds == 13) {
                            echo "K";
                          } else {
                            echo "$car_ds";
                          }




                        #  print_r ($rand_card);
                        #  echo "$rand_card";
                        #  echo rand($card_2 ,$card_1);



                     ?>
                 </td>
               </tr>
             </tbody>
           </table>




            <!--   <center><table class="table table-bordered">
               <tbody>
                 <tr>Card<?php
                   for ($s=1; $s <= 13 ; $s++) { ?>
                   <td style="color:#000000;">♠︎<br><?php
                     if ($s == 1) {
                       echo "A";
                     } elseif ($s == 11) {
                       echo "J";
                     } elseif ($s == 12) {
                       echo "Q";
                     } elseif ($s == 13) {
                       echo "K";
                     } else {
                       echo "$s";
                     }

                     ?>
                   </td><br>
                   <td style="color:#ff0000;">♦︎<br><?php

                     if ($s == 1) {
                       echo "A";
                     } elseif ($s == 11) {
                       echo "J";
                     } elseif ($s == 12) {
                       echo "Q";
                     } elseif ($s == 13) {
                       echo "K";
                     } else {
                       echo "$s";
                     }

                     ?>
                   </td>
                   <td style="color:#000000;">♣︎<br><?php
                     if ($s == 1) {
                       echo "A";
                     } elseif ($s == 11) {
                       echo "J";
                     } elseif ($s == 12) {
                       echo "Q";
                     } elseif ($s == 13) {
                       echo "K";
                     } else {
                       echo "$s";
                     }

                     ?>
                   </td>
                   <td style="color:#ff0000;">♥︎<br><?php
                     if ($s == 1) {
                       echo "A";
                     } elseif ($s == 11) {
                       echo "J";
                     } elseif ($s == 12) {
                       echo "Q";
                     } elseif ($s == 13) {
                       echo "K";
                     } else {
                       echo "$s";
                     }
                    for ($i= $s; $i <= $s; $i++) {
                      echo "fuck";
                    }
                   }
                   ?>
                   </td>

                 </tr>
               </tbody>
              <table>
                 <tbody>
                   <tr><h1>You card is</h1>
                     <td><?php


                              #$dec_k = array("hea", "dia" , "spa" , "clu");
                              #$dec_k = rand(2 ,13);
                              $rand_card = rand(1 ,4);
                              if ($rand_card == 1) {
                                echo "<div id=\"red\">♥︎</div>";
                              } elseif ($rand_card == 2) {
                                echo "<div id=\"red\">♦︎</div>";
                              } elseif ($rand_card == 3) {
                                echo "<div id=\"black\">♠︎</div>";
                              } elseif ($rand_card == 4) {
                                echo "<div id=\"black\">♣︎</div>";
                              }

                              ?><?php

                              $car_ds = rand(1 ,13);
                              if ($car_ds == 1) {
                                echo "A";
                              } elseif ($car_ds == 11) {
                                echo "J";
                              } elseif ($car_ds == 12) {
                                echo "Q";
                              } elseif ($car_ds == 13) {
                                echo "K";
                              } else {
                                echo "$car_ds";
                              }




                            #  print_r ($rand_card);
                            #  echo "$rand_card";
                            #  echo rand($card_2 ,$card_1);



                         ?>
                     </td>
                   </tr>
                 </tbody>
               </table>-->



   <style>
        th, td {
          border: 1px solid #ddd;
        }
        #red {
          color: #ff0000;
        }
        #black {
          color: #000000;
        }
      </style>






    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
