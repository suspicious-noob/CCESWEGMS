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

<body>
    <!-- navbar -->
    <nav class="navbar" style="height: 100px;">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="home.php">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">LOGIN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">ABOUT US</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">CONTACT</a>
            </li>
        </ul>
    </nav>
    <div class="container">
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
    </div>
</body>

</html>