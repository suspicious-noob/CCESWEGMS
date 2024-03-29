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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calapan Chu Eng School | Administrator</title>
    <link rel="icon" type="image/x-icon" href="../graphics/logo.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

    <style>
        body {
            background-image: url('../graphics/white.jpg');
            background-size: cover;
            background-repeat: repeat;
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
                    <h1 class="mt-4">Teacher List</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Master list</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Please make sure that the data is current and up to date.
                        </div>
                        <div class="card-body">
                            <?php
                            $result = mysqli_query($conn, "SELECT * FROM teachers");
                            echo "<table class=" . "table table-dark" . ">";
                            echo "<thead>";
                            echo "<tr>";
                            echo "<th scope=" . "col" . ">Teacher ID</th>";
                            echo "<th scope=" . "col" . ">Full Name</th>";
                            echo "<th scope=" . "col" . ">Status</th>";
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while ($row = mysqli_fetch_array($result)) {

                                echo "<tr><td>" . $row['Teacher_ID'] . "</td><td>" . $row['Teacher_Name'] . "</td><td>" . $row['Status'] . "</td></tr>";
                            }
                            echo "</tbody></table>";
                            ?>
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
    <script src="scripts.js"></script>
    <script src="chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>