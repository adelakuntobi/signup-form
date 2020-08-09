<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="style.css" rel="stylesheet">
</head>
<body>
  
</body>
</html>
<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$dept = $_POST['dept'];
$gender = $_POST['gender'];


echo "<body style='background-color: $color;'></body>"; 
echo test_input($fname)."<br>";

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>
<body>

  <div class="container">
  <?php
  echo test_input($fname)."<br>";
  echo test_input($lname)."<br>";
  echo test_input($email)."<br>";
  echo test_input($dob)."<br>";
  echo test_input($dept)."<br>";
  // echo test_input($gender)."<br>";=
  ?>
</div>

</body>