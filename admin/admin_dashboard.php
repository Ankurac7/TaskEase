<?php
    session_start();
    include('../includes/connection.php');
    if(isset($_POST['create_task'])){
        $query = "insert into tasks values(null,$_POST[id],'$_POST[description]','$_POST[start_date]','$_POST[end_date]','Not Started')";
        $query_run = mysqli_query($connection,$query);
        if($query_run){
            echo "<script type='text/javascript'>
            alert('Task Created Succesfully...');
            window.location.href = 'admin_dashboard.php';
            </script>
            ";
        }
        else{
            echo "<script type='text/javascript'>
            alert('Please try again.');
            window.location.href = 'admin_dashboard.php';
            </script>
            ";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard page</title>
    <!-- jQuery file -->
    <script src="..\includes\jquery_latest.js"></script>
    <!-- Bootstrap files -->
    <link rel="stylesheet" type="text/css" href="..\bootstrap\css\bootstrap.min.css">
    <script src="bootstrap\js\bootstrap.min.js"></script>
    <!-- External CSS files -->
    <link rel="stylesheet" type="text/css" href="..\css\styles.css">
    <!-- jQuery code -->
    <script type="text/javascript">
        $(document).ready(function(){
            $("#create_task").click(function(){
                $("#right_sidebar").load("create_task.php");
            });
        });

        $(document).ready(function(){
            $("#manage_task").click(function(){
                $("#right_sidebar").load("manage_task.php");
            });
        });

        $(document).ready(function(){
            $("#view_leave").click(function(){
                $("#right_sidebar").load("view_leave.php");
            });
        });
    </script>
</head>
<body>
    <!-- Header code starts here -->
    <div class="row" id="header">
        <div class="col-md-12">
            <div class="col-md-4" style="display: inline-block;">
                <h3>TaskEase</h3>
            </div>
            <div class="col-md-6" style="display: inline-block; text-align: right;">
                <b>Email: </b> <?php echo $_SESSION['email']; ?>
                <span style="margin-left: 25px;"><b>Name: </b><?php echo $_SESSION['name']; ?></span>
            </div>
        </div>
    </div>
    <!-- Header code ends here -->
    <div class="row">
        <div class="col-md-2" id="left_sidebar">
            <table class="table">
                <tr>
                    <td style="text-align: center;">
                        <a href="admin_dashboard.php" type="button" id="logout_link">Dashboard</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                        <a type="button" class="link" id="create_task">Create Task</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                        <a type="button" class="link" id="manage_task">Manage task</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                        <a type="button" class="link" id="view_leave">Leave applications</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                        <a href="../logout.php" type="button" id="logout_link">Logout</a>
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-md-10" id="right_sidebar">
            <h4>Instructions for Admin</h4>
            <ul style="line-height: 3em;font-size: 1.2em;list-style-type:none">
                <li>1. All the employees should mark their attendance daily.</li>
                <li>2. Everyone must complete their task assigned to them.</li>
                <li>3. Kindly maintain decorum of the office.</li>
                <li>4. Keep office and your area neat and clean.</li>
            </ul>

        </div>
    </div>
</body>
</html>