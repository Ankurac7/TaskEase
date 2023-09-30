<?php
    session_start();
    if(isset($_SESSION['email'])){
    include('..\includes\connection.php');
?>
<html>
<body>
    <center><h3>All assigned tasks</h3></center><br>
    <table class="table" style="background-color: whitesmoke; width: 75vw;">
        <tr>
            <th>S.no</th>
            <th>Task ID</th>
            <th>Description</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <?php
            $sno = 1;
            $query = "select * from tasks";
            $query_run = mysqli_query($connection,$query);
            while($row = mysqli_fetch_assoc($query_run)){
                ?>
                <tr>
                    <td><?php echo $sno; ?></td>
                    <td><?php echo $row['tid']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td><?php echo $row['start_date']; ?></td>
                    <td><?php echo $row['end_date']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    <td><a href="edit_task.php?id=<?php echo $row['tid']; ?>">Edit</a> | <a href="delete_task.php?id=<?php echo $row['tid']; ?>">Delete</a></td>
                </tr>
                <?php
                $sno= $sno+ 1;
            }
        ?>
    </table>
</body>
</html>
<?php
}
else{
    header('Location:admin_login.php');
}