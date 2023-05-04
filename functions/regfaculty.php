<?php

session_start();

include "db_conn.php";

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

$idnumber = clean(($_POST['idnumber']));
$contact = ($_POST['contact']);
$bday = ($_POST['bday']);
$email = ($_POST['email']);
$address = ($_POST['address']);
$pass1 = ($_POST['pass1']);
$pass2 = ($_POST['pass2']);

$_SESSION["fname"] = $fname;
$_SESSION["mname"] = $mname;
$_SESSION["lname"] = $lname;
$_SESSION["idnumber"] = $idnumber;
$_SESSION["contact"] = $contact;
$_SESSION["bday"] = $bday;
$_SESSION["email"] = $email;
$_SESSION["address"] = $address;

$query = "SELECT staffid FROM teachers WHERE staffid = '$idnumber'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) === 1) {
            header("Location: addfaculty.php?error=ID Number already exists");
            exit();
        } else if ($pass1 != $pass2) {
            header("Location: addfaculty.php?error=Passwords do not match");
            exit();
        } else {
            $query = "INSERT INTO teachers(firstname,middlename,lastname,gender,staffid,contact,birthday,email,address,password,clearance)
                VALUES('$fname','$mname','$lname','$gender','$idnumber','$contact','$bday','$email','$address','$pass2','0')";
            $result = mysqli_query($conn, $query);
            $query = "";

            header("Location: adminindex.php");
            exit();
        }


?>