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
$connectstr_dbhost = '';
$connectstr_dbname = '';
$connectstr_dbusername = '';
$connectstr_dbpassword = '';

foreach ($_SERVER as $key => $value) {
    if (strpos($key, "MYSQLCONNSTR_localdb") !== 0) {
        continue;
    }
    
    $connectstr_dbhost = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
    $connectstr_dbname = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
    $connectstr_dbusername = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
    $connectstr_dbpassword = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
}

$link = mysqli_connect($connectstr_dbhost, $connectstr_dbusername, $connectstr_dbpassword,$connectstr_dbname);

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

// Data from form
$First_Name=$_POST[FirstName];
$Last_Name=$_POST[LastName];
$DateofBirth=$_POST[DateofBirth];
$Email=$_POST[Email];
$Password=$_POST[Password];
$Comments=$_POST[Comments];

$sql = "INSERT INTO users (password, LastName, FirstName, Email, DateofBirth, Comments)
VALUES ($password,$Last_Name,$FirstName,$Email,$DateofBirth,$Comments)";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


mysqli_close($link);
?> 
