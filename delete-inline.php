<?php
 $stu_id=$_GET['id'];
    include 'config.php';
    $sql="DELETE FROM student WHERE  sid = {$stu_id}";
    $result=mysqli_query($conn, $sql) or die("query unsuccessful.");
       header("Location:http://localhost/crud1/index.php");
    mysqli_close($conn);
?>