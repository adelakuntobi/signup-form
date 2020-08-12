
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
  <title>Sign Up | Display</title>
</head>
<?php

//$error_msg = "";
//$fname = $lname = $email = $dob = $dept = $password = "";
//$gender = $_POST['gender'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$dob = $_POST['dob'];

$gender = '';


if(isset($_POST['dept'])  && isset($_POST['male'])||isset($_POST['dept']) && isset($_POST['female'])){
//    $error_msg = "<p class='error-msg'>success bitch</p>";
    $dept = $_POST['dept'];
    // $genderM = $_POST['male'];
    // $genderF = $_POST['female'];

      if (empty($fname) || 
        empty($lname) || 
        empty($email) || 
        empty($dob) || 
        empty($dept) || (empty($_POST['male']) && empty($_POST['female'])) == true) {
            $error_msg = "<p class='error-msg'>Some required field(s) are empty2</p>";
        } else{
            if(!empty($_POST['male']) && !empty($_POST['female'])){
            $error_msg = "<p class='error-msg'>You must select only one gender male or female</p>";
            } 
        }
        // else{
        //     $error_msg = "<p class='error-msg'>hi</p>";
        // }

} else{
    $error_msg = "<p class='error-msg'>Some required field(s) are empty1</p>";

}

// if(!isset($_POST['dept']) ){
//     $dept = '';
//     //$error_msg = "<p class='error-msg'>yo</p>";
// } else {
//     $dept = $_POST['dept'];
//     $error_msg = "<p class='error-msg'>success</p>";
// }

// if(!isset($_POST['dept']) ){
//     $dept = '';
// } elseif(isset($_POST['male'])== null){
//     $genderM = '';
// } elseif(isset($_POST['female']) == null){
//     $genderF = '';
// }


//if(isset($_POST['submit'])){
  
$color = $_POST['fav-color'];

// if(!isset($_POST['female'])){
//     $error_msg = "<p class='error-msg'>not set</p>";
// }


    
  
//   else{
//     if(!empty($genderM) && !empty($genderF)){
//        $error_msg = "<p class='error-msg'>You must select one gender male or female</p>";
//     } 
//     // if(!isset($genderF)){
//     //     $error_msg = "<p class='error-msg'>not set</p>";
//     // }

//   }


//   else {
//     // if((empty($genderM)) && (empty($genderF))){
//     if((empty($_POST['gender']))){
//       $error_msg = "<p class='error-msg'>You must select male or female</p>";
//     }
//     elseif((empty($genderM)) && isset($genderF)){
//       echo "Female";
//     }
  
//     elseif((empty($genderF)) && isset($genderM)){
//       echo test_input("Male");
//     }
    
//     else{
//       $error_msg = "<p class='error-msg'>You must select one gender male or female</p>";
//     }
     

    // $passingarray = array(
    //   test_input($fname),
    //   test_input($lname),
    //   test_input($email),
    //   test_input($dob),
    //   test_input($dept),
    //   test_input($color),
    // );
    // $fname = $_POST['fname'];
    // echo $fname;
    // echo $lname;
    // echo $email;
    // include ('view.php');  
    // $_SESSION['fname'] = test_input($fname);
    // $_SESSION['lname'] = test_input($lname);
    // $_SESSION['email'] = test_input($email);
    // $_SESSION['dob'] = test_input($dob);
    // $_SESSION['dept'] = test_input($dept);
    // $_SESSION['color'] = test_input($color);
    // header("Location: view.php");
  
  //   echo htmlspecialchars($_POST['lname'])."<br>";
  //   echo htmlspecialchars($_POST['email'])."<br>";
  //   echo htmlspecialchars($_POST['dob'])."<br>";
  //   echo htmlspecialchars($_POST['fav-color'])."<br>";
  

  //function validatefunction(){
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $error_msg = "<p class='error-msg'>Invalid email format</p>"; 
    }

    if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{15,}$/",$password)) {
      $error_msg = "<p class='error-msg'>Password must be at least 15 letters long, with atleast 1 uppercase, 1 lowercase, number, symbol</p>";
    }


    // $pattern = '/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{8,20}$/';
    // if(!preg_match($pattern, $password)){
    //  // echo "Password strength is OK";
    //      $error_msg = "<p class='error-msg'>Password must be at least 15 letters long, with atleast 1 uppercase, 1 lowercase, number, symbol</p>";
    // } 
    // else {
    //   echo "Password is not strong enough";
    // }
 //}

  // function test_input($data) {
  //   $data = trim($data);
  //   $data = stripslashes($data);
  //   $data = htmlspecialchars($data);
  //   return $data;
  // }

 // validatefunction();

  if(empty($error_msg)){

    echo "<body style='background-color: $color;'>";
    echo "<div class='container'>";
    echo 'First Name: '.$fname; 
    echo "<br>";
    echo 'Last Name: '. $lname;
    echo "<br>";
    echo 'Department: '.  $dept;
    echo "<br>";
    if(!empty($_POST['male'])){
      echo 'Gender: Male';
    } else{
      echo 'Gender: Female';
    }
    echo "</div>";
    echo "</body>";

  } else{
    include('index.php');
  }
  

?>

</body>
</html>




