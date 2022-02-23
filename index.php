<?php 
include 'header.php';
?>
 <div id="main-content">
    <h2>All Records</h2>
    <?php
    $conn=mysqli_connect("localhost","root","","crud1") or die("connection failed");// data base  files conection in local xamp server
    $sql="SELECT * FROM student JOIN studentclass WHERE student.sclass = studentclass.cid";// query run in student data and studentclass data  classes jion
    $result=mysqli_query($conn, $sql) or die("query unsuccessful.");//conection between localserver  and mysqual
     if(mysqli_num_rows($result)>0){//condition sqli numer row pass in data base
     ?>

    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th> 
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
        <?php
        while($row=mysqli_fetch_assoc($result)){
        ?>
               <tr>
                <td><?php echo $row['sid']; ?></td>
                <td><?php echo $row['sname']; ?></td>
                <td><?php echo $row['saddress']; ?></td>
                <td><?php echo $row['cname']; ?></td>
                <td><?php echo $row['sphone']; ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['sid']; ?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row['sid']; ?>'>Delete</a>
                </td>
             </tr>
             <?php } ?>
            </tbody>
            </table>
        <?php } else{
        echo"<h2> no recornd found ";
    }
    mysqli_close($conn);
     ?>
</div>
</div>
</body>
</html>
   