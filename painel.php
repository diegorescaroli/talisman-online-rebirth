<?php
session_start();
include "db.php";
if(!isset($_SESSION['uid'])) die("Login necessário");
$id=$_SESSION['uid'];
$user=$conn->query("SELECT * FROM users WHERE id=$id")->fetch_assoc();
?>
<h2>Painel</h2>
Coins: <?php echo $user['coins']; ?>
<br>
<a href="loja.php">Loja</a>
<a href="ranking.php">Ranking</a>
