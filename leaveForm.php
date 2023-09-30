<?php
    session_start();
    if(isset($_SESSION['email'])){
?>
<html>
<body>
    <h3>Apply leave</h3><br>
    <div class="row">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="form-group">
                    <label>Subject:</label>
                    <input type="text" class="form-control" name="subject" placeholder="Enter Subject">
                </div>
                <div class="form-group">
                    <label>Message:</label>
                    <textarea class="form-control" rows="5" cols="50" name="message" placeholder="Type Message"></textarea>
                </div>
                <input type="submit" class="btn btn-warning" name="submit_leave">
            </form>
        </div>
    </div>
</body>
</html>
<?php
}
else{
    header('Location:user_login.php');
}