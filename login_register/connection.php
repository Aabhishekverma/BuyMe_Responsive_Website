<?php

$con=mysqli_connect("localhost:3307" , "root" , "" ,"testing");

if(mysqli_connect_error()){
    echo"<script>alert('cannot connect to the database');</script>";
    exit();

}

?>