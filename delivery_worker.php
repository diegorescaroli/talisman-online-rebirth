<?php
include "db.php";
while(true){
$res=$conn->query("SELECT * FROM purchases WHERE delivered=0");
while($o=$res->fetch_assoc()){
$char=$connGame->query("SELECT id FROM characters WHERE account_id=".$o['user_id']." LIMIT 1")->fetch_assoc();
if($char){
$connGame->query("INSERT INTO mailbox (receiver_id,item_id,quantity) VALUES (".$char['id'].",".$o['item_id'].",1)");
$conn->query("UPDATE purchases SET delivered=1 WHERE id=".$o['id']);
}
}
sleep(5);
}
