<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calapan Chu Eng | Enrollment</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/registration.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
//asdffff
<body>
    <!-- navbar -->
    <nav class="navbar" style="height: 50px;">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">LOGIN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="checkenrollee.php">ENROLLMENT CHECKER</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">CONTACT</a>
            </li>
        </ul>
    </nav>

    <div class="modal-dialog modal-dialog-centered modal-lg">
        <form action="functions/register.php" method="post">
            <div class="modal-content">
                <div class="modal-header">
                </div>
                <div class="modal-body">
                    <div class="container">
                        <br>
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Registration</h1>
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
                                <div class="form-floating">
                                    <select class="form-select" aria-label="Default select example" name="gender" <?php if (isset($_SESSION['gender'])) {
                                                                                                                        echo "value='" . $_SESSION['gender'] . "'";
                                                                                                                    } ?> required>
                                        <option selected value="1">Male</option>
                                        <option value="2">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating">
                                    <select class="form-select" aria-label="Default select example" name="gender" <?php if (isset($_SESSION['gender'])) {
                                                                                                                        echo "value='" . $_SESSION['gender'] . "'";
                                                                                                                    } ?> required>
                                        <option selected value="1">Grade 1</option>
                                        <option value="2">Grade 2</option>
                                        <option value="3">Grade 3</option>
                                        <option value="4">Grade 4</option>
                                        <option value="5">Grade 5</option>
                                        <option value="6">Grade 6</option>
                                    </select>
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
                                    <input type="password" class="form-control" id="floatingpassword" name="pass1" placeholder="password" disabled required>
                                    <label for="floatingpassword">Password (Auto)</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="floatingcpassword" name="pass2" placeholder="password" disabled required>
                                    <label for="floatingcpassword">Confirm Password (Auto)</label>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Register</button>
                            <br>
                        </div>
                        <br>
                    </div>
                    <br>
                </div>
            </div>
        </form>
    </div>
    <!-- <div class="container">
        <div class="title">
            <h1 class="line">Student Registration</h1>
            <p>Thank you for applying to out institution. Please fill in the form below to complete the registration process for admission</p>
        </div>
        <div class="form g-3">
            <div class="row">
                <div class="col">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="" class="form-control" id="firstName" placeholder="Enter your First Name">
                </div>
                <div class="col">
                    <label for="firstName" class="form-label">Middle Name</label>
                    <input type="" class="form-control" id="firstName" placeholder="Enter your Middle Name">
                </div>
                <div class="col">
                    <label for="firstName" class="form-label">Last Name</label>
                    <input type="" class="form-control" id="firstName" placeholder="Enter your Last Name">
                </div>
            </div>


            <div class="row">
                <div class="col">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" name="" id="address">
                </div>
                <div class="col">
                    <label for="nationality" class="form-label">Nationality</label>
                    <input type="text" class="form-control" id="nationality">
                </div>
            </div>



            <div class="row">
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="gender">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Female
                        </label>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col">
                    <label for="date">Birthdate</label>
                    <input type="text" class="form-control" name="" id="date">
                </div>
                <div class="col">
                    <label for="phone">Phone Number</label>
                    <input type="text" class="form-control" name="" id="phone">
                </div>
                <div class="col">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="col">
                    <label for="grade">Grade Level</label>
                    <select class="form-select" id="grade" aria-label="Select Grade Level">
                        <option selected>Open this select menu</option>
                        <option value="1">Grade One</option>
                        <option value="2">Grade Two</option>
                        <option value="3">Grade Four</option>
                        <option value="3">Grade Five</option>
                        <option value="3">Grade Six</option>
                    </select>
                </div>
            </div>
        </div>
    </div> -->
</body>

</html>