<?php
include"connect.php";
$date=$_GET['updateid'];
$sql="select * from `order` where date='$date' ";
$result = mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

  if(isset($_POST['submit'])){
           $order=$_POST['order'];
           $description=$_POST['description'];
           
           $sql="UPDATE `order` SET `date`='$date',`order`='$order',`description`='$description' WHERE date='$date'" ;
            $result = mysqli_query($con,$sql);

            if($result)
            {
              //echo "Data updated successfully";
                header('location:orderindex.php');
            }
            else
            {
                die(mysqli_error($con));
            }
     }
if(isset($_POST['close'])){
    header('location:orderindex.php');
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

    <title>Edit Order</title>
  </head>
  <body>
    <div class="container"> 

<form method="post">
            <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Updating Orders</b></h5>
        <button type="submit" class="btn-close" data-bs-dismiss="modal" name="close"></button>
      </div>
  <div class="mb-3">
    <label><b>Order</b></label>
    <input type="text" class="form-control" placeholder="Enter the Order" name="order" value="<?php echo $row['order'];?>">
  </div>
   <div class="mb-3">
    <label><b>Description</b></label>
    <input type="text" class="form-control" placeholder="Enter the Description" name="description" value="<?php echo $row['description'];?>">
  </div>
 <div class="modal-footer">
        <button type="submit" class="btn btn-dark" name="submit">Submit</button>
        <button type="submit" class="btn btn-danger" data-bs-dismiss="modal" name="close">Close</button>
    
      </div>
</form>   
    </div>
  </body>
</html>

