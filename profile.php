<?php
include_once"connection.php";
?>

<?php
session_start();
if (!isset($_SESSION['id'])) {
   header('location:login.php');
}

?>

<?php
// session_start();
$qry = mysqli_query($con, "SELECT `id`,`name` FROM `register` WHERE `id`=".$_SESSION['id']);
$row= mysqli_fetch_array($qry);
// print_r($row);
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
  <?php
    // echo "Welcome : ";
    // echo"<br>";
    // echo "Name : ". $row['name'];
    ?>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand text-white bg-dark">
      <?php
    echo "Welcome : ";
    
    echo "Admin : ". $row['name'];
    // echo "Admin id : ". $row['id'];
    ?>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
     
      aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a href="logout.php"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">logout</button></a>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
      </ul>
    </div>
  </nav>
  <br><br><br>
  <div class="class">
    <div class="container my-5">
      <div class="text-center">
        <h4>ADD BOOKS</h4>
      </div>
  <form action="profile-acc.php" method="post" onsubmit="return valid()" enctype="multipart/form-data">
      <div class="my-4">
        <label for="formGroupExampleInput" class="form-label">Book Name</label>
        <input type="text" class="form-control" name="name" id="Book Name" placeholder="Example input placeholder">
      </div>
      
   
      <div class="my-4">
        <label for="formGroupExampleInput2" class="form-label">Auther name</label>
        <input type="text" class="form-control" name="aname" id="Auther" placeholder="Another input placeholder">
      </div>


      <div class="my-4">
        <label for="formGroupExampleInput2" class="form-label">Price</label>
        <input type="number" class="form-control" name="price" id="Price" placeholder="Another input placeholder">
      </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Example file input</label>
    <input type="file" name="pic" class="form-control-file" id="pic">
  </div>

      <button type="submit" name="add" class="btn btn-primary">Add Books</button>
    </div>
  </div>
  </form>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

    <script>
      function valid(){
      var name = document.getElementById('Book Name').value;
      // console.log(name)
     if (!name) {
       alert("enter the book name");
       return false;
     }

     var Aname = document.getElementById('Auther').value;
      // console.log(name)
     if (!Aname) {
       alert("enter the Auther  name");
       return false;
     }
     var pri = document.getElementById('Price').value;
      // console.log(name)
     if (!pri) {
       alert("enter the  price  amount");
       return false 
    }
    var pic = document.getElementById('pic').value;
      // console.log(name)
     if (!pic) {
       alert("please set imeage");
       return false 
    }
  }
    </script>

<div class="table-responsive-sm">

<table class="table">
<thead>
  <tr>
    <th scope="col-sm-2">Book_id</th>
    <th scope="col">Admin_id</th>
    <th scope="col">Book Name</th>
    <th scope="col">Auther Name</th>
    <th scope="col">Price</th>
    <th scope="col">pic</th>
    <th scope="col">Delete</th>
  </tr>
</thead>

<?php
$qry = mysqli_query($con,"SELECT * FROM `books`");
while($row = mysqli_fetch_array($qry)){
  // print_r($row);die();
  echo "<tr>";
  echo "<td>".$row['id']."</td>";
  echo "<td>".$row['adminid']."</td>";
  echo "<td >".$row['bookname']."</td>";
  echo "<td >".$row['authername']."</td>";
  echo "<td >".$row['price']."</td>";
  echo "<td><img src='$row[pic]' width=200px height=200px></td>";
  echo "<td><a href='delete.php?id=$row[id]'><button class='btn btn-outline-danger'>Delete</button></a></td>";
  echo "</tr>";
}
?>
</div>
</body>

</html>