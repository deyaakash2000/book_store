<?php  
session_start();
if (!isset($_SESSION['id'])) {
  header('location:user-login.php');
}

?>
<?php 
include_once"connection.php";
?>


<?php
$qry = mysqli_query($con,"SELECT `name`,`email` FROM `user` WHERE `id`=".$_SESSION['id']);
$row = mysqli_fetch_array($qry);
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
 

  <?php
echo "Welcome : ". $row['name'];

?>

</button>
<a href="user-logout.php"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">logout</button></a>
<a href='cart.php' class='btn btn-primary'>cart</a>
<br>
<br>
<?php
print_r($_SESSION['cart']);
?>
<div class="my-5">
<?php
$qry = mysqli_query($con,"SELECT * FROM `books`");
$num  =mysqli_num_rows($qry);
if ($num>0) {
    while ($row = mysqli_fetch_array($qry)) {
    echo"  <div class='card' style='width: 18rem;'>";
    echo"  <img class='card-img-top' src=".$row['pic']." alt='Card image cap'>";
    echo"  <div class='card-body'>";
    echo"    <h5 class='card-title'>".$row['bookname']."</h5>";
    echo"    <p class='card-text'>Auther : ".$row['authername']."</p>";
    echo"    <p class='card-text'>Price : ".$row['price']."</p>";
    echo"    <a href='manage.php?id=$row[id]&bookname=$row[bookname]&price=$row[price]' class='btn btn-primary' name='add_item'>Add to cart</a>";
    echo"  </div>";
    echo"</div>";
    }
}
?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>