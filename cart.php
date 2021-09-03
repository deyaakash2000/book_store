<?php
error_reporting(0);
include_once"connection.php";
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

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
          <th scope="col">quantity</th>
          <th scope="col">Total</th>
          <th scope="col">Rmove item</th>
        </tr>

        <?php
    session_start();
    foreach ($_SESSION['cart'] as $key=>$value) {
          //  $total = $total+$value['price'];
          // echo($total);
        // print_r($value);
        echo" <tr>";
        echo" <td scope='col'>".$value['id']."</td>";
        echo" <td scope='col'>".$value['iten_name']."</td>";
        echo" <td scope='col'>".$value['price']."<input type='hidden' name='price' class='price' value='$value[price]'></td>";
        echo" <td scope='col'><input type='number' name='quantity' class=' text-center quantity' onchange='q()' value='$value[quantity]' min='1' max='10'></td>";
        echo" <td scope='col' class='total'></td>";
        echo"<td scope='col'>
         
           <a href='remove_manage.php?iten_name=$value[iten_name]'> <button name='remove' class='btn btn-danger'>remove</button>
            
        
       </td>";

        echo"</tr>";
    }
    ?>

      </thead>
    </table>
  </div>

  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4"> GAND TOTAL</h1>
      <p class="lead" id="gtotal"> 
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
    crossorigin="anonymous"></script>
</body>
<script>
  var gt = 0;
  var price = document.getElementsByClassName('price')
  var quantity = document.getElementsByClassName('quantity')
  var total = document.getElementsByClassName('total')
  var gtotal = document.getElementById('gtotal')
  function q() {
    gt = 0
    for (let i = 0; i < price.length; i++) {
      total[i].innerText= (price[i].value) * (quantity[i].value); 
      gt = gt + (price[i].value) * (quantity[i].value) 
      // */ 100 q 2 = 0+100*2 == 200
      //   200 q 1 = 200+200*1 === 400
      // */
    }
     gtotal.innerText = gt
  }
  q();
</script>

</html>