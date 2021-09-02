
<?php 
error_reporting(0);
include_once"connection.php";
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <div class="container">
          <div class="text-center bg-primary text-white">
          <h1>ITEM CART</h1>
          
</div>
    <table class='table'>
  <thead>
    <tr>
    <th scope="col">id</th>
      <th scope="col">Bookname</th>
      <th scope="col">price</th>
      <th scope="col">Rmove item</th>
    </tr>

    <?php
    session_start();
    foreach($_SESSION['cart'] as $key=>$value){
        $total = $total+$value['price'];
        // print_r($value);
       echo" <tr>";
       echo" <th scope='col'>".$value['id']."</th>";
       echo" <th scope='col'>".$value['iten_name']."</th>";
       echo" <th scope='col'>".$value['price']."</th>";
      
       echo"<th scope='col'>
         
           <a href='remove_manage.php?iten_name=$value[iten_name]'> <button name='remove' class='btn btn-dengar'>remove</button>
            
        
       </td>";

       echo"</tr>";
    }
    ?>
   
    </thead>
</table>
</div>
  
    <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">TOTAL</h1>
    <p class="lead">  <?php
    echo $total;
    ?></p>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>
<!-- 
<input type='hidden' name='iten_name' value='$value[iten_name]'>
<form action='remove_manage.php' method='post'>
<form> -->