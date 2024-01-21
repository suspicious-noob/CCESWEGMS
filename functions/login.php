<?php

session_start();

include "../db_conn.php";

function clean($string) {
    $string = str_replace(' ', '', $string);
 
    return preg_replace('/[^A-Za-z0-9\-]/', '', $string);
 }

if(isset($_POST['username']) && isset($_POST['password'])){

    $username = clean(($_POST['username']));
    $password = ($_POST['password']);

    $identifier = substr($username, 0, 1);

    $user = "student";
    $rowid = "Student_ID";

    switch ($identifier) {
        case "a":
        case "A":
            $user = "admin";
            $rowid = "id";
            break;
        case "t":
        case "T":
            $user = "teachers";
            $rowid = "Teacher_ID";
            break;
        case "r":
        case "R":
            $user = "registrar";
            $rowid = "Staff_ID";
            break;
        case "c":
        case "C":
            $user = "cashier";
            $rowid = "Cashier_ID";
            break;
        default:
            $user = "student";
            $rowid = "Student_ID";
    }

}



$sql = "SELECT * FROM $user WHERE $rowid = '$username'";
$sql2 = "SELECT * FROM $user WHERE $rowid = '$username' AND password = '$password'";
$result = mysqli_query($conn,$sql);
$result2 = mysqli_query($conn,$sql2);

if (mysqli_num_rows($result) === 1 || mysqli_num_rows($result2) === 1) {
    $row = mysqli_fetch_assoc($result);
    $row2 = mysqli_fetch_assoc($result2);
    
    if ($row[$rowid] === $username) {

        if ($row2['password'] === $password) {
            $_SESSION['id'] = $row[$rowid];
            $_SESSION['firstname'] = $row['Fname'];
            $_SESSION['lastname'] = $row['Lname'];
            $_SESSION['clearance'] = $row['clearance'];
            header("Location: ../".$user."/landing.php");
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


