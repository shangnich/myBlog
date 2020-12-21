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
$servername = "ec2-34-194-198-238.compute-1.amazonaws.com";//Says where the server is
$username = "tvbjercpxjlgnf";//says what the username for the server is
$password = "4f42ac900d153f551576d5733621d3f16527be1c7d8d6a009d70a25a31c27ca3";//Says what the password for the server is
$dbname = "dcbkvimcgt9442";//Gives the Database name


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
