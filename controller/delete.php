<?php
        session_start();
        $id_user = $_SESSION['id_u'];
        $idpage = $_GET['id'];
        include '../controller/connect.php';
         $data = mysqli_query($conn,"DELETE from biography where id_user = '$id_user' AND id = '$idpage'");
        if($data){
            echo  '<script type="text/javascript">
            alert("Delete Success")
            window.location = "../account/dashboard.php"
            </script>';
        }else{
            echo  '<script type="text/javascript">
            alert("Delete Failed")
            window.location = "../account/dashboard.php"
            </script>';
        }
?>