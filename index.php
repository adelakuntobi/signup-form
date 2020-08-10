

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
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <title>Sign Up</title>
</head>


<body>
  <main>
    <div class="container">
    <div class="container">
      
<?php

$error_msg = "";
$fname = $lname = $email = $dob = $dept = $password = "";
// $gender = $_POST['gender'];
if(isset($_POST['submit'])){
  
  // $color = $_POST['fav-color'];



    
  if (empty($_POST['fname']) || 
  empty($_POST['lname']) || 
  empty($_POST['email']) || 
  empty($_POST['dob']) || 
  empty($_POST['dept'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $error_msg = "<p class='error-msg'>Some required field(s) are empty</p>";
  }

  else {
    // if((empty($genderM)) && (empty($genderF))){
    if((empty($gender))){
      $error_msg = "<p class='error-msg'>You must select male or female</p>";
    }
    elseif((empty($genderM)) && isset($genderF)){
      echo "Female";
    }
  
    elseif((empty($genderF)) && isset($genderM)){
      echo test_input("Male");
    }
    
    else{
      $error_msg = "<p class='error-msg'>You must select one gender male or female</p>";
    }
     

    validatefunction();
    // $passingarray = array(
    //   test_input($fname),
    //   test_input($lname),
    //   test_input($email),
    //   test_input($dob),
    //   test_input($dept),
    //   test_input($color),
    // );
    // $fname = $_POST['fname'];
    echo $fname;
    echo $lname;
    echo $email;
    // include ('view.php');  
    // $_SESSION['fname'] = test_input($fname);
    // $_SESSION['lname'] = test_input($lname);
    // $_SESSION['email'] = test_input($email);
    // $_SESSION['dob'] = test_input($dob);
    // $_SESSION['dept'] = test_input($dept);
    // $_SESSION['color'] = test_input($color);
    // header("Location: view.php");
  }
  //   echo htmlspecialchars($_POST['lname'])."<br>";
  //   echo htmlspecialchars($_POST['email'])."<br>";
  //   echo htmlspecialchars($_POST['dob'])."<br>";
  //   echo htmlspecialchars($_POST['fav-color'])."<br>";
  }

  function validatefunction(){
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $error_msg = "<p class='error-msg'>Invalid email format</p>"; 
    }

    if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{15,}$/",$password)) {
      $error_msg = "<p class='error-msg'>Password must be at least 15 letters long, with atleast 1 uppercase, 1 lowercase, number, symbol</p>";
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
      <div class="the-pass">
      <input id="myInput" name="password" type="password" placeholder="Create Password" value="<?php echo $password ?>">
      <i id="show" onclick="myFunction()" class="fa fa-eye-slash"></i>
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
          <input type="checkbox" value="<?php echo $gender ?>" name="gender" /><label for="male">Male</label>
          <input type="checkbox" value="<?php echo $gender ?>" name="gender" /><label for="female">Female</label>
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

      <button name="submit" onclick="checkgender()" type="submit">Sign Up</button>
      
    </form>

    </div>
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
<script>
    function myFunction() {
      var x = document.getElementById("myInput");
      if (x.type === "password") {
        x.type = "text";
        document.getElementById("show").className = "fa fa-eye"
      } else {
        x.type = "password";
       document.getElementById("show").className = "fa fa-eye-slash"
      }
    }
    </script>
    
</body>
</html>