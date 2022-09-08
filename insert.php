<?php
$conn=mysqli_connect('localhost','root','','cse');
$name=NULL;
    if(isset($_POST['submit'])){
        $name= $_POST['name'];
        $description= $_POST['description'];
        $quantity= $_POST['quantity'];       
        $price= $_POST['price'];       
        $expire_date= $_POST['expire_date'];       
    }
    if($name!=NULL){
$sql="INSERT INTO product (name, description, quantity, price, expire_date) VALUES ('$name','$description','$quantity','$price','$expire_date')";
mysqli_query($conn,$sql);
header('location:view.php');
    }

?>

<html>
<head>
    <style>
        .formation{
            width:50%;
            margin:auto;
            border: 5px solid green;
            text-align: center;
            font-size:20px;
            border-radius:5px;
        }
        .insert{
            font-size:30px;
            border-radius:10px;
        }
    </style>
</head>
<body style="background-color: #f2f2f2;">
   <div class="formation">


                <h1>Add Products With Description</h1>
                <form action="insert.php" method="POST">
                Name : 
                <input type="text" name="name"><br><br>
                Description : 
                <input type="text" name="description"><br><br>
                Quantity : 
                <input type="text" name="quantity"><br><br>
                Price :
                <input type="text" name="price"><br><br>
                Expire_date :
                <input type="text" name="expire_date"><br><br>
                <input class="insert" type="submit" name="submit" value="Insert" style="color:white;background-color:green;">
                </form>
    </div>
</body>
</html>



