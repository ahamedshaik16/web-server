<html>
<body>
<head>
	<link href="../css/styles.css" rel="stylesheet">
	
</head>
<?php 
include ('db.php');
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$start_from = ($page-1) * 20; 
$sql = "SELECT * FROM students ORDER BY name ASC LIMIT $start_from, 10"; 
$rs_result = mysql_query ($sql); 
?> 
<table>
<tr><td>Name</td><td>Phone</td></tr>
<?php 
while ($row = mysql_fetch_assoc($rs_result)) { 
?> 
            <tr>
            <td><?php echo $row['Name']; ?></td>
            <td><?php echo $row['PhoneNumber']; ?></td>
            </tr>
<?php 
}; 
?> 
</table>
<div id = "numbersNav">
<?php 
$sql = "SELECT COUNT(Name) FROM students"; 
$rs_result = mysql_query($sql); 
$row = mysql_fetch_row($rs_result); 
$total_records = $row[0]; 
$total_pages = ceil($total_records / 10); 
  
for ($i=1; $i<=$total_pages; $i++) { 
            echo "<a href='check.php?page=".$i."'>".$i."</a> "; 
}; 
?>
</div>

</html>
</body>
