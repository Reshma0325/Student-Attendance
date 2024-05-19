<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $staffid=$_GET['deleteid'];
    
    $sql="delete from `staff` where staffid='$staffid'";
    $result=mysqli_query($con,$sql);
    if($result){
       // echo"Deleted Successfully";
        header('location:staffindex.php');
    }else{
         die(mysqli_error($con));
    }
}

?>