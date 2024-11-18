<?php

session_start();

if(!isset($_SESSION['userid'])){
    header("Location: ../index.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cashier Home</title>
</head>
<body>
    <h1>Welcome <?php echo $_SESSION['name'];?></h1>
    <nav>
        <a href="generateBill.php">Generate Draft Bill</a>
        <a href="Display Bill History">Display Bill Records</a>
    </nav>
</body>
</html>