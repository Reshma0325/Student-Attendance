<?php
include"connect.php";
$staffid=$_GET['updateid'];
$sql="select * from `staff` where staffid='$staffid' ";
$result = mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

  if(isset($_POST['submit'])){
           $staffname=$_POST['staffname'];
           $department=$_POST['department'];
           $email=$_POST['email'];
           $contactnumber=$_POST['contactnumber'];
           $password=$_POST['password'];

            $sql = "update `staff` set staffid= '$staffid',staffname= '$staffname',department='$department',email='$email',contactnumber='$contactnumber',password='$password' where staffid='$staffid'";
            $result = mysqli_query($con,$sql);

            if($result)
            {
              //echo "Data updated successfully";
                header('location:staffindex.php');
            }
            else
            {
                die(mysqli_error($con));
            }
     }
if(isset($_POST['close'])){
    header('location:staffindex.php');
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

    <title>Edit Staff</title>
  </head>
  <body>
    <div class="container"> 

<form method="post">
            <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Updating Staffs</b></h5>
        <button type="submit" class="btn-close" data-bs-dismiss="modal" name="close"></button>
      </div>
  <div class="mb-3">
    <label><b>Staff Name</b></label>
    <input type="text" class="form-control" placeholder="Enter the Staff Name" name="staffname" value="<?php echo $row['staffname'];?>">
  </div>
   <div class="mb-3">
    <label><b>Department</b></label>
    <input type="text" class="form-control" placeholder="Enter the Department" name="department" value="<?php echo $row['department'];?>">
  </div>
  <div class="mb-3">
    <label><b>Email Id</b></label>
   <input type="email" class="form-control" placeholder="Enter the Email Id" name="email" value="<?php echo $row['email'];?>">
  </div>
  <div class="mb-3">
    <label><b>Contact Number</b></label>
    <input type="text" class="form-control" placeholder="Enter the Contact Number" name="contactnumber" value="<?php echo $row['contactnumber'];?>">
  </div>
     <div class="mb-3">
    <label><b>Password</b></label>
    <input type="text" class="form-control" placeholder="Enter the Password" name="password" value="<?php echo $row['password'];?>">
  </div>
 <div class="modal-footer">
        <button type="submit" class="btn btn-dark" name="submit">Submit</button>
        <button type="submit" class="btn btn-danger" data-bs-dismiss="modal" name="close">Close</button>
    
      </div>
</form>   
    </div>
  </body>
</html>

