<?php

session_start();


//connect to db 
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "farmingFriend";


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

        $query = "INSERT INTO users2 (firstName, lastName, email, phoneNumber, herdNumber, password1, password2) VALUES ('$firstName', '$lastName', '$email', '$phoneNumber', '$herdNumber', '$password1', '$password2')";

        $run = mysqli_query($conn, $query)
        or die(mysqli_connect_error());

        if($run){
            echo "Form was submitted successfully!!";
        }
        else{
            echo "Form was not submitted!!";
        }
}
    

    else{
        echo "All fields are required to sign up!";
    }



$conn->close();
?>