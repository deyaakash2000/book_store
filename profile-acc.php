<?php 
include_once"connection.php";
?>
 <?php
        $name = $_FILES['pic'];
        $filename = $_FILES['pic']['name'];
        $temp = $_FILES['pic']['tmp_name'];
        $filesize = $_FILES['pic']['size'];
        if (!$filename) {
            echo "plece select the img";
        } else {
            $path = "upload/".$filename;
            $exe = pathinfo($filename, PATHINFO_EXTENSION);
            if ($exe === 'JPG' || $exe === 'jpg' || $exe === 'JPEG' || $exe === 'jpeg' || $exe === 'png' || $exe === 'PNG') {
                if ($filesize < 500000) {
                    move_uploaded_file($temp, $path);
                } else {
                    echo "File is too large";
                }
            } else {
                echo "Pleace select jpg png jpeg file format";
            }
        }
        ?>
<?php
session_start();
$adminid = $_SESSION['id'];
?>
<?php
// print_r($adminid);
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    if (isset($_REQUEST['add'])) {
       
        $qry = "INSERT INTO `books` VALUES ('','$adminid','".$_REQUEST['name']."','".$_REQUEST['aname']."','".$_REQUEST['price']."','$path')";
        $exe = mysqli_query($con, $qry);
        if ($exe) {
            // echo "add books success";
            header('location:profile.php');
        } else {
            echo "unable to success";
        }
    } else {
        echo "some this is missing";
    }
}
?>