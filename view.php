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
            width:95%;
            margin:auto;
            border: 5px solid black;
            text-align: center;
            font-size:20px;
            border-radius:5px;
            height:200px;
            background-color: #F7F5F6;
            margin-top: 100px;

        }
        .header{
                width:14%;
                float: left;
                background-color: #bdc3c7;
                padding:10px;
                margin:2px;
                border-radius:10px;
                font-size:30px;
                font-weight: 600;

        }
        input{
            height:30px;
            width:90%;
            
        }
        .c1{
            margin-left: 20px;
        }
        .c6{
            padding-top: ;
        }
        .sub{
            height:65px;
            border-radius:10px;
            background-color: #bdc3c7;
            font-size:30px;

        }
        .another{
            width:95%;
            margin:auto;
            border: 5px solid black;
            text-align: center;
            font-size:20px;
            border-radius:5px;
            height:80px;
            background-color: #F7F5F6;
            margin-top: 30px;
        }
    </style>
</head>
<body style="background-color: #f2f2f2;">
   <div class="formation">
              <h1 >Add Products From This Section</h1>
                <form action="insert.php" method="POST">
                    <div class="header c1">
                    <label for="">Name:</label>
                        <input type="text" name="name">
                    </div>
                    <div class="header">
                    <label for="">Description:</label>
                <input type="text" name="description">  
                   </div>
                    <div class="header">
                    <label for="">Quantity:</label>
                <input type="text" name="quantity">
                    </div>
                    <div class="header">
                    <label for="">Price:</label>
                <input type="text" name="price">   
                    </div>
                    <div class="header">
                    <label for="">Expire:</label>
                <input type="text" name="expire_date">
                    </div>
                    <div class="header c6">
                    <label for=""></label>
                
                    <input class="sub" type="submit" name="submit" value="Add" style="color:white;background-color:green;">
               </div>               
                </form>
    </div>
    <div class="another">
    <a href='insert.php' style='text-align:center;font-size:50px;color:red;width:100%;margin-left:10%'>Another Option For Insert Information</a>
    </div>
</body>
</html>




<?php
    if(isset($_GET['deleteid'])){
        $deleteid=$_GET['deleteid'];
        $sql="DELETE FROM product where id=$deleteid";
        if(mysqli_query($conn,$sql)==TRUE){
            header('location:view.php');
        }
    }
?>
<html>
<head>
    <style>
        table{
            margin-left:15%;
            margin-top: 0px;
            max-width:80%;
            min-width:60%;
            padding-top:0px ;
           
        }
        table, th, td {
            border: 1px solid;
            padding: 10px;
            border-collapse: collapse;
            font-size:20px;
}
button{
    font-size: 20px;
    padding: 15px;
    margin-left: 10px;
    
    border-radius:10px ;
    text-decoration: none;

}
.button1{
    background-color: green;
}
.button2{
    background-color: red;
}
a{
    text-decoration: none;
    color: white;
}

    </style>
</head>
<body>
                <?php
                    $sql="SELECT *FROM product";
                    $query= mysqli_query($conn,$sql);
                    echo "<table>
                    <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Expire_date</th>
                    <th>Action</th>
                    </tr>
                ";
                    while($data=mysqli_fetch_assoc($query))
                    {
                    $id=$data['id'];
                    $name=$data['name'];
                    $description=$data['description'];
                    $quantity=$data['quantity'];
                    $price=$data['price'];
                    $expire_date=$data['expire_date'];


                    echo "<tr>
                    <td>$name</td>
                    <td>$description</td>
                    <td> $quantity</td>
                    <td> $price</td>
                    <td>  $expire_date</td>
                    <td><span><button class='button button1'><a href='edit.php?id=$id'>Edit</a></button>
                    </span>
                   <span><button class='button button2'><a href='view.php?deleteid=$id'>Delete</a></button>
                    </span>
                    
                    </td>
                    
                    </tr>
                    <br>
                    ";
                   
                    }


                    ?>
                

</body>
</html>




