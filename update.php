<?php
    include "config.php";

    $i = $_GET['ID1'];
    $search_query = "SELECT*FROM info2 WHERE id = '$i'";
    $result = mysqli_query($con,$search_query);
   
    $run = mysqli_fetch_assoc($result);
    $id = $run['id'];
    $name = $run['Name'];
    $rollno = $run['Rollno'];
    $depart = $run['Department'];
    $uni = $run['University'];
    $email = $run['Email'];
    $phone = $run['Phoneno'];

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins">
</head>
<body>
    <div class="container">
        <div class="studentform">
            <h1>Update Student Data</h1>
            <div class="underline"></div>
            <form action="updat.php" method="post">
            <div class="input-form">
                    <div class="input-field">
                    <label>ID:</label> 
                    <input type="text" name="id" placeholder="Enter your name" value="<?php echo $id;?>"> 
                </div>

                <div class="input-field">
                    <label>Name:</label> 
                    <input type="text" value="<?php echo $name;?>" name="name" placeholder="Enter your name"> 
                </div>

                <div class="input-field">
                    <label>Roll number:</label> 
                    <input type="number" value="<?php echo $rollno;?>" name="rollno" placeholder="Enter your Roll number">
                </div>

                <div class="input-field">
                    <label>Department:</label>
                    <input type="text" value="<?php echo $depart;?>" name="depart" placeholder="Enter department's name">
                </div>

                <div class="input-field">
                    <label>University:</label> 
                    <input type="text" value="<?php echo $uni;?>" name="uni" placeholder="Enter university's name">
                </div>

                <div class="input-field">
                    <label>Email:</label>
                    <input type="email" value="<?php echo $email;?>" name="email" placeholder="Enter an email address">
                </div>

                <div class="input-field">
                    <label>Phone Number:</label> 
                    <input type="tel" value="<?php echo $phone;?>" name="phone" placeholder="Enter Phone Number">
                </div>

            </div>

                <div class="btn-field">
                    <button type="submit" name="btn">Update</button>
                </div>
                

        </div>
    </div>
    </form>
</body>
</html>