<?php
        session_start();
        include "db_conn.php";



    if (isset($_SESSION['id'])) {

        $id = $_SESSION['id'];
        $sql="SELECT * FROM admin WHERE id = '$id'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);


        function clean ($data){

            $data = preg_replace('/\D/',"",$data);
            return $data;
        }
        
        $fname = ($row['Fname']);
        $mname = ($row['Mname']);
        $lname = ($row['Lname']);
        $_SESSION["gender"] = $row['gender'];
        
        if(($row['Gender'])===1){
            $gender = "Male";
        }else{
            $gender = "Female";
        }
        
        $idnumber = clean(($row['id']));
        $contact = ($row['Contact_Num']);
        $bday = ($row['Birthdate']);
        $email = ($row['email']);
        $address = ($row['Address']);
        
        $_SESSION["fname"] = $fname;
        $_SESSION["mname"] = $mname;
        $_SESSION["lname"] = $lname;
        $_SESSION["idnumber"] = $idnumber;
        $_SESSION["contact"] = $contact;
        $_SESSION["bday"] = $bday;
        $_SESSION["email"] = $email;
        $_SESSION["address"] = $address;
    }else{
        header("Location: functions/logout.php");
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eternity School | Profile</title>
    <link rel="shortcut icon" type="image/ico" href="graphics/favicon.png" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">

    <style>
        body {
            background-image: url('graphics/white.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>


</head>

<body class="sb-nav-fixed">
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v15.0" nonce="0UDLLmYV"></script>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand ps-3" href="#">
                <img src="graphics/favicon.png" width="23px" alt="Eternity School Logo">
                Eternity School
            </a>
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><span class="navbar-toggler-icon"></span></button>
            <button class="btn" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
                
            </button>
            
                
                
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php
                                if (isset($_SESSION['firstname'])) {
                                    echo $_SESSION['firstname'];
                                }
                                ?>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
                                <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                                <li><a class="dropdown-item" href="#">About</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="functions/logout.php">Log out</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
            
    </nav>

    <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="adminindex.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Faculty and Courses</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Faculty
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="addfaculty.php">Add Faculty</a>
                                <a class="nav-link" href="viewteachers.php">View/Edit Faculty</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Courses
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                    Assignment
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="landing.php">Teachers > Course</a>
                                        <a class="nav-link" href="landing.php">Students > Sections</a>
                                        <a class="nav-link" href="landing.php">Sections > Course</a>
                                    </nav>
                                </div>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                    Modification
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="landing.php">Add Course</a>
                                        <a class="nav-link" href="landing.php">Modify/Delete Course</a>
                                        <a class="nav-link" href="viewcourse.php">View Courses</a>
                                    </nav>
                                </div>
                            </nav>
                        </div>
                        <div class="sb-sidenav-menu-heading">Students</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseStudents" aria-expanded="false" aria-controls="collapseStudents">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Students
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseStudents" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="addstudent.php">Add Student</a>
                                <a class="nav-link" href="viewstudents.php">View/Edit Students</a>
                            </nav>
                        </div>
                        <a class="nav-link" href="landing.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Reports
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    <?php
                    if (isset($_SESSION['firstname'])) {
                        echo $_SESSION['firstname'] . " " . $_SESSION['lastname'];
                    }
                    ?>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Profile</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Please ensure all information entered below are correct.</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Information Form
                        </div>
                        <div class="card-body">
                            <form action="register.php" method="post">

                                <div class="row">
                                    <div class="col">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingfname" placeholder="First Name" name="fname" <?php if (isset($_SESSION['fname'])) {
                                                                                                                                                    echo "value='" . $_SESSION['fname'] . "'";
                                                                                                                                                } ?> required>
                                            <label for="floatingfname">First Name</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingmname" name="mname" placeholder="Middle Name" <?php if (isset($_SESSION['mname'])) {
                                                                                                                                                    echo "value='" . $_SESSION['mname'] . "'";
                                                                                                                                                } ?>>
                                            <label for="floatingmname">Middle Name (Optional)</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatinglname" name="lname" placeholder="Surname" <?php if (isset($_SESSION['lname'])) {
                                                                                                                                                echo "value='" . $_SESSION['lname'] . "'";
                                                                                                                                            } ?> required>
                                            <label for="floatinglname">Surname</label>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <select class="form-select" aria-label="Default select example" name="gender" <?php if (isset($_SESSION['gender'])) {
                                                                                                                            echo "value='" . $_SESSION['gender'] . "'";
                                                                                                                        } ?> required>
                                            <option selected value="1">Male</option>
                                            <option value="2">Female</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingidnumber" name="idnumber" placeholder="ID Number" <?php if (isset($_SESSION['idnumber'])) {
                                                                                                                                                        echo "value='" . $_SESSION['idnumber'] . "'";
                                                                                                                                                    } ?> required>
                                            <label for="floatinglname">ID Number (A-)</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingcontactnumber" name="contact" placeholder="Contact" <?php if (isset($_SESSION['contact'])) {
                                                                                                                                                        echo "value='" . $_SESSION['contact'] . "'";
                                                                                                                                                    } ?> required>
                                            <label for="floatinglname">Contact Number</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-floating">
                                            <input type="date" class="form-control" id="floatingbday" name="bday" placeholder="Birthday" <?php if (isset($_SESSION['bday'])) {
                                                                                                                                                echo "value='" . $_SESSION['bday'] . "'";
                                                                                                                                            } ?> required>
                                            <label for="floatingbday">Birthdate</label>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="floatingemailaddress" name="email" placeholder="Email Address" <?php if (isset($_SESSION['email'])) {
                                                                                                                                                            echo "value='" . $_SESSION['email'] . "'";
                                                                                                                                                        } ?> required>
                                            <label for="floatingemailaddress">Email Address</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingaddress" name="address" placeholder="Address" <?php if (isset($_SESSION['address'])) {
                                                                                                                                                    echo "value='" . $_SESSION['address'] . "'";
                                                                                                                                                } ?> required>
                                            <label for="floatingaddress">Address</label>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-floating">
                                            <input type="password" class="form-control" id="floatingpassword" name="pass1" placeholder="password" required>
                                            <label for="floatingpassword">Password</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-floating">
                                            <input type="password" class="form-control" id="floatingcpassword" name="pass2" placeholder="password" required>
                                            <label for="floatingcpassword">Confirm Password</label>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Malik Simbahan 2022</div>
                        <div>

                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>