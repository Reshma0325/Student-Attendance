<?php 
include 'connect.php';
     if(isset($_POST['submit'])){
           $regno=$_POST['regno'];
           $studentname=$_POST['studentname'];
           $department=$_POST['department'];
           $batch=$_POST['batch'];
           $email=$_POST['email'];
           $contactnumber=$_POST['contactnumber'];

            $sql="insert into `student` values(NULL,'$regno','$studentname','$department','$email','$contactnumber','$batch')";
            $result = mysqli_query($con,$sql);

            if($result)
            {
              echo "Data inserted successfully";
                header"Location:studentindex.php";
              
            }
            else
            {
                die(mysqli_error($con));
            }
     }
 ?>