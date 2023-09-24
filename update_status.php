<?php
    session_start();

    $email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
    $name = isset($_SESSION['name']) ? $_SESSION['name'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Status</title>
</head>
<body>
    <h3>Update</h3>
    <div class="row" id="header">
        <div class="col-md-12">
            <div class="col-md-4" style="display: inline-block;">
                <h3>TaskEase</h3>
            </div>
            <div class="col-md-6" style="display: inline-block; text-align: right;">
                <b>Email: </b> <?php echo $email; ?>
                <span style="margin-left: 25px;"><b>Name: </b><?php echo $name; ?></span>
            </div>
        </div>
    </div>

</body>
</html>