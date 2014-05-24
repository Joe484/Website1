<?php


mysql_connect("localhost", "root", "") or die('could not connect'.mysql_error());
mysql_select_db("supermarket") or die('could not select'.mysql_error());
$abc="select * from inventory natural join product";
$data=mysql_query($abc);
$i=0;
?>
<br>
<br>
<table align='center' border='2px'>
<th>Code</th>
<th>Name</th>
<th>quantity</th>
<th>price</th>
<?php
while($rs=mysql_fetch_array($data))
{

$i++;
?>

<tr> 
        
	<td><?php echo $rs["code"]; ?> </td>
	<td><?php echo $rs["name"]; ?> </td>
	<td><?php echo $rs["quantity"]; ?> </td>
    <td><?php echo $rs["price"]; ?> </td>

</tr>
<?php
}
?>
</table>
<br>
<a href="first.php">Back</a>
