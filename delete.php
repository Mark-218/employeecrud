<?php
 include 'dbcon.php';

    $id =$_GET['id'];

    $deletequery = "delete from users where id=$id ";

    $query = mysqli_query($con, $deletequery   );

    header('location:show.php');

?>
