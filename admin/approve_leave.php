<?php
    include('..\includes\connection.php');
    $query ="update leaves set status = 'Approved' where lid = $_GET[id]";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
        echo "<script type='text/javascript'>
        alert('Leave status updated succesfully...');
        window.location.href = 'admin_dashboard.php';
        </script>
        ";
    }
    else{
        echo "<script type='text/javascript'>
        alert('Error...Please try again.');
        window.location.href = 'admin_dashboard.php';
        </script>
        ";
    }
?>