
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db ="motors";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} 

if (isset($_POST['save'])) {
    $motor1 = $_POST['motor1'];
    $motor2 = $_POST['motor2'];
    $motor3 = $_POST['motor3'];
    $motor4 = $_POST['motor4'];
    $motor5 = $_POST['motor5'];
    $motor6 = $_POST['motor6'];
    
$sql = "INSERT INTO `motors` (`motor1`, `motor2`, `motor3`, `motor4`, `motor5`, `motor6`) VALUES ('".$_POST['myRange1']."','".$_POST['myRange2']."','".$_POST['myRange3']."','".$_POST['myRange4']."','".$_POST['myRange5']."','".$_POST['myRange6']."')";
$result = $conn->query($sql);
 }



if (isset($_POST['run'])) {

$sql = "INSERT INTO `motors` ( `run`) VALUES ( '0')";
$result = $conn->query($sql);
 }

 ?>
