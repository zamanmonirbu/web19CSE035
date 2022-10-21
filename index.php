<?php
include 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>View</title>
</head>
<body>
<button class="btn btn-primary " style="margin:50px 0px 50px 45%;" ><a href="view.php" class="text-light" style="text-decoration:none">Add Information</a></button>
<table class="table table-responsive shadow " style="width:80%;margin-left:10%;border-radius:10px;">
  <thead >
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Expire_date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $sql="SELECT *FROM product";
  $result=mysqli_query($conn,$sql);
  if(!$result){
      echo mysqli_error($conn);
  }
  else{
      while($row=mysqli_fetch_assoc($result)){
          $id=$row['id'];
          $name=$row['name'];
          $description=$row['description'];
          $quantity=$row['quantity'];
          $price=$row['price'];
          $expire_date=$row['expire_date'];
                   
          echo '<tr>
            <td scope="row">'.$name.'</td>
            <td>'.$description.'</td>
            <td> '.$quantity.'</td>
            <td> '.$price.'</td>
            <td> '.$expire_date.'</td>
            <td> 
            <button class="btn btn-primary"><a href="edit.php?editid='.$id.'" class="text-light" style="text-decoration:none">Edit</a></button>
            <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light" style="text-decoration:none">Delete</a></button>
            </td>           
          </tr>';            
      }
  }
  ?>
 
  </tbody>
</table>    
</body>
</html>
