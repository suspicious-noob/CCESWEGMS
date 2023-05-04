<?php
session_start();
include "../db_conn.php";

if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $firstname = $_SESSION['firstname'];
    $lastname = $_SESSION['lastname'];
    $clearance = $_SESSION['clearance'];
} else {
    header("Location: ../functions/logout.php");
}

// $query = "SELECT * FROM students";
// $result = mysqli_query($conn, $query);
// $numstudents = mysqli_num_rows($result);

// $query = "SELECT * FROM teachers";
// $result = mysqli_query($conn, $query);
// $numteachers = mysqli_num_rows($result);

// $query = "SELECT * FROM course";
// $result = mysqli_query($conn, $query);
// $numcourse = mysqli_num_rows($result);

// $query = "SELECT * FROM section";
// $result = mysqli_query($conn, $query);
// $numsection = mysqli_num_rows($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eternity School | Administrator</title>
    <link rel="shortcut icon" type="image/ico" href="../graphics/logo.png" />

    <link rel="stylesheet" href="css/demo.css" />

<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">




    <style>
        body {
            background-image: url('../graphics/white.jpg');
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
            <img src="../graphics/logo.png" height="40px" width=40px" alt="">
            Calapan Chu Eng
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
                        <a class="dropdown-item" href="../functions/logout.php">Log out</a>
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
                        <a class="nav-link" href="landing.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Grades</div>
                        <a class="nav-link" href="landing.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Reports
                        </a>
                        <div class="sb-sidenav-menu-heading">Edit</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseStudents" aria-expanded="false" aria-controls="collapseStudents">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Profile
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseStudents" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="addstudent.php">Profile Picture</a>
                                <a class="nav-link" href="viewstudents.php">Personal Details</a>
                            </nav>
                        </div>

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
                <header class="ScriptHeader">
                    <div class="rt-container">
                        <div class="col-rt-12">
                            <div class="rt-heading">
                                <h1>Hello, Malik!</h1>
                                <p>Quick Profile View</p>
                            </div>
                        </div>
                    </div>
                </header>

                <section>
                    <div class="rt-container">
                        <div class="col-rt-12">
                            <div class="Scriptcontent">

                                <!-- Student Profile -->
                                <div class="student-profile py-4">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="card shadow-sm">
                                                    <div class="card-header bg-transparent text-center">
                                                        <img class="profile_img" src="../graphics/2x2.jpg" alt="student dp">
                                                        <h3>Malik Simbahan</h3>
                                                    </div>
                                                    <div class="card-body">
                                                        <p class="mb-0"><strong class="pr-1">Student ID:</strong>1802110</p>
                                                        <p class="mb-0"><strong class="pr-1">Grade:</strong> 4</p>
                                                        <p class="mb-0"><strong class="pr-1">Section:</strong> Sampaguita</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="card shadow-sm">
                                                    <div class="card-header bg-transparent border-0">
                                                        <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
                                                    </div>
                                                    <div class="card-body pt-0">
                                                        <table class="table table-bordered">
                                                            <tr>
                                                                <th width="30%">Roll</th>
                                                                <td width="2%">:</td>
                                                                <td>125</td>
                                                            </tr>
                                                            <tr>
                                                                <th width="30%">Academic Year </th>
                                                                <td width="2%">:</td>
                                                                <td>2022 - 2023</td>
                                                            </tr>
                                                            <tr>
                                                                <th width="30%">Gender</th>
                                                                <td width="2%">:</td>
                                                                <td>Male</td>
                                                            </tr>
                                                            <tr>
                                                                <th width="30%">Religion</th>
                                                                <td width="2%">:</td>
                                                                <td>Roman Catholic</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div style="height: 26px"></div>
                                                <div class="card shadow-sm">
                                                    <div class="card-header bg-transparent border-0">
                                                        <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Other Information</h3>
                                                    </div>
                                                    <div class="card-body pt-0">
                                                        <p>Any information to be completed by the student/guardian/parent</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- partial -->

                            </div>
                        </div>
                    </div>
                </section>
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
    <script src="scripts.js"></script>
    <script src="chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>