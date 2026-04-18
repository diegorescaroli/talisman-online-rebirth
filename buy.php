<?php
session_start();
include "db.php";
$conn->query("INSERT INTO purchases (user_id,item_id) VALUES (".$_SESSION['uid'].",".$_GET['id'].")");
echo "Comprado!";
