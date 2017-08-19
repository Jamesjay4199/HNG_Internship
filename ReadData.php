<?php
#create a connection
mysql_connect('localhost', 'root', '');

#connect to a database
mysql_select_db('learnsql');
$sql ="SELECT * FROM userinfo";

$data = mysql_query($sql);
?>
<html>
<head>
<title>Data from database</title>
</head>
<body>
<table width = "500px" border ="1px" cellspacing = "1px" cellpadding = "1px">
<tr>
<th>ID</th>
<th>UserName</th>
<th>Password</th>
</tr>

<?php 
while($record = mysql_fetch_assoc($data)){
	echo "<tr>";
	
	echo "<td>".$record['ID']."</td>";
	echo "<td>".$record['UserName']."</td>";
	echo "<td>".$record['UserPass']."</td>";
	
	echo "</tr>";
}


?>

</table>
</body>
</html>