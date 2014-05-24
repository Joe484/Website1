<?php
$code=$_REQUEST["code"];

mysql_connect("localhost", "root", "") or die('could not connect'.mysql_error());
mysql_select_db("supermarket") or die('could not select'.mysql_error());
$abc="insert into inventory(code,quantity) 
values(".$_REQUEST["code"].",'".$_REQUEST["quantity"]."')";
$user=mysql_query($abc);

?>
Updated Successfully <br>
<a href="first.php">Back</a>
