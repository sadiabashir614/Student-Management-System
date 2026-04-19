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
            <h1>Student Management System</h1>
            <div class="underline"></div>
            <form action="" method="post">
            <div class="input-form">
                <div class="input-field">
                    <label>Name:</label> 
                    <input type="text" name="name" placeholder="Enter your name" required> 
                </div>

                <div class="input-field">
                    <label>Roll number:</label> 
                    <input type="number" name="rollno" placeholder="Enter your Roll number" required>
                </div>

                <div class="input-field">
                    <label>Department:</label>
                    <input type="text" name="depart" placeholder="Enter department's name" required>
                </div>

                <div class="input-field">
                    <label>University:</label> 
                    <input type="text" name="uni" placeholder="Enter university's name" required>
                </div>

                <div class="input-field">
                    <label>Email:</label>
                    <input type="email" name="email" placeholder="Enter an email address" required>
                </div>

                <div class="input-field">
                    <label>Phone Number:</label> 
                    <input type="tel" name="phone" placeholder="Enter Phone Number" required>
                </div>

            </div>

                <div class="btn-field">
                    <button type="submit" name="btn">Submit</button>
                </div>
                <div class="btn-field">
                    <p>Do you want to check your data?<a href="viewdata.php">Click Here</a></p>
                </div>

        </div>
    </div>
    </form>
</body>
</html>

<?php
    include "config.php";

    if(isset($_POST['btn']))
    {
        $name = $_POST['name'];
        $rollno = $_POST['rollno'];
        $depart = $_POST['depart'];
        $uni = $_POST['uni'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $check = "SELECT * FROM info2 WHERE email='$email'";
        $result = mysqli_query($con,$check);
        if(mysqli_num_rows($result) >0){
            echo "<script>alert('Email already exists!');</script>";
        }
        else{

        $insert_query = "INSERT INTO info2(Name,Rollno,Department,University,Email,Phoneno) VALUES ('$name','$rollno','$depart','$uni','$email','$phone')";
        $result = mysqli_query($con,$insert_query);

        if($result)
        {
            echo "<script>alert('Data Saved Succesfully!');</script>";
        }
    }
}

?>