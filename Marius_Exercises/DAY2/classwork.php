<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="styles1.css" rel="stylesheet">
    <title>Classwork</title>
</head>
<body>



<?php
echo '<div class="container">
<ul class="nav justify-content-start menu">
<li class="nav-item">
  <a class="nav-link active animate__animated animate__backInLeft animate__delay-2s	" aria-current="page" href="classwork.php">Classwork</a>
</li>
<li class="nav-item active animate__animated animate__backInDown animate__delay-2s	">
  <a class="nav-link" href="advanced.php">Advanced</a>
</li>
<li class="nav-item active animate__animated animate__backInDown animate__delay-2s	">
  <a class="nav-link" href="exercise6.php">Exercise 6</a>
</li>
</ul>
</div>';
?>

<!-- EXERCISE 1 -->
<section>

<h1>EXERCISE 1</h1>
<br><br><br>


<?php
if (isset($_POST['submit'])) {
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  
  if ($first_name != null && $last_name != null)
  echo "<h1 style='margin-top:5vh'>Welcome ".$first_name. ' ' .$last_name.".</h1>";
  elseif($first_name == null && $last_name != null)
  echo "<h1 style='margin-top:5vh'>Please insert your name Mr. ". ' ' .$last_name.".</h1>";
  elseif($first_name != null && $last_name == null)
  echo "<h1 style='margin-top:5vh'>Please insert your last name ".$first_name.".</h1>";
  else
  echo "<h1 style='margin-top:5vh'>Please insert your name and last name</h1>";
}
?>
  <?php


  echo '
<div class="container contact_form">
  <form action="" method="post">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="first_name" placeholder="Your name..">
    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="last_name" placeholder="Your last name..">
    <input type="submit" name="submit" value="Submit">
      </form>
</div>

'
  ?>

</section>

<!-- EXERCISE 1 -->

<!-- EXERCISE 2 -->
<section>
<h1>EXERCISE 2</h1>
<br><br><br><br><br><br>
<br><br><br><br><br><br>

<?php function divideMe($num1, $num2){
  $sum = $num1 / $num2;
  echo "<h1>This is the result:  ".$sum. "</h1>";
}
divideMe(35, 5);




?>
</section>
<!-- EXERCISE 2 -->



<!-- EXERCISE 3 -->
<section>
<h1>EXERCISE 3</h1>
<br><br><br><br><br><br>
<br><br><br><br><br><br>

<?php 
function AVG($num1, $num2, $num3){
  $sum = $num1 + $num2 + $num3;
  $avg = $sum / 3;
  echo "<h1>This is the Sum: ".$sum. "<br> This is the Average: ".$avg."</h1>";
}
AVG(9, 8, 8);

?>
</section>
<!-- EXERCISE 3 -->


<!-- EXERCISE 4 -->

<section>
<h1>EXERCISE 4</h1>
<br><br><br><br><br><br>
<br><br><br><br><br><br>

<?php 
function Box($width, $height, $depth){
  $area = $width * $height;
  $volume = $width * $height * $depth;
  echo "<h1>The area of the box is: ".$area. "<br> The volume of the box is: ".$volume."</h1>";
}

Box(13,2,5);

?>
</section>


<!-- EXERCISE 4 -->


<!-- EXERCISE 5 -->


<section>

<h1>EXERCISE 5</h1>
<br><br><br><br><br><br>
<br><br><br><br><br><br>

<?php
function hoursandmins($time, $format = '%02d:%02d')
{
    if ($time < 1) {
        return;
    }
    $hours = floor($time / 60);
    $minutes = ($time % 60);
    return sprintf($format, $hours, $minutes);
}

echo "<h1> Time Convertion 200 Minutes: <br>".hoursandmins('200', '%02d Hours, %02d Minutes'). "</h1>";
?>
</section>
<!-- EXERCISE 5 -->







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>