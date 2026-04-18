<?php
session_start();
include "db.php";
if(!isset($_SESSION['uid'])) die("Login necessário");
$res=$conn->query("SELECT * FROM shop_items");
while($i=$res->fetch_assoc()){
echo $i['name']." - ".$i['price']." coins <a href='buy.php?id=".$i['id']."'>Comprar</a><br>";
}
