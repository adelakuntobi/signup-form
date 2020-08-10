<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="style.css" rel="stylesheet">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon.png">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Liu+Jian+Mao+Cao|Lobster&display=swap" rel="stylesheet">
  <title>Sign Up | Display</title>
</head>
<body>
  
</body>
</html>

<body>

  <div class="container">
  <?php
    $email = $_POST['email'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    // echo "<body style='background-color: $color;'></body>"; 
    echo $email;

  // echo $fname."<br>";
  // echo $_SESSION['lname']."<br>";
  // echo $_SESSION['email']."<br>";
  // echo $_SESSION['dob']."<br>";
  // echo $_SESSION['dept']."<br>";
  // echo $_SESSION['gender']."<br>";

  // echo $_SESSION['details'][1]
  // include ('index.php');
  // include ()
  // echo $fname = $_POST['fname']


  ?>
</div>

</body>