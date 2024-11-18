<?php
require "admin.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Users</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid black;
            padding: 8px 12px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Showing All Items in the Inventory...</h1>

    <?php 
      $items = $admin->displayInventory();

      if(empty($items)){
        echo "<centre><p class='text-centre'><b>No Users</b></p><centre>";
        $disabled = "disabled";
      }else{
        echo '<table border="1">';
            echo '<table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Product Id</th>
                <th scope="col">Product Name</th>
                <th scope="col">Price</th>
                <th scope="col">Stock</th>
                <th scope="col">Description</th>
                <th scope="col">Modified On</th>
              </tr>
            </thead><tbody>';
  
            $disabled = "";
            $count = 1;
  
            foreach($items as $row){
                echo '<tr>';
                  echo '<td>' . $count . '</td>';
                  echo '<td>'.$row["prodid"].'</td>';
                  echo '<td>' . $row["name"] . '</td>';
                  echo '<td>' . $row["price"] . '</td>';
                  echo '<td>' . $row["stock"] . '</td>';
                  echo '<td>' . $row["description"] . '</td>';
                  echo '<td>' . $row["modifiedon"] . '</td>';
                  echo '</tr>';
    
                  $count++;
              }
        }
    ?>

    
</body>
</html>