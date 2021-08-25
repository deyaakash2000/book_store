<?php 
include_once"connection.php";
?>

<?php
$qry = mysqli_query($con,"SELECT `id` FROM `register` WHERE `email`='".$_REQUEST['email']."' AND `password`='".$_REQUEST['password']."'");
$num = mysqli_num_rows($qry);

if ($num === 1) {
    session_start();
    $row = mysqli_fetch_array($qry);
    $_SESSION['id'] = $row['id'];
    header('location:profile.php');
}else{
    header('location:login.php?mess=email or password wrong');
}

?>