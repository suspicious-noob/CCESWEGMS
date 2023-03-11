<?php

session_start();

include "../db_conn.php";

function clean ($data){

    $data = preg_replace('/\D/',"",$data);
    return $data;
}

if(isset($_POST['username']) && isset($_POST['password'])){

    $username = clean(($_POST['username']));
    $password = ($_POST['password']);

}



$sql = "SELECT * FROM users WHERE id = '$username'";
$sql2 = "SELECT * FROM users WHERE id = '$username' AND password = '$password'";
$result = mysqli_query($conn,$sql);
$result2 = mysqli_query($conn,$sql2);

if (mysqli_num_rows($result) === 1 || mysqli_num_rows($result2) === 1) {
    $row = mysqli_fetch_assoc($result);
    $row2 = mysqli_fetch_assoc($result2);
    
    if ($row['id'] === $username) {

        if ($row2['password'] === $password) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['firstname'] = $row['first_name'];
            $_SESSION['lastname'] = $row['last_name'];
            $_SESSION['clearance'] = $row['clearance'];
            header("Location: ../admin/landing.php");
            exit();
        } else {
            header("Location: ../login.php?error=Incorect username or password");
            exit();
        }
    }
    } else {
    header("Location: ../login.php?error=User does not exist");
    exit();
    }
?>


