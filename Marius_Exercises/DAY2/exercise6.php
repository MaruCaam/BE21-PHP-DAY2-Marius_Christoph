<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link href="styles1.css" rel="stylesheet">
    <title>Document</title>
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



    <!-- EXERCISE 6 -->
    <h1>EXERCISE 6</h1>
    <br><br><br>


    <div class="container contact_form">
        <form method="post">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="first_name1" placeholder="Your name..">
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="last_name" placeholder="Your last name..">
            <label for="age">Age</label>
            <input type="number" id="age" name="age" placeholder="Your age..">
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>


    <section>
        <?php
        if (isset($_POST['submit'])) {
            $first_name = $_POST["first_name1"];
            if (strlen($first_name) >= 5)
                echo "<h1 style='margin-top:5vh; color:green;'>" . $first_name . "</h1>";
            elseif (strlen($first_name) <= 5)
                echo "<h1 style='margin-top:5vh; color:red;'>" . $first_name . "</h1>";
            else
                echo "<h1>Type your name</h1>";
        }
        ?>
    </section>
    <!-- EXERCISE 6 -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>

</html>