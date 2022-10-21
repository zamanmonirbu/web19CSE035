<?php
include 'database.php';

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $description=$_POST['description'];
    $quantity=$_POST['quantity'];
    $price=$_POST['price'];
    $expire_date=$_POST['expire_date'];

$sql="INSERT INTO product(name,description,quantity,price,expire_date) VALUES('$name','$description','$quantity','$price','$expire_date')";

$result=mysqli_query($conn,$sql);
if(!$result){
    die(mysqli_error($conn));
}
else{
    header('location:index.php');
  }
}
?>

<!doctype html>
<html lang="en">
<head>   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <form action="" method="POST" class="border shadow p-5" style="margin-left:25%;width:50%;margin-top:75px;border-radius:5px">
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Enter product name" name="name">

        </div>
        <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control" placeholder="Enter description" name="description">

        </div>
        <div class="form-group">
            <label>Quantity</label>
            <input type="text" class="form-control" placeholder="Enter quantity" name="quantity">

        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control" placeholder="Enter price" name="price">

        </div>
        <div class="form-group">
            <label>Expire_date</label>
            <input type="date" class="form-control" placeholder="Enter expire date" name="expire_date">
        </div>
        <br>         
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</body>
</html>