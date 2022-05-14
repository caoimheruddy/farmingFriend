<?php

session_start();

//declaring variables
$firstName = "";
$lastName = "";
$email = "";
$phoneNumber = "";
$herdNumber = "";
$password1 = "";
$password2 = "" ;

$dob = "";
$sex = "";


//connect to db 
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "farmingFriend";

$errors = array();
//$results = mysqli_query();
//$user = mysqli_fetch_assoc();

$conn = mysqli_connect($servername, $username, $password, $dbName );

/*
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully!!";

*/


if(isset($_POST['submit'])){

        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $phoneNumber = $_POST['phoneNumber'];
        $herdNumber = $_POST['herdNumber'];
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];

        $sql = "INSERT INTO users2 (firstName, lastName, email, phoneNumber, herdNumber, password1, password2) VALUES ('$firstName', '$lastName', '$email', '$phoneNumber', '$herdNumber', '$password1', '$password2')";
        $run = mysqli_query($conn, $sql)
        or die(mysqli_connect_error());

        if($run){
            echo "Form was submitted successfully!!";
            header("location: home/index.php"); 
            die();
        }
        else{
            echo "Form was not submitted!!";
        }


           //form validations
if(empty($firstName)){
    array_push ($errors, "First Name is required");
}
if(empty($lastName)){
    array_push ($errors, "Last Name is required");
}
if(empty($email)){
    array_push ($errors, "Email is required");
}
if(empty($phoneNumber)){
    array_push ($errors, "Phone Number is required");
}
if(empty($herdNumber)){
    array_push ($errors, "Herd number is required");
}
if(empty($password1)){
    array_push ($errors, "Password is required");
}
if(empty($password2)){
    array_push ($errors, "Please confirm your password");
}
if($password1 != $password2){
    array_push ($errors, "Your passwords do not match");
}

//checking for existing user
$user_check_query = "SELECT * FROM users2 WHERE email = '$email' LIMIT 1";
$results = mysqli_query($dbName, $user_check_query);
$user = mysqli_fetch_assoc($results);

if($user){

    if($user['email'] === $email){
        array_push($errors, "Email address already exists");
    }
}

//registering the user if no errors
if(count($errors)==0){
    $password1 = md5($password1);
    $query = "INSERT INTO USERS2 (firstName, lastName, email, phoneNumber, herdNumber, password1, password2) VALUES ($firstName, $lastName, $email, $phoneNumber, $herdNumber, $password1, $password2) ";

    mysqli_query($dbName, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in!";

    header("location: home/index.php");
}
}



if(isset($_POST['animalSubmit'])){

    $dob = $_POST['dob'];
    $sex = $_POST['sex'];
    $animalEartag = $_POST['animalEartag'];

    $sql = "INSERT INTO flock (dob, sex, animalEartag) VALUES ('$dob', '$sex', '$animalEartag')";
    $run = mysqli_query($conn, $sql)
    or die(mysqli_connect_error());

    if($run){
        echo "Animal was submitted successfully!!";
    }
    else{
        echo "Form was not submitted!!";
    }


       //form validations
if(empty($dob)){
array_push ($errors, echo: "The animals DOB is required");
}
if(empty($sex)){
array_push ($errors, echo: "The gender is required");
}
if(empty($animalEartag)){
    array_push ($errors, echo: "The eartag is required");
}


//registering the user if no errors
if(count($errors)==0){
$query = "INSERT INTO flock (dob, sex) VALUES ($dob, $sex) ";


}
}

    else{
        echo "All fields are required to sign up!";
    }

 


$conn->close();
?>