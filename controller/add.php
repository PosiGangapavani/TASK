<?php

include 'connect.php';

session_start();
if(!isset($_SESSION['id_u'])){
    header("Location: ../index.php");
    
}

$id_user = $_SESSION['id_u'];
$name = $_POST['name'];
$bio = $_POST['bio'];

$query = mysqli_query($conn, "INSERT INTO biography values('','$name','$bio','$id_user')");

if($query){
    echo  '<script type="text/javascript">
    alert("Biography added successfully")
    window.location = "../account/dashboard.php"
    </script>';
}

?>