<?php
  if(!isset($fname)){
    $fname = '';
  };
  if(!isset($lname)){
    $lname = '';
  };
  if(!isset($email)){
    $email = '';
  };
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
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <title>Sign Up</title>
</head>


<body>
  <main>
    <div class="container">
    <div class="container">
      
    <h1>Sign Up</h1>
    <form autocomplete="on" method="POST" action="view.php">
      <?php if(isset($error_msg)) {  ?>
         <p><?php echo $error_msg ?></p>
      <?php } ?>
  
      <span>Names</span>
      <div class="long">
      <input name="fname" type="text" placeholder="First Name" class="input" value="<?php echo  htmlspecialchars($fname) ?>">
      <input name="lname" type="text" placeholder="Other Name" class="input floatR" value="<?php echo htmlspecialchars($lname) ?>"><br>
      </div>

      <span>Email</span>
      <input name="email" placeholder="email@example.com" type="email" value="<?php echo htmlspecialchars($email) ?>">

      <span>Password</span>
      <div class="the-pass">
      <input id="myInput" name="password" type="password" placeholder="Create Password">
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
          <input type="checkbox" value="Male" name="male" /><label for="male">Male</label>
          <input type="checkbox" value="Female" name="female" /><label for="female">Female</label>
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