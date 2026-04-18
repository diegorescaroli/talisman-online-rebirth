<?php
session_start();
include "db.php";
if($_POST){
$stmt=$conn->prepare("SELECT * FROM users WHERE username=?");
$stmt->bind_param("s",$_POST['user']);
$stmt->execute();
$res=$stmt->get_result()->fetch_assoc();
if($res && password_verify($_POST['pass'],$res['password'])){
$_SESSION['uid']=$res['id'];
header("Location:painel.php");
}
}
?>
<form method="POST">
<input name="user">
<input name="pass" type="password">
<button>Login</button>
</form>
