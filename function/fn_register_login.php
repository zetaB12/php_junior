<?php

include 'db/db_conection.php';

if (isset( $_POST['register_login'])) {
    $nombre = $_POST['firstName'];
    $apellido = $_POST['lastName'];
    $email = $_POST['eMail'];
    $pass = $_POST['password'];
    $direccion = $_POST['address'];
    $ciudad = $_POST['country'];
    $codigo_postal = $_POST['zipcode'];
    $cel = $_POST['mobile'];
    
    $consult = mysqli_query($conection, "SELECT * FROM customer WHERE email = '$email'");

    $check = mysqli_num_rows($consult);

    var_dump($check);
    if ($check == 1) {
        echo '<script>alert("ya existe el email")</script>';
    }else{
        $consult = mysqli_query($conection, "INSERT INTO customer (firstname, mi, lastname, address, country, zipcode, mobile, telephone, email, password)
        VALUES ('$nombre', 'D', '$apellido', '$direccion', '$ciudad', '$codigo_postal', '$cel', 44, '$email', '$pass')") 
        or die(mysqli_error());	

        header('location:index.php');
    }
}

