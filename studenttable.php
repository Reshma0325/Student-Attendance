
<table class="table"  id="studenttable">
  <thead class="table-dark">
    <tr>
      <th scope="col">Regno</th>
      <th scope="col">StudentName</th>
      <th scope="col">Department</th>
      <th scope="col">Batch</th>
      <th scope="col">Email</th>
      <th scope="col">ContactNumber</th>
      <th scope="col">Update/Delete</th>
    </tr>
  </thead>
  <tbody>
      
      <?php
      if(isset($_POST['view'])){
    $batch=$_POST['batch'];
    $sql="select * from `student` where batch='$batch'"; }
      else {
          $sql="select * from `student`";
      }
    $result=mysqli_query($con,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
             $regno=$row['regno'];
             $studentname=$row['studentname'];
             $department=$row['department'];
             $batch=$row['batch'];
             $email=$row['email'];
             $contactnumber=$row['contactnumber'];
            echo'  <tr>
      <th scope="row">'.$regno.'</th>
      <td>'.$studentname.'</td>
      <td>'.$department.'</td>
       <td>'.$batch.'</td>
      <td>'.$email.'</td>
      <td>'.$contactnumber.'</td>
      <td>
     
     <a href="editstudent.php?updateid='.$regno.'" class="me-5 editstudent" title="Edit Student"><i class="fas fa-edit text-success"></i></a>
     
      <a href="delstudent.php?deleteid='.$regno.'" class="me-5 deletestudent" title="Delete Student"><i class="fas fa-trash-alt text-danger"></i></a>
      </td>
    </tr> ';
        }
        
    }
      
    ?>
     
  </tbody>
</table>