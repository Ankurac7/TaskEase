<?php
    session_start();
    if(isset($_SESSION['email'])){
    include('includes\connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery file -->
    <script src="includes\jquery_latest.js"></script>
    <!-- Bootstrap files -->
    <link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.min.css">
    <script src="bootstrap\js\bootstrap.min.js"></script>
    <!-- External CSS files -->
    <link rel="stylesheet" type="text/css" href="css\styles.css">
</head>
<body>
    <center><h3>Your tasks</h3></center><br>
    <table class="table" style="background-color: whitesmoke;width:75vw;">
        <tr>
            <th>S.No</th>
            <th>Task ID</th>
            <th>Description</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <?php
            $query="select * from tasks where uid= $_SESSION[uid]";
            $query_run= mysqli_query($connection,$query);
            $sno=1;
            while($row =mysqli_fetch_assoc($query_run)){
                ?>
                <tr>
                    <td><?php echo $sno; ?></td>
                    <td><?php echo $row['tid']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td><?php echo $row['start_date']; ?></td>
                    <td><?php echo $row['end_date']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    <td><a href="update_status.php?id=<?php echo $row['tid'];?>">Update</a></td>
                </tr>
                <?php
                $sno=$sno+1;
            }
        ?>
    </table>
</body>
</html>
<?php
}
else{
    header('Location:user_login.php');
}