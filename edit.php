<?php
$conn=mysqli_connect('localhost','root','','cse');

if(isset($_GET['id'])){
     $getid=$_GET['id'];
    $sql="SELECT * FROM product WHERE id=$getid";
    $query=mysqli_query($conn,$sql);
    $data=mysqli_fetch_assoc($query);

    $id         =$data['id'];
    $name      =$data['name'];
    $description       =$data['description'];
    $quantity          =$data['quantity'];
    $price          =$data['price'];
    $expire_date          =$data['expire_date'];
}


if(isset($_POST['edit'])){
    $iid=$_POST['edit'];
    $nname=$_POST['name'];
    $ddescription=$_POST['description'];
    $qquantity=$_POST['quantity'];
    $pprice=$_POST['price'];
    $eexpire_date=$_POST['expire_date'];
    
    echo "Id number is:" .$iid;
    $sql1="UPDATE product SET name='$nname',description='$ddescription',quantity='$qquantity',price='$pprice',expire_date='$eexpire_date' WHERE id='$iid' ";
     
    if(mysqli_query($conn,$sql1)==TRUE){
                header('location:view.php');
                echo "Data update";

    }
    else{
        echo "Data not update";
    }

}


?>
<html>
<head>
    <style>
        .formation{
            width:40%;
            margin:auto;
            border: 5px solid green;
            text-align: center;
            font-size:20px;
            border-radius:5px;
        }
        .insert{
            font-size:20px;
            border-radius:10px;
            width: 90px;
            
        }
    </style>
</head>
<body style="background-color: #f2f2f2;">

   <div class="formation">
                <h1>Insert Product Information.</h1>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            Name : 
                <input type="text" name="name" value="<?php echo $name;
 ?>"><br><br>
                Description : 
                <input type="text" name="description" value="<?php echo $description;
 ?>"><br><br>
                Quantity : 
                <input type="text" name="quantity" value="<?php echo $quantity;
 ?>"><br><br>
                Price : 
                <input type="text" name="price" value="<?php echo $price;
 ?>"><br><br>
                Expire_date : 
                <input type="text" name="expire_date" value="<?php echo $expire_date;
 ?>"><br><br>
                
                <input class="insert" type="submit" name="edit" value="<?php echo $id."Update the Value"?>"  style="color:white;background-color:green;">
               
            </form>
    </div>

</body>
</html>



