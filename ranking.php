<?php
include "db.php";
$res=$connGame->query("SELECT name,level FROM characters ORDER BY level DESC LIMIT 10");
while($r=$res->fetch_assoc()){
echo $r['name']." - ".$r['level']."<br>";
}
