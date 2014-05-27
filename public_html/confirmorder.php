<html>
<title>
Order confirmed
</title>
<body>
<?php

echo "Order is confirmed at".date('H:i, jS F Y');
echo "\n";
$tireqty =$_POST['tireqty'];
$found =$_POST['found'];
echo "the no of tires ordered is ".$tireqty;
echo "\r\n";
echo "you found us through method ".$found;
?>
</body>

</html>
