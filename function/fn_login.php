<?php

include 'db/db_conection.php';

if (isset( $_POST['login'] )) {
    $email = $_POST['email'];
    $pass   = $_POST['password'];

    $consulta = "SELECT * FROM customer WHERE email =  '$email' AND password = '$pass'";
    
    $result = mysqli_query($conection, $consulta) or die ('cannot login' . mysqli_error());

    $row = mysqli_fetch_array($result);

    $num_row = mysqli_num_rows($result);

    if ($num_row == 1) {
        session_start();
        foreach ($row as $key => $value) {
            $_SESSION['user'][$key] = $value;
            header( "location:shop.php" );
        }
        
    }else{
        echo "<script>alert('Invalid Email or Password')</script>";
        header("location:index.php");
    }

} 