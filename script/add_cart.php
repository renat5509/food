<?php
session_start();

$product_id = (int)$_GET['id'];

if(isset($_SESSION['order'])){
    $order = $_SESSION['order'];
    array_push($order, $product_id);
}
else{
    $order = [$product_id];
}
$_SESSION['order'] = $order;


header("Location: ../cart.php");
?>