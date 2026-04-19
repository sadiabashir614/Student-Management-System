<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins">
</head>
<body>
     <div class="container" id="signinform">
    <div class="form-box">
        <h1 class="signup">Sign In</h1>
    <div class="underline"><hr></div>

        <div class="input-form">
            <form action="" method="post">

                <div class="input-field">
                    <i class="fa-solid fa-at"></i>
                    <input type="email" name="email" placeholder="Enter email address" required>
                </div>

                <div class="input-field">
                    <i class="fa-solid fa-unlock"></i>
                    <input type="password" name="password" placeholder="Enter a password" minlength="6" maxlength="12" required>
                </div>
                <p><span class="suggestion">Don't have an account? <a href="Signup.php">Sign Up</a></span></p>
                

                </div>

                <div class="btn-field">
                    <button type="submit" name="btn" id="signinbtn">Sign In</button>
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
        $email = $_POST['email'];
        $password = $_POST['password'];

        $read = "SELECT * FROM info1 WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($con,$read);

        if($result){
        if(mysqli_num_rows($result) > 0)
        {
            $user = mysqli_fetch_assoc($result);
            if($user['password'] == $password);
            {
                header("location: studentform.php");
            }
            
        }
    }
    echo "<script>alert('Incorrect email or password');</script>";
    }
    
?>