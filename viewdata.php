<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    
</body>
</html>




<?php
    include "config.php";

    $read = "SELECT * FROM info2";
    $result = mysqli_query($con,$read);
    if (mysqli_num_rows($result) > 0)
    {
        echo "<table border='5' cellpadding='10'>";
        echo "<tr class='head'> <th>ID</th> <th>Name</th> <th>Roll Number</th> <th>Department</th> <th>University</th> <th>Email</th> <th>Phone Number</th> <th>Update</th> <th>Delete</th></tr>";
        while($row = mysqli_fetch_assoc($result))
        {
            echo "<tr class='tbl'>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['Name']."</td>";
            echo "<td>".$row['Rollno']."</td>";
            echo "<td>".$row['Department']."</td>";
            echo "<td>".$row['University']."</td>";
            echo "<td>".$row['Email']."</td>";
            echo "<td>".$row['Phoneno']."</td>";
            echo "<td><a href='update.php?ID1=".$row['id']."'>Update</a></td>";
            echo "<td><a href='delete.php?ID2=".$row['id']."'>Delete</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    else{
        echo "No data found.";
    }
?>