<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 12/21/2019
 * Time: 5:23 PM
 */
    $host = "localhost";
    $user = "root";
    $pass ="";
    $db = "splint";

    $con = mysqli_connect($host, $user, $pass, $db);

    if (isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "SELECT * FROM users WHERE id = $id";
        $r = mysqli_query($con, $sql);

        while ($d = mysqli_fetch_assoc($r)){
            $mail =  $d['email'];
            $name = strstr($mail, '1', true);
            $roll = substr($mail, -17, 6);
            $domain = substr($mail, -10);

//            $sql = "UPDATE users SET name = '$name', roll ='$roll', domain = '$domain' WHERE email = $mail";
            $sql = "UPDATE users SET name = '$name', roll = '$roll', domain = '$domain' WHERE id = $id";

            $res = mysqli_query($con, $sql);

            header('Location: index.php');
        }
    }




?>