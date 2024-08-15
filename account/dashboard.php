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
    <link rel = "stylesheet" href="../css/style.css">
    <title>Dashboard</title>
</head>
<body>
    <h2>The Biogarphy</h2>
    <button class ="btn red"><a href="../controller/loginregister/logout.php">Logout</a></button>

    <div class="wrapper-grid">
        <?php
        $id_user = $_SESSION['id_u'];

        include '../controller/connect.php';
         $data = mysqli_query($conn,"SELECT * from biography where id_user = '$id_user'");

         while($result=mysqli_fetch_array($data)){ ?>
             <div class="box">
                <h4>Biography of <?php echo $result['name']?></h4>
                 <div class="thebio">
                    <p>
                        <?php echo $result['biography'];?>

                    </p>
                    </div>
                    <p>
                         ID Bio : <?php echo $result['id'];?>
                    </p>
                        <button class="btn green">
                            <a href="pageread.php?id=<?php echo $result['id'] ?>">Read</a>
                        </button>
                        <button class="btn blue">
                            <a href="pageedit.php?id=<?php echo $result['id'] ?>">Edit</a>
                        </button>
                        <button class="btn red">
                            <a href="../controller/delete.php?id=<?php echo $result['id'] ?>">Delete</a>
                        </button>
                

             </div>

         <?php

         }

        ?>
         <div class="box">
   
                 <div class="thebio">
                 <h4>Add Biography</h4>
                      <button class="btn green">
                        <a href = "pageadd.php">Add page</a>
                      </button>
                 </div>

             </div>
      


    </div>
</body>
</html>