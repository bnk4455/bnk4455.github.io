<!--<link rel="stylesheet" href="main.css"> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="container">
  <h1>Fahrenheit to Celsius</h1>

  <h4>
  <?php

    $number = $_GET['number'];

    $result = ($number - 32) / 1.8 ;

   ?>
  <div class="row">
    <div class="col-sm-4">
      <form action="tem.php" method="get" class="form-group">
        Number of °F <br> <input type="text" name="number" value="" class="form-control" placeholder="°F"> <br>
        <div class="bntt">
          <input type="submit" name="" value="submit" class="btn btn-primary">

        </div>

      </form><br>
  The Result , <?php echo "°F","$number";?>
                <?php echo "°C"," ","$result" ;?></h4>

  </div>
  </div>
</div>


<style media="screen">
  input {
    text-align: right;
  }

</style>
