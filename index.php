<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskEase</title>
    <!-- jQuery file -->
    <script src="includes\jquery_latest.js"></script>
    <!-- Bootstrap files -->
    <link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.min.css">
    <script src="bootstrap\js\bootstrap.min.js"></script>
    <!-- External CSS files -->
    <link rel="stylesheet" type="text/css" href="css\styles.css">
</head>
<body>
    <div class="row">
        <div class="container text-center">
            <img src="assets\logo.png" class="rounded-image">
        </div>
        <div class="col-md-4 m-auto" id="home_page">
            <center><h3>Choose login role: </h3></center><br>
            <a href="user_login.php" class="btn btn-success" style="margin-right: 20px;">User Login</a>
            <a href="register.php" class="btn btn-warning" style="margin-right: 20px;">User Registration</a>
            <a href="admin\admin_login.php" class="btn btn-info">Admin Login</a>
        </div>
    </div>
</body>
</html>