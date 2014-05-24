<?php

mysql_connect("localhost", "root", "") or die('could not connect'.mysql_error());
mysql_select_db("supermarket") or die('could not select'.mysql_error());
$abc="update   product set price=".$_REQUEST["price"]." where code='".$_REQUEST["code"]."'" ;
$user=mysql_query($abc);

if($user)
echo 'Price updated';
else
echo 'error!';
?>
<a href="first.php">Back</a>
