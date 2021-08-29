


<?php 
$success = false;
$unsucess = false;
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    include_once"connection.php";
    $qry = mysqli_query($con, "SELECT `id` FROM `user` WHERE `email`='".$_REQUEST['email']."'");
    $num = mysqli_num_rows($qry);
    if ($num === 0) {
        $qry = "INSERT INTO `user` VALUES ('','".$_REQUEST['name']."','".$_REQUEST['email']."','".$_REQUEST['password']."','".$_REQUEST['contact']."')";
        $exe = mysqli_query($con, $qry);
        if ($exe) {
            // echo "success fully register";
            $success = true;
        // header('location:login.php');
        } else {
            echo "unable to register";
        }
    } else {
        $unsucess = true;
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
 <?
 
//  php require "nav.php" ;
 
 ?>
<?php
if ($success == true) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Data submited 
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
} 
 ?>

<?php
// if ($unsucess = true) {
//     echo '<div class="alert alert-dengar alert-dismissible fade show" role="alert">
//     <strong>unsuccess!</strong>Email Exist 
//     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//       <span aria-hidden="true">&times;</span>
//     </button>
//   </div>';
// } 
 ?>
    <div class="container my-5">
        <form action="<?php $_SERVER['REQUEST_URI']; ?>" method="post" onsubmit="return valid()">
            <div class="form-group col-md-6">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
            </div>

            <div class="form-group col-md-6">
                <label for="inputEmail4">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
            </div>

            <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
            </div>


            <div class="form-group col-md-6">
                <label for="inputEmail4">Contact</label>
                <input type="number" class="form-control" id="contact" name="contact" placeholder="Enter contact">
            </div>


            <button type="submit" class="btn btn-primary col-md-6">Sign in</button>
        </form>
        </div>
        <script>
            function valid(){
                var email = document.getElementById('email').value;
                if (!email) {
                    alert("enter email")
                    return false
                }
                var name=document.getElementById('name').value;
                if (!name) {
                    alert("Please enter your name")
                    return false
                }

                var password = document.getElementById('password').value
                if(!password){
                    alert("enter the password");
                    return false
                }
                var con= document.getElementById('contact').value
                if(!con){
                    alert("enter the contact number");
                    return false
                }
            }
        </script>
  


<?php 
if (isset($_REQUEST['message'])) {
    echo "Email Exist";
}

?>















    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>