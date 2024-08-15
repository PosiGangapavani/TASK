<?php
session_start();
if(!isset($_SESSION['id_u'])){
    header("Location: ../index.php");

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
<?php
        $id_user = $_SESSION['id_u'];
        $idpage = $_GET['id'];
        include '../controller/connect.php';
         $data = mysqli_query($conn,"SELECT * from biography where id_user = '$id_user' AND id = '$idpage'");

         while($result=mysqli_fetch_array($data)){ ?>
             <div class="box">
                <h4>Biography of <?php echo $result['name']?></h4>
                 <div class="thebio">
                    <p>
                        <?php echo $result['biography'];?>

                    </p>
                    <p>
                         ID Bio : <?php echo $result['id'];?>
                    </p>
                        <button class="ntn">
                            <a href="dashboard.php">Back</a>
                        </button>
                 </div>

             </div>

         <?php

         }

        ?>
    
</body>
</html>