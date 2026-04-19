<?php
    include "config.php";

    if(isset($_POST['btn']))
    {
        $Id = $_POST['id'];
        $Name = $_POST['name'];
        $Roll = $_POST['rollno'];
        $Depart = $_POST['depart'];
        $Uni = $_POST['uni'];
        $Email = $_POST['email'];
        $Phone = $_POST['phone'];

        $update = "UPDATE info2 SET Name ='$Name', Rollno='$Roll', Department='$Depart', University='$Uni', Email='$Email', Phoneno='$Phone' WHERE id = '$Id'";
        $run = mysqli_query($con,$update);
        header('Location:viewdata.php');
    }
?>