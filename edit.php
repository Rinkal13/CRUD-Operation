  
<?php 
    $cn = mysqli_connect("localhost","root","","traning");

    if (isset($_POST['submit'])) 
    {   
            $id = $_POST['id'];    
            $fnm= $_POST['fnm']; 
            $lnm = $_POST['lnm'];             
            $gender = $_POST['gender'];  
            $address = $_POST['address'];   
            $hobby = $_POST['hobby'];    
            $hobby1 = implode(",",$hobby);

            $q = mysqli_query($cn, "update stud set fnm='$fnm', lnm='$lnm', gender='$gender', address='$address', hobby='$hobby1' where id='$id'");
            session_start();
            $_SESSION['message'] = "Record Update Succesfully.....";
            header("Location: select.php");
            exit();
            
            
    } 

    if (isset($_GET['id']))             
    {    
        $id = $_GET['id'];   
        $q = mysqli_query($cn,"select * from stud where id = '$id'");

        while ($r=mysqli_fetch_assoc($q)) 
        { 
            $id = $r['id'];  
            $fnm = $r['fnm'];     
            $lnm = $r['lnm'];        
            $gender = $r['gender'];                                 
            $address = $r['address'];          
            $hobby = $r['hobby'];   
            $str=($r['hobby']);  
            $data=(explode(",",$str));
           
                                         
?>       
      
<form action="" method="post">        
                             
     <input type="hidden" name="id" value="<?php echo $id; ?>">
        <br>First name:<br>          
        <input type="text" name="fnm" value="<?php echo $fnm; ?>"> 
                                                   
        <br>Last name:<br>          
            <input type="text" name="lnm" value="<?php echo $lnm; ?>">        

        <br>Gender:<br>    
            <input type="radio" name="gender" value="male" <?php echo ($gender == 'male')? "checked" : '' ; ?> >Male     
                                                        
            <input type="radio" name="gender" value="female" <?php if($gender == 'female'){ echo "checked";} ?>>Female     
            
        <br>Address:<br>       
            <input type="textarea" name="address" value="<?php echo $address; ?>"> 

        <br>Hobby:<br>
        <input type="checkbox" name="hobby[]" value="reading" <?php  if(in_array("reading" ,$data)) { echo "Checked"; }?> >Reading
        <input type="checkbox" name="hobby[]" value="swimming" <?php  if(in_array("swimming" ,$data)) { echo "Checked"; }?>>Swimming
        <input type="checkbox" name="hobby[]" value="dancing" <?php  if(in_array("dancing" ,$data)) { echo "Checked"; }?>> Dancing
                                                  
        <br><br>            
        <input type="submit" value="submit" name="submit">        

                                                                                                           
</form>        
                                                        
</body>      
                                                        
</html>                                                     
 <?php 
 
}
}?> 