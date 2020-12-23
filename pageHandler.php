 <?php
 /*
Project Name: Milesstone 1
Project Version:  1
Module Name: Registration Page
Module Version: 1
Programmer's Name: Shannon Reynolds
Date: 12/21/20
Synopsis: This page is the HTML for the Registration for my Blog
  */
$servername = "127.0.0.1:56376";//Says where the server is
$username = "shangreyn";//says what the username for the server is
$password = "wH49t3XNwjNwQGpc";//Says what the password for the server is
$dbname = "activity1";//Gives the Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Data from form
$First_Name=$_POST['FirstName'];
$Last_Name=$_POST['LastName'];
$DateofBirth=$_POST['DateofBirth'];
$Email=$_POST['Email'];
$password=$_POST['password'];
$Comments=$_POST['Comments'];

$sql = "INSERT INTO users (First_Name, Last_Name, DateofBirth,Email,password,Comments)
VALUES ('$First_Name','$Last_Name','$DateofBirth','$Email','$password','$Comments')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
