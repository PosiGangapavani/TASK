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
    <title>Add Biography</title>
</head>
<body>
<div class="wrapper">
    <h1 class = "title">Add Biography</h1>
    <form action ="../controller/add.php" method="post">
        <label for ="">Name</label>
        <input type="text" class="form" name = "name" autocomplete="off" required>
        <label for ="">Biography</label>
        <textarea name="bio" class="bio" required></textarea>
        <table>
            <tr>
                <th><button class="btn"><a href = "dashboard.php"></a></button></th>
                <th><input type="submit" class = "btn" value = "Add"></th>
            </tr>
        </table>
        

    </form>
    </div>
    
</body>
</html>