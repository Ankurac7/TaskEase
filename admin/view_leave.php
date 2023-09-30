<html>
<body>
    <center><h3>All leave applications</h3></center><br>
    <table class="table" style="background-color: whitesmoke;width:75vw;">
        <tr>
            <th>S.No</th>
            <th>User</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Status</th>
            <th>Action</th>
            <?php
                $query="select * from leaves";
                while($row= mysqli_fetch_assoc($connection,$query))
            ?>
        </tr>
    </table>
</body>
</html>