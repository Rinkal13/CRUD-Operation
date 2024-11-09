<?php

    $cn = mysqli_connect("localhost","root","","traning");

    if(isset($_POST['submit']))
    {
        $fnm = $_POST['fnm'];
        $lnm = $_POST['lnm'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $hobby = $_POST['hobby'];
        $hobby1 = implode(",",$hobby);

        $q = mysqli_query($cn,"insert into stud values('','$fnm','$lnm','$gender','$address','$hobby1')");
        session_start();
        $_SESSION['message'] = "Record Insert Succesfully....";
     
        header("Location: select.php");
        exit();
    }
?>