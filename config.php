<?php 
    $hostname = 'localhost';
    $username = 'root';
    $password ='';
    $database = 'instagram';
    $base_url = 'http://localhost/insta';

    // make the connection
    $connection = mysqli_connect($hostname,$username,$password,$database) or die();


?>