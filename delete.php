<?php
include 'database.php';

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="DELETE FROM product WHERE id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:index.php');
    }
    else{
        echo mysqli_error($conn);
    }
}
?>