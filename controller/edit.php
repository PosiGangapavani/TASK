<?php
        session_start();
        $id_user = $_SESSION['id_u'];
        $idpage = $_POST['id'];
        $name = $_POST['name'];
        $bio = $_POST['bio'];
        include '../controller/connect.php';
         $data = mysqli_query($conn,"UPDATE `biography` SET `name`='$name',`biography`='$bio',`id_user`='$id_user'   where id_user = '$id_user' AND id = '$idpage'");

         if($data){
            echo  '<script type="text/javascript">
            alert("Edit success")
            window.location = "../account/dashboard.php"
            </script>';
         }else{
            echo  '<script type="text/javascript">
            alert("Edit Failed")
            window.location = "../account/dashboard.php"
            </script>';
         }
?>