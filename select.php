<h2 align="center">Display Data</h2>
<?php
session_start();

if (isset($_SESSION['message'])){

    echo  $_SESSION['message'] ;
   
    unset($_SESSION['message']);
   
    // echo '<meta http-equiv="refresh" content="2">';

    // if (time() - $_SESSION['message'] > 3) {
    //     unset($_SESSION['message']);
    // }  

}

?>
<?php

$cn = mysqli_connect("localhost","root","","traning");

if(isset($_POST['submit']))
{
    $fnm = $_POST['fnm'];
    $lnm = $_POST['lnm'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $hobby = $_POST['hobby']; 
}

$q = mysqli_query($cn,"select * from stud");
echo "<table border='1' align='center' >";

while($r = mysqli_fetch_assoc($q))
{
        echo "<tr>";
        echo "<td>".$r['id']."</td>";
        echo "<td>".$r['fnm']."</td>";
        echo "<td>".$r['lnm']."</td>";
        echo "<td>".$r['gender']."</td>";
        echo "<td>".$r['address']."</td>";
        echo "<td>".$r['hobby']."</td>";
        echo "<td><a href='edit.php?id=".$r['id']."'>Update</td>";
        echo "<td><a href='delete.php?id=".$r['id']."'>Delete</td>";
}
echo "</tr>";
echo "</table>";
?>




