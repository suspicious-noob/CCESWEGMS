<?php
session_start();

if(isset($_SESSION['id'])){
    echo <<<GFG

<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loging Out</title>
    <link rel="shortcut icon" type="image/ico" href="graphics/favicon.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
        <div class="card text-center" style="width: 200px;">
            <div class="card-header">
            Loging you out..
            </div>
            <div class="card-body">
                <div class="text-center">
                    <div class="spinner-border" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var timer = setTimeout(function() {
            window.location='../index.php'
        }, 2000);
    </script>

    
</body>

</html>

GFG;
}else{
    echo <<<GFG

<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loging Out</title>
    <link rel="shortcut icon" type="image/ico" href="graphics/favicon.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
        <div class="card text-center" style="width: 200px;">
            <div class="card-header">
                
                No shortcuts! Redirecting..
            </div>
            <div class="card-body">
                <div class="text-center">
                    <div class="spinner-border" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var timer = setTimeout(function() {
            window.location='../index.php'
        }, 2000);
    </script>

    
</body>

</html>

GFG;
}

session_unset();

session_destroy();

?>
