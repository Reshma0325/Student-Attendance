<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $regno=$_GET['deleteid'];
    
    $sql="delete from `student` where regno='$regno'";
    $result=mysqli_query($con,$sql);
    if($result){
       // echo"Deleted Successfully";
        header('location:studentindex.php');
    }else{
         die(mysqli_error($con));
    }
}

?>