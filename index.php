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
  <title>Sign Up</title>
</head>


<body>
  <main>
    <div class="container">
      
<?php

if(isset($_POST['submit'])){
  $error_msg = "";
  $color = $_POST['fav-color'];
  echo "<p style='display: none;' class='error-msg'><?php echo $error_msg ?></p>";
   
    $fname = $lname = $email = $dob = $dept = $password = "";
  if (empty($_POST['fname']) || 
  empty($_POST['lname']) || 
  empty($_POST['email']) || 
  empty($_POST['dob']) || 
  empty($_POST['dept'])) {
    $error_msg = "<p class='error-msg'>Some required field(s) are empty</p>";
    $email = $_POST['email'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    echo "<body style='background-color: $color;'></body>"; 
  }
  else {

    validatefunction();
    header("Location: view.php");
  }
  //   echo htmlspecialchars($_POST['lname'])."<br>";
  //   echo htmlspecialchars($_POST['email'])."<br>";
  //   echo htmlspecialchars($_POST['dob'])."<br>";
  //   echo htmlspecialchars($_POST['fav-color'])."<br>";
  //   echo htmlspecialchars($_POST['phone-no'])."<br>";
  }

  function validatefunction(){
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $error_msg = "<p class='error-msg'>Invalid email format</p>"; 
    }
    else{
    
    if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{15,}$/",$password)) {
      $error_msg = "<p class='error-msg'>Password must be at least 15 letters long, with atleast 1 uppercase, 1 lowercase, number, symbol</p>";
    }
    else{
      echo test_input($password)."<br>";
    }
    }

  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>
    <h1>Sign Up</h1>
    <form autocomplete="on" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <?php echo $error_msg ?>

      <span>Names</span>
      <div class="long">
      <input name="fname" type="text" placeholder="First Name" class="input" value="<?php echo $fname ?>">
      <input name="lname" type="text" placeholder="Other Name" class="input floatR" value="<?php echo $lname ?>"><br>
      </div>

      <span>Email</span>
      <input name="email" placeholder="email@example.com" type="email" value="<?php echo $email ?>">

      <span>Password</span>
      <div class="long">
      <input name="password" type="password" placeholder="Create Password" value="<?php echo $password ?>">
      </div>
 
      <span>Date of Birth</span>
      <input name="dob" id="datefield" value="<?php echo $dob ?>" type="date" class="dob"><br>

      <div class="fav-color">
        <span>Favorite Color</span>
        <input name="fav-color" type="color" value="<?php echo $color ?>"/>
      </div>

      <div class="gender-div">
        <span>Gender:</span>
        <div>
          <input type="checkbox" value="Male" name="gender"/><label for="male">Male</label>
          <input type="checkbox" value="Female" name="gender" /><label for="female">Female</label>
        </div>
      </div>
        
      <div class="the-span">
        <span>Department:</span>
        <select id="department" name="dept">
          <option value="" disabled selected hidden>Please select</option>
          <option value="I.T">I.T</option>
          <option value="Human Resources">Human Resources</option>
          <option value="Accounting">Accounting</option>
          <option value="Administration">Administration</option>
          <option value="Marketing">Marketing</option>
          <option value="Production">Production</option>
        </select>
      </div>

      <button name="submit" type="submit">Sign Up</button>
      
    </form>

    </div>
  </main>

  <script>
    var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
 if(dd<10){
        dd='0'+dd
    } 
    if(mm<10){
        mm='0'+mm
    } 

today = yyyy+'-'+mm+'-'+dd;
document.getElementById("datefield").setAttribute("max", today);
</script>
</body>
</html>