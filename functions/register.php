<?php

session_start();

include "../db_conn.php";

function clean ($data){

    $data = preg_replace('/\D/',"",$data);
    return $data;
}

$fname = ($_POST['fname']);
$mname = ($_POST['mname']);
$lname = ($_POST['lname']);
$_SESSION["gender"] = $_POST['gender'];

if(($_POST['gender'])===1){
    $gender = "Male";
}else{
    $gender = "Female";
}

// $idnumber = clean(($_POST['idnumber']));
$contact = ($_POST['contact']);
$bday = ($_POST['bday']);
$email = ($_POST['email']);
$address = ($_POST['address']);
// $pass1 = ($_POST['pass1']);
// $pass2 = ($_POST['pass2']);

$_SESSION["fname"] = $fname;
$_SESSION["mname"] = $mname;
$_SESSION["lname"] = $lname;
// $_SESSION["idnumber"] = $idnumber;
$_SESSION["contact"] = $contact;
$_SESSION["bday"] = $bday;
$_SESSION["email"] = $email;
$_SESSION["address"] = $address;


// $query = "SELECT id FROM users WHERE id = '$idnumber'";
// $result = mysqli_query($conn,$query);

// if(mysqli_num_rows($result)===1){
//     header("Location: registration.php?error=ID Number already exists");
//     exit();
// }else if($pass1 != $pass2){
//     header("Location: registration.php?error=Passwords do not match");
//     exit();
// }else{
    $query = "INSERT INTO pending(Fname,Mname,Lname,Gender,Contact_Num,Birthdate,email,Address)
            VALUES('$fname','$mname','$lname','$gender','$contact','$bday','$email','$address')";
    $result = mysqli_query($conn,$query);
    $query = "SELECT Enrollee_ID
    FROM   pending
    ORDER  BY timestamp DESC
    LIMIT  1";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result);
    $_SESSION["token"] = $row['Enrollee_ID'];

    header("Location: ../enrolleenumber.php?nice=Registration Successful!");
    exit();
// }

?>