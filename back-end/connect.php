<?php

$Name = $_POST['Name'];
$Username = $_POST['Username'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];

// database connection

$conn = new mysqli('localhost', 'root', '', 'test');

if($conn->connect_error){
    die('Connection failed: '.$conn->connect_error);

}
else{
    $stmt = $conn->prepare("insert into registration(Name, Username, Email, Password) values(?,?,?,?)");
    $stmt->bind_param("ssss", $Name, $Username, $Email, $Password);
    $stmt->execute();
    echo "registration successfull";
    $stmt->close();
    $conn->close();
}

?>
