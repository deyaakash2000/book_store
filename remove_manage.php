<?php
session_start();
//if ($_SERVER["REQUEST_METHOD"]=="POST") {
    // if (isset($_REQUEST['remove'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value['iten_name'] == $_REQUEST['iten_name']) {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                // print_r($value);die();
                echo"<script>
                alert('item removed');
                window.location.href='cart.php';
                </script>";
            }
        }
        //  }
    // }

?>
