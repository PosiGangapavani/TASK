<?php
session_start();
// if(!isset($_SESSION['id_u'])){
//     header("Location: ../index.php");
    
// }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit bio</title>
</head>
<body>
<?php
        $id_user = $_SESSION['id_u'];
        $idpage = $_GET['id'];
        include '../controller/connect.php';
         $data = mysqli_query($conn,"SELECT * from biography where id_user = '$id_user' AND id = '$idpage'");
         while($result=mysqli_fetch_array($data)){ 
?>
<div class="wrapper">
    <h1 class = "title">Edit Biography</h1>
    <form action ="../controller/edit.php" method="post">
        <input type = "hidden" name = "id" value = "<?php echo $result['id'] ?>">
        <label for ="">Name</label>
        <input type="text" class="form" value = "<?php echo $result['name'] ?>" name = "name" autocomplete="off" required>
        <label for ="">Biography</label>
        <textarea name="bio" class="bio" required><?php echo $result['biography'] ?> </textarea>
        <table>
            <tr>
                <th><button class="btn"><a href = "dashboard.php"></a></button></th>
                <th><input type="submit" class = "btn" value = "Edit"></th>
            </tr>
        </table>
        

    </form>
    </div> 
    <?php
         }
    ?>
</body>
</html>