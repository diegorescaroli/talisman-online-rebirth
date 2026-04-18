<?php
include "db.php";
if($_POST){
$pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
$stmt=$conn->prepare("INSERT INTO users (username,password) VALUES (?,?)");
$stmt->bind_param("ss",$_POST['user'],$pass);
$stmt->execute();
echo "Conta criada!";
}
?>
<form method="POST">
<input name="user" placeholder="User">
<input name="pass" type="password">
<button>Registrar</button>
</form>
