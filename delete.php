<?php

include_once"connection.php";
?>


<?php
$qry = mysqli_query($con,"DELETE FROM `books` WHERE `id`=".$_REQUEST['id']);
// print_r($qry);
if ($qry) {
    header('location:profile.php');
}

?>