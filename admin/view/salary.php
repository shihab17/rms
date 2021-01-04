<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include('../view/header.php'); ?>
<center><h1>Salary information</h1></center>

    <table>
    <tr>
	<th>#</th>
	<th>Grade</th>
	<th>Hisal</th>
	<th>Lowsal</th>
</tr>
<?php
include('../data/dbConnection.php');
$i=0;
$stmt = $db-> prepare("SELECT * FROM tbl_salary");
$stmt->execute(array());
$result = $stmt-> fetchAll (PDO::FETCH_ASSOC);
	foreach($result as $row)
	{
	$i++;
	
?>
<tr>
<td><?php echo $i;?></td>
<td><?php echo $row['grade'];?></td>
<td><?php echo $row['hisal'];?></td>
<td><?php echo $row['losal'];?></td>

<?php
	}
?>
</tr>
    </table>
</body>
</html>