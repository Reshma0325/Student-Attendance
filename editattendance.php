<?php
include"connect.php";
$regno=$_GET['updateid'];
$date=$_GET['updatedate'];
$sql="select * from `attendance` where regno='$regno' and date='$date' ";
$result = mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

  if(isset($_POST['submit'])){
           $H1=$_POST['H1'];
           $H2=$_POST['H2'];
           $H3=$_POST['H3'];
           $H4=$_POST['H4'];
           $H5=$_POST['H5'];
         

            $sql = "update `attendance` set h1= '$H1',h2='$H2',h3='$H3',h4='$H4',h5='$H5' where regno='$regno' and date='$date'";
            $result = mysqli_query($con,$sql);

            if($result)
            {
              //echo "Data updated successfully";
                header('location:viewattendance.php');
            }
            else
            {
                die(mysqli_error($con));
            }
     }
if(isset($_POST['close'])){
    header('location:viewattendance.php');
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

    <title>Edit Attendance</title>
  </head>
  <body>
    <div class="container"> 

<form method="post">
            <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Updating Attendance</b></h5>
        <button type="submit" class="btn-close" data-bs-dismiss="modal" name="close"></button>
      </div>
    <?php echo "<h5><b>Regno : ".$row['regno']."</b></h5>";
    echo "<h5><b>Date : ".$row['date']."</b></h5>";
    echo "<h5><b>Order : ".$row['order']."</b></h5>";
    ?>
  <div class="mb-3">
    <label><b>H1</b></label>
    <input type="text" class="form-control"  name="H1" value="<?php echo $row['h1'];?>">
  </div>
   <div class="mb-3">
    <label><b>H2</b></label>
    <input type="text" class="form-control"  name="H2" value="<?php echo $row['h2'];?>">
  </div>
  <div class="mb-3">
    <label><b>H3</b></label>
    <input type="text" class="form-control"  name="H3" value="<?php echo $row['h3'];?>">
  </div>
  <div class="mb-3">
   <label><b>H4</b></label>
    <input type="text" class="form-control"  name="H4" value="<?php echo $row['h4'];?>">
  </div>
  <div class="mb-3">
    <label><b>H5</b></label>
    <input type="text" class="form-control"  name="H5" value="<?php echo $row['h5'];?>">
  </div>
 <div class="modal-footer">
        <button type="submit" class="btn btn-dark" name="submit">Submit</button>
        <button type="submit" class="btn btn-danger" data-bs-dismiss="modal" name="close">Close</button>
    
      </div>
</form>   
    </div>
  </body>
</html>

