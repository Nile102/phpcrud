<?php
include_once("crud.php");

$crud = new Crud();

$query = "SELECT * FROM users ORDER BY id DESC";
$result = $crud->getData($query);
?>

<html>
<head>	
	<title>Home</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
	<h3 align="center">To Do List</h3>
	
<a href="add.php" class="btn btn-primary">Add New Data</a><br/><br/>

	<table width='80%' align="center" border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Title</td>
		<td>Descrtiption</td>
		<td>Date</td>
		<td>Action</td>
	</tr>
	<?php 
	foreach ($result as $key => $res) {
	
		echo "<tr>";
		echo "<td>".$res['title']."</td>";
		echo "<td>".$res['descrtiption']."</td>";
		echo "<td>".$res['created_at']."</td>";	
		echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
</body>
</html>
