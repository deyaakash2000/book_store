<?php
session_start(); 
if (isset($_SESSION['id'])) {
  header('location:user-login-profile.php');
}
?>


<?php
include_once"connection.php";
?>

<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
    if (isset($_REQUEST['login'])) {
        $qry = mysqli_query($con,"SELECT `id` FROM `user` WHERE `email`='".$_REQUEST['email']."' AND `password`='".$_REQUEST['password']."'");
        $num = mysqli_num_rows($qry);
        if ($num === 1) {
            session_start();
            $row = mysqli_fetch_array($qry);
            $_SESSION['id']=$row['id'];
            header('location:user-login-profile.php');
        }else{
            echo"email password wrong";
        }
    }
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>
  <div class="text-center">
    <h1>Hello Customer Wish you a good day</h1>
  </div>
  <div class="container ">
    <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post" onsubmit="return valid()">
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
          placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
      </div>
      <button type="submit" name="login" class="btn btn-primary my-3">Login</button>
    </form>
  </div>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
</body>
<script>
  function valid(){
    var email = document.getElementById('email').value
    if (!email) {
      alert("please enter the email")
      return false
    }
    var password = document.getElementById('password').value
    if (!password) {
      alert("please enter the password")
      return false
    }
  }
</script>

</html>