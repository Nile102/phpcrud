<?php
include_once("crud.php");

$crud = new Crud();

$id = $crud->escape_string($_GET['id']);

$result = $crud->getData("SELECT * FROM users WHERE id=$id");

foreach ($result as $res) {
	$title = $res['title'];
	$descrtiption = $res['descrtiption'];
	$created_at = $res['created_at'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
	<h3 align="center">Edit To Do List</h3>
	<a href="index.php" class="btn btn-primary">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="update.php">
		<table border="0" align="center">
			<tr> 
				<td>Title</td>
				<td><input type="text" class="form-control" name="title" value="<?php echo $title;?>"></td>
			</tr>
			<tr> 
				<td>Description</td>
				<td><textarea type="text" class="form-control" name="descrtiption" value="<?php echo $descrtiption;?>"></textarea></td>
			</tr>
			<tr> 
				<td>Date</td>
				<td><input type="date" class="form-control" name="created_at" value="<?php echo $created_at;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" class="btn btn-primary" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
