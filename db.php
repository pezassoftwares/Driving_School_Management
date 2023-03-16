<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '' , 'driving');

if(mysqli_connect_errno()){

    echo 'DB Connection Error: '.mysqli_connect_error();

}
