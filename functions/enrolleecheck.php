<?php

session_start();

include "../db_conn.php";

function clean($data)
{

    $data = preg_replace('/\D/', "", $data);
    return $data;
}

$token = $_POST['token'];

$query = "SELECT * FROM student WHERE Student_ID = $token";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

if (mysqli_num_rows($result) == 0) {
    $query = "SELECT * FROM pending WHERE Enrollee_ID = $token";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) == 0){
        header("Location: ../checkenrollee.php?nice=Incorrect Token/You have not yet submitted an enrollment form!");
    }else{
        header("Location: ../checkenrollee.php?nice=You are still in the pending list");
    }
    
} else {
    header("Location: ../checkenrollee.php?nice=You are now enrolled in Calapan Chu Eng!");
    
}
