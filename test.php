<?php 
session_start();

$servername = "localhost";
$database = "c2a";
$username = "root";
$password = "";
// Create connection

$con = mysqli_connect($servername, $username, $password, $database);

if (!$con) {

    die("Connection failed: " . mysqli_connect_error());

}

//Variables to prevent errors
$name = ""; //name
$em = ""; //email
$addr = ""; //Address
$password_1 = ""; //password
$password_2 = ""; //password2
$wep = ""; //work experience
$contact = ""; //mobile no
$promise = ""; //unique member id

$errors = array(); //holds error messages

if(isset($_POST['submit'])) {
  
  $name = strip_tags($_POST['name']); //name
  $em = strip_tags($_POST['email']);
  $address = strip_tags($_POST['addr']);
  $contact = strip_tags($_POST['mob']);
  $password_1 = strip_tags($_POST['password']);
  $password_2 = ""; //password2
  $wep = strip_tags($_POST['wep']);
  $comment = strip_tags($_POST['promise']);
      
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if ($password_1 != $password_2) { array_push($errors, "The two passwords do not match"); }
    
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password_1);//encrypt the password before saving in the database

    $query = "INSERT INTO 'sp_details' ('id', 'name', 'email', 'mobile', 'password', 'password2', 'address', 'promise', `work_exp`) VALUES ('','$name', '$em' , '$contact', '$password_1', '$password_2', '$wep', '$promise')";
    
   # mysqli_query($con, $query);

    if (!mysqli_query($con, $query)) {
        die('An error occurred.');
    }
  }

?>

 