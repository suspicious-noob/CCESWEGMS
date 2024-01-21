<?php
$value = "t";
    switch ($value) {
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
echo $user;

$favcolor = "blue";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
?>