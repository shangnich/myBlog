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
$servername = "127.0.0.1:56376 via TCP/IP";//Says where the server is
$username = "root";//says what the username for the server is
$password = "password";//Says what the password for the server is
$dbname = "activity1";//Gives the Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Data from form
$FirstName=$_POST['FirstName'];
$LastName=$_POST['LastName'];
$DateofBirth=$_POST['DateofBirth'];
$Email=$_POST['Email'];
$Password=$_POST['password'];
$Comments=$_POST['Comments'];

$sql = "INSERT INTO users (FirstName, LastName, DateofBirth,Email,Password,Comments)
VALUES ('$FirstName','$LastName','$DateofBirth','$Email','$Password','$Comments')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
