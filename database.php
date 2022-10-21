<?php

$conn= new mysqli('localhost','root','','cse') ;
if(!$conn){
    die(mysqli_error($conn));
}
?>