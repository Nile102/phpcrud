<?php
include_once("Crud.php");
?>
<html>
<head>
	<title>Add Data</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
	
<body>

<a href="index.php" class="btn btn-primary">Home</a>
<a align="center" class='btn btn-primary' href='index.php'>View Result</a>
	<br/><br/>
	
	<form action="add.php" method="post" name="form1" >
		<table width="25%" border="0" align="center">
			<tr> 
				<td>Title</td>
				<td><input type="text" class="form-control" name="title"></td>
			</tr>
			<tr> 
				<td>Description</td>
				<td><input type="text" class="form-control" name="descrtiption"></td>
			</tr>
			<tr> 
				<td>Date</td>
				<td><input type="date" class="form-control" name="created_at"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" class="btn btn-secondary" name="Submit" value="Save"></td>
			</tr>
		</table>
	</form>

			
</body>
</html>


<?php
$crud = new Crud();

if(isset($_POST['Submit'])) {	
	$title = $crud->escape_string($_POST['title']);
	$descrtiption = $crud->escape_string($_POST['descrtiption']);
	$created_at = $crud->escape_string($_POST['created_at']);
		
	
		$result = $crud->update("INSERT INTO users(title,descrtiption,created_at) VALUES('$title','$descrtiption','$created_at')");
		
		echo "<div  class='alert alert-dark'>Data added successfully.";
		
		
	}
	
?>
