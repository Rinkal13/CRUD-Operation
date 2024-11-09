<?php

    $cn = mysqli_connect("localhost","root","","traning");

    $id = $_GET['id'];

    $q = mysqli_query($cn,"delete from stud where id = '$id'");

    session_start();
    $_SESSION['message'] = "Record Delete Succesfully.....";
    header("Location: select.php");

    echo '<meta http-equiv="refresh" content="2;url=select.php">';
    exit();


   
?>