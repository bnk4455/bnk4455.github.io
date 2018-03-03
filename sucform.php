
<?php
  if (isset($_POST['a_ge'])) {
    $a_ge = $_POST['a_ge'];

    if ($a_ge < 18) {
      echo "Your are under age";
    } else {
      ?>

      <h1>Success</h1>

      <?php
      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      $phone_num = $_POST['phone_num'];
      $e_mail = $_POST['e_mail'];
      $u_name = $_POST['u_name'];
      $pass_word = $_POST['pass_word'];
      $add_ress = $_POST['add_ress'];
      $add_ress2 = $_POST['add_ress2'];
      $add_ress3 = $_POST['add_ress3'];
      $add_ress4 = $_POST['add_ress4'];
      $add_ress5 = $_POST['add_ress5'];
      $da_te = $_POST['da_te'];
      $mou_ths = $_POST['mou_ths'];
      $ye_ar = $_POST['ye_ar'];
      $s_ex = $_POST['s_ex'];
      $fav_food = $_POST['fav_food'];
      $a_ge = $_POST['a_ge'];

      ?>
      <!DOCTYPE html>
      <html>
        <head>
          <meta charset="utf-8">
          <tißtle>Success</title>
          <link href="css/bootstrap.min.css" rel="stylesheet">
          <link rel="stylesheet" href="css/main.css">

        </head>
        <body>
          <div class="row">
            <div class="col-md-12">
              <div class="table">
                <table class="table table-hover table-bordered">
                  <tr>
                    <td>First name</td>
                    <td><?php echo $first_name;  ?></td>
                  </tr>
                  <tr>
                    <td>Last name</td>
                    <td><?php echo $last_name;  ?></td>
                  </tr>
                  <tr>
                    <td>Phone</td>
                    <td><?php echo $phone_num; ?></td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td><?php echo $e_mail; ?></td>
                  </tr>
                  <tr>
                    <td>Username</td>
                    <td><?php echo $u_name; ?></td>
                  </tr>
                  <tr>
                    <td>Password</td>
                    <td><?php echo $pass_word; ?></td>
                  </tr>
                  <tr>
                    <td>Address</td>
                    <td><?php echo $add_ress . " " .  $add_ress2 . " " . $add_ress3 . "<br>" . $add_ress4 . "<br>" . $add_ress5; ?></td>
                  </tr>
                  <tr>
                    <td>Date Of Birth</td>
                    <td><?php  echo $da_te . "/" . $mou_ths . "/" . $ye_ar;?></td>
                  </tr>
                  <tr>
                    <td>Your are</td>
                    <td><?php  echo $a_ge;?>
                  </td>
                  </tr>
                  <tr>
                    <td>Gender</td>
                    <td>
                    <?php
                    if (isset($_POST['s_ex'])) {

                      if ($s_ex == "Male") {
                        echo "$s_ex Hey Bro";
                      } elseif ($s_ex == "Female") {
                        echo "$s_ex Hey girl";
                      } else {
                        echo "Bisexual";
                      }
                    }
                    ?>
                  </td>
                  </tr>
                  <tr>
                    <td>Your Favorite Food </td>
                    <td><?php echo $fav_food; ?></td>
                  </tr>
                </table>

              </div>
            </div>
          </div>




        </body>
      </html>

      <?php
    }
  } else {
    echo "Please enter your age";
  }
?>
