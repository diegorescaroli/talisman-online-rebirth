<?php session_start(); ?>
<h1>Talisman Online Rebirth</h1>
<?php if(isset($_SESSION['uid'])){ ?>
<a href="painel.php">Painel</a>
<?php } else { ?>
<a href="login.php">Login</a>
<a href="register.php">Registrar</a>
<?php } ?>
<br><br>
<a href="ranking.php">Ranking</a>
<a href="loja.php">Loja</a>
