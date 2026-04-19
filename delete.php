<?php
    include "config.php";

    $i = $_GET['ID2'];
    $del_query = "DELETE FROM info WHERE id = '$i'";
    mysqli_query($con,$del_query);
    header('Location:viewdata.php');
?>