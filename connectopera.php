<?php
$con=mysqli_connect("localhost","root","","OperaLibrary");
if(mysqli_connect_errno($con)){
    echo "Failed to connect MySQL: ".mysqli_connect_error();
}
?>