<?php
include_once"connection.php";
?>

<?php
$qry = mysqli_query($con,"SELECT * FROM `books` WHERE `id`=".$_REQUEST['id']);
$row = mysqli_fetch_array($qry);
// print_r($row);
?>
<?php
session_start();
    if (isset($_SESSION['cart'])){
        $a=array_column($_SESSION['cart'],'iten_name');
        if (in_array($row['bookname'],$a)) {
            echo"<script>
           alert('item already add');
           window.location.href='user-login-profile.php'</script>";
        }
        // then this else block are execute insert the items after the 0 index
      else
      {
          $count=count($_SESSION['cart']);
          $_SESSION['cart'][$count]=array('id'=>$row['id'],'iten_name'=>$row['bookname'],'price'=>$row['price'],'quantity'=>'1');
          //    print_r($_SESSION['cart']);
          echo"<script>
            alert('item add');
            window.location.href='user-login-profile.php'</script>";
      }
    }
    //  1st time execute when the page is load
      else
      {
        $_SESSION['cart'][0]=array('id'=>$row['id'],'iten_name'=>$row['bookname'],'price'=>$row['price'],'quantity'=>'1');
        // print_r($_SESSION['cart']);
        echo"<script>alert('item add');
        window.location.href='user-login-profile.php'</script>";
    }
    

?>