<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <p class="mt-5 text-center display-4">Excercise 1</p>
    <form method="POST">
      <div class="mb-3 mt-5">
      <label for="exampleFormControlInput1" class="form-label">First Name</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="First Name" name="fName">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Last Name</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Last Name" name="lName"></input>
    </div>
    <div class="col-12 mb-5">
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </div>
    </form>

     <?php
       if( isset($_POST['submit']))
       {
           if( $_POST["fName"])
           {
               echo "<p class='text-success display-3'>Welcome ". $_POST[ 'fName'];
           }else {
             echo "<p class='text-danger'>Please insert FIRST NAME</p>";
           }

           if( $_POST["lName"])
           {
               echo " " . $_POST[ 'lName'] . "</p>";
           }else {
             echo "<br><p class='text-danger'>Please insert LAST NAME</p>";
           }
       }
       ?>
  </div>

    <hr>
    <div class="container">
      <p class="mt-5 text-center display-4">Excercise 2</p>
      <?php
        function divide($num1, $num2) {
          $quotient = $num1 / $num2;

          echo "<p class='text-success text-center display-2'>" . $quotient . "</p>";
        }
        divide(2, 4);
      ?>
    </div>  

    <hr>
    <div class="container">
      <p class="mt-5 text-center display-4">Excercise 3</p>
      <?php 
        function avg_grade($a, $b, $c) {
          $sum = $a + $b + $c;
          $avg = $sum / 3;
          echo "<p class='text-success text-center display-2'>" . $avg . "</p>";
        }
        avg_grade(1, 2, 3);
      ?>
    </div>

    <hr>
      <div class="container">
      <p class="mt-5 text-center display-4">Excercise 4</p>
      <?php 
        function area_volume($w, $h, $d) {
          $area = $w * $h;
          $volume = $w * $h * $d;

          echo "<p class='text-success text-center display-2'>The area is " . $area . "</p>";
          echo "<p class='text-success text-center display-2'>The volume is " . $volume . "</p>";
        }
        area_volume(2, 7, 5);
      ?>
    </div>

    <hr>
    <div class="container">
      <p class="mt-5 text-center display-4">Excercise 5</p>
      <?php
        function min_conversion($minutes) {
          $hours = $minutes / 60;
          $min = $minutes % 60;
          echo "<p class='text-success text-center display-2'>" . $minutes . " minutes = " . floor($hours) . "hour(s) and " . $min . "minutes(s).</p>";
        }    
        min_conversion(1000);
      ?>
    </div>

    <hr>
    <div class="container">
      <p class="mt-5 text-center display-4">Excercise 6</p>
      <form method="POST">
      <div class="mb-3 mt-5">
      <label for="exampleFormControlInput1" class="form-label">First Name</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="First Name" name="fName">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Last Name</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Last Name" name="lName"></input>
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Age</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Age" name="age"></input>
    </div>
    <div class="col-12 mb-5">
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </div>
    </form>
    </div>
    <div>
      <?php
      $fname;
      if( isset($_POST['submit']))
       {
           if(isset($_POST['fName'])) {
             $fname = $_POST['fName'];
             if(strlen($fname) > 5) {
              echo "<p class='text-success text-center display-2'>" . $fname . "</p>";
            }else {
          echo "<p class='text-danger text-center display-2'>" . $fname . "</p>";
        }
           }else {
             echo "<p class='text-danger text-center display-6'>ENTER FIRST NAME</p>";
           }
          }

        
      ?>
    </div>
    <div>
      <?php
      if( isset($_POST['submit']))
       {
           if(isset($_POST['lName'])) {
             $lname = $_POST['lName'];
             if(strlen($lname) > 5) {
              echo "<p class='text-success text-center display-2'>" . $lname . "</p>";
            }else {
              echo "<p class='text-danger text-center display-2'>" . $lname . "</p>";
            } 
           }else {
             echo "<p class='text-danger text-center display-6'>ENTER LAST NAME</p>";


             
           }
          }
        
      ?>
    </div>
    <div>
      <?php
      if( isset($_POST['submit']))
       {
           if(isset($_POST['age'])) {
             $age = $_POST['age'];
             echo "<p class='text-center display-2'>" . $age . "</p>";
           }else {
             echo "<p class='text-danger text-center display-6'>ENTER AGE</p>";
           }
          }
          
      ?>
    </div>

    <div class="container d-flex flex-column justify-content-center align-items-center myCont">
        <form method="POST">
          <h1 class="display-1 mb-3">°F to °C Converter</h1>
          <span class="display-6">Enter °F <input type="text" name="fahrenheit"></span>
          <div class="text-center">
            <button type="submit" class="btn btn-primary px-5 mt-3" name="submit">Submit</button>
          </div>
        </form>
        <?php
        function convert($param) {
            $celsius = ($param - 32) * (5/9);
            echo "<p class='mt-5 text-success display-2'>" . $param . "°F = " . $celsius . "°C.</p>";
          }

          if(isset($_POST['submit'])) {
            if($_POST['fahrenheit']) {
              $fahrenheit = $_POST['fahrenheit'];
              convert($fahrenheit);
            }else {
              echo "<p class='text-danger text-center display-6 mt-3'>ENTER FAHRENHEIT</p>";
            }
          }
        ?>
    </div>

 
</body>
</html>