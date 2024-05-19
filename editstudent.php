<?php
include"connect.php";
$regno=$_GET['updateid'];
$sql="select * from `student` where regno='$regno' ";
$result = mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

  if(isset($_POST['submit'])){
           $studentname=$_POST['studentname'];
           $department=$_POST['department'];
           $batch=$_POST['batch'];
           $email=$_POST['email'];
           $contactnumber=$_POST['contactnumber'];
         

            $sql = "update `student` set regno= '$regno',studentname= '$studentname',department='$department',email='$email',contactnumber='$contactnumber',batch='$batch' where regno='$regno'";
            $result = mysqli_query($con,$sql);

            if($result)
            {
              //echo "Data updated successfully";
                header('location:studentindex.php');
            }
            else
            {
                die(mysqli_error($con));
            }
     }
if(isset($_POST['close'])){
    header('location:studentindex.php');
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Edit Student</title>
  </head>
  <body>
    <div class="container"> 

<form method="post">
            <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Updating Students</b></h5>
        <button type="submit" class="btn-close" data-bs-dismiss="modal" name="close"></button>
      </div>
  <div class="mb-3">
    <label><b>Student Name</b></label>
    <input type="text" class="form-control" placeholder="Enter the Student Name" name="studentname" value="<?php echo $row['studentname'];?>">
  </div>
   <div class="mb-3">
    <label><b>Department</b></label>
    <input type="text" class="form-control" placeholder="Enter the Department" name="department" value="<?php echo $row['department'];?>">
  </div>
  <div class="mb-3">
    <label><b>Batch</b></label>
    <input type="text" class="form-control" placeholder="Enter the Batch" name="batch" value="<?php echo $row['batch'];?>">
  </div>
  <div class="mb-3">
    <label><b>Email Id</b></label>
   <input type="email" class="form-control" placeholder="Enter the Email Id" name="email" value="<?php echo $row['email'];?>">
  </div>
  <div class="mb-3">
    <label><b>Contact Number</b></label>
    <input type="text" class="form-control" placeholder="Enter the Contact Number" name="contactnumber" value="<?php echo $row['contactnumber'];?>">
  </div>
 <div class="modal-footer">
        <button type="submit" class="btn btn-dark" name="submit">Submit</button>
        <button type="submit" class="btn btn-danger" data-bs-dismiss="modal" name="close">Close</button>
    
      </div>
</form>   
    </div>
  </body>
</html>

