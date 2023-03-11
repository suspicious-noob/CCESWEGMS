<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/ico" href="logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Login Page</title>

    <style>
        body {
            background-image: url('bg.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>

    <form action="functions/login.php" method="post">
        <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
            <div class="card" style="width: 23rem; background-color: rgba(245, 245, 245, 0.9)">
                <img src="logo.png" alt="chu eng logo nice one">
                <div class="card-body" style="align-items: center;">
                    <h5 class="card-title text-center">Login</h5>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="username" placeholder="12-3456"
                            required>
                        <label for="floatingInput">ID Number</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" name="password"
                            placeholder="Password" required>
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div style="text-align: center;">
                        <?php if (isset($_GET['error'])) { ?>
                        <p class="error" style="color: red;">
                            <?php
                                echo $_GET['error'];
                                ?>
                        </p>
                        <?php } ?>
                        <?php if (isset($_GET['nice'])) { ?>
                        <p class="nice" style="color: green">
                            <?php
                                echo $_GET['nice'];
                                ?>
                        </p>
                        <?php } ?>
                    </div>

                    <div class="d-flex justify-content-end">
                        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank">Forgot Password?</a>
                    </div>
                    <br>
                    <div class="container text-center">
                        <div class="row row-cols-2">
                            <div class="col d-grid">
                                <a class="btn btn-secondary" href="index.php">Go Back</a>
                            </div>
                            <div class="col d-grid">
                                <button class="btn btn-success" type="submit">Login</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>