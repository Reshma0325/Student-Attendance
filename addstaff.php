<?php 
include 'connect.php';
     if(isset($_POST['submit'])){
           $staffid=$_POST['staffid'];
           $staffname=$_POST['staffname'];
           $department=$_POST['department'];
           $email=$_POST['email'];
           $contactnumber=$_POST['contactnumber'];
           $password=$_POST['password'];

            $sql="insert into `staff` values('$staffid','$staffname','$department','$email','$contactnumber','$password')";
            $result = mysqli_query($con,$sql);

            if($result)
            {
              echo "Data inserted successfully";
                header"Location:staffindex.php";
              
            }
            else
            {
                die(mysqli_error($con));
            }
     }
 ?>