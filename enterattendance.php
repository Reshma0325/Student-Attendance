<?php 
include 'staffheader.php';
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Enter Attendance</title>
    
    <!--- bootstrap css link --->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!--- font awesome cdn link --->
    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>
<div class="container">
   
          <!--- form modal --->
    
 <div class="modal fade" id="usermodal"  role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enter Attendance</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post">
      <div class="modal-body">
         
          <!--- Batch --->
          <div class="form-group">
         
          <label>Batch:</label>
          <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text bg-dark"><i class="fa-solid fa-people-group text-light"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter Batch" autocomplete="off" required="required" id="batch" name="batch">
        </div>
          </div>
         
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-dark" name="submit">Submit</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
    
      </div>
        </form>
    </div>
  </div>
</div>

    
<div class="row mb-3">
   
    <div class="col-5">
        <br>
        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#usermodal">
            View Student List
        </button>
    </div>
</div> 
<!--- table --->
  <form method="post">  
      <div class="form-group">
             <label>Date:</label>
          <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text bg-dark"><i class="fa-solid fa-calendar-days text-light"></i></span>
            </div>
            <input type="date" class="form-control" placeholder="Enter Date" autocomplete="off" required="required" name="date" id="date">
        </div>
              <label>Hour:</label>
          <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text bg-dark"><i class="fa-solid fa-people-group text-light"></i></span>
            </div>
            <select id="hour" name="hour">
                <option value='H1'>1st Hour</option>
                    <option value='H2'>2nd Hour</option>
                    <option value='H3'>3rd Hour</option>
                    <option value='H4'>4th Hour</option>
                    <option value='H5'>5th Hour</option>
                </select>
        </div>
          </div>
      
<br>
<table class="table"  id="studenttable">
  <thead class="table-dark">
    <tr>
      <th scope="col">Mark Attendance</th>
      <th scope="col">Regno</th>
      <th scope="col">Student Name</th>
    </tr>
  </thead>
  <tbody>
      
      <?php
  
       if(isset($_POST['submit'])){
        $batch=$_POST['batch'];     
    $sql="select * from `student` where batch='$batch' ";
    $query_run=mysqli_query($con,$sql); 
           
     if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $result)
                                {
                                   ?>
                                    <tr>
                                    <td> <input type="checkbox" name="attlist[]" value="<?= $result['regno'];?>" ></td>
                                    <td> <?= $result['regno']; ?> <br> </td>
                                        <td> <?= $result['studentname']; ?> <br> </td>
      </tr> 
                              <?php
                                }
                            }
                            else
                            {
                                echo "No Record Found";
                            }
 
      }
    ?>
     
     
  </tbody>
</table>
       <div class="form-group mt-3">
                                <button name="save_multicheckbox" class="btn btn-success">Save Attendance</button>
                            </div>
</form>
    
</div> 

    
<!--- jquery cdn link --->
    
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
<!--- bootstrap popper and js link --->
    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
  

</body>
</html>
<?php

if(isset($_POST['save_multicheckbox']))
{   
     $date=$_POST['date'];
     $hour=$_POST['hour'];
    $sql1="select * from `order` where date='$date' "; 
        $result1=mysqli_query($con,$sql1);
            if($result1){
                $row1=mysqli_fetch_assoc($result1);
                 $date=$row1['date'];
             $order=$row1['order'];
    $attlist = $_POST['attlist'];



 function CheckAttend($attlist,$date)
    {
        include 'connect.php';
        $flag=0;
        $sql2="select * from `attendance` where `date`='$date' and `regno`='$attlist'"  or die(mysqli_error()); 
        $result3=mysqli_query($con, $sql2);
        if(mysqli_num_rows($result3) > 0)
        {
            $flag=1;
        }
        return $flag;
    }
    
    foreach($attlist as $attstuds)
    {    
         switch($_POST['hour']) {
                 case 'H1': 
                 if (CheckAttend($attstuds,$date)==1)
                 {
                    $query ="update attendance set h1='AB' where regno='$attstuds' and date='$date' ";
                 }
                 else
                 {
                    $query ="insert into attendance(`regno`, `date`, `order`, `h1`, `h2`, `h3`, `h4`, `h5`) VALUES ('$attstuds','$date','$order','AB','-','-','-','-')";

                  }                   
                  break;
                  case 'H2': 
                  if (CheckAttend($attstuds,$date,$order)==1)
                 {
                    $query ="update attendance set h2='AB' where regno='$attstuds' and date='$date' ";
                 }
                 else
                 {
         $query ="insert into attendance(`sno`, `regno`, `date`, `order`, `h1`, `h2`, `h3`, `h4`, `h5`) VALUES (NULL,'$attstuds','$date','$order','-','AB','-','-','-')";
                  }
                 break;
                  case 'H3': 
                  if (CheckAttend($attstuds,$date,$order)==1)
                 {
                    $query ="update attendance set h3='AB' where regno='$attstuds' and date='$date' ";
                 }
                 else
                 {
         $query ="insert into attendance(`sno`, `regno`, `date`, `order`, `h1`, `h2`, `h3`, `h4`, `h5`) VALUES (NULL,'$attstuds','$date','$order','-','-','AB','-','-')";
               }
                 break;
                  case 'H4': 
                  if (CheckAttend($attstuds,$date,$order)==1)
                 {
                    $query ="update attendance set h4='AB' where regno='$attstuds' and date='$date' ";
                 }
                 else
                 {
         $query ="insert into attendance(`sno`, `regno`, `date`, `order`, `h1`, `h2`, `h3`, `h4`, `h5`) VALUES (NULL,'$attstuds','$date','$order','','-','-','AB','-')";
     }
                 break;
                  case 'H5': 
                  if (CheckAttend($attstuds,$date,$order)==1)
                 {
                    $query ="update attendance set h1='AB' where regno='$attstuds' and date='$date' ";
                 }
                 else
                 {
         $query ="insert into attendance(`sno`, `regno`, `date`, `order`, `h1`, `h2`, `h3`, `h4`, `h5`) VALUES (NULL,'$attstuds','$date','$order','-','-','-','-','AB')";
     }
            break;
             default:
                 echo"inserted failed";
         }
        $query_run = mysqli_query($con, $query);
    }

    if($query_run)
    {
      echo "<h3><b>Inserted Successfully</b></h3>";
        
      

    }
    else
    {
        echo "<h3><b>Not Inserted</b></h3>";
        
     

    }
}


   

}
?>
    
 