
<table class="table"  id="ordertable">
  <thead class="table-dark">
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Order</th>
      <th scope="col">Description</th>
      <th scope="col">Update/Delete</th>
    </tr>
  </thead>
  <tbody>
      
      <?php
    
    $sql="select * from `order`";
    $result=mysqli_query($con,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
             $date=$row['date'];
             $order=$row['order'];
             $description=$row['description'];
            echo'  <tr>
      <th scope="row">'.$date.'</th>
      <td>'.$order.'</td>
      <td>'.$description.'</td>
      <td>
     
     <a href="editorder.php?updateid='.$date.'" class="me-5 editorder" title="Edit Order"><i class="fas fa-edit text-success"></i></a>
     
      <a href="delorder.php?deleteid='.$date.'" class="me-5 deleteorder" title="Delete Order"><i class="fas fa-trash-alt text-danger"></i></a>
      </td>
    </tr> ';
        }
        
    }
    
    ?>
     
  </tbody>
</table>