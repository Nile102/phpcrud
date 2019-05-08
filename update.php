<?php

include_once("crud.php");

$crud = new Crud();

if(isset($_POST['update']))
{	
	$id = $crud->escape_string($_POST['id']);
	
	$title = $crud->escape_string($_POST['title']);
	$descrtiption = $crud->escape_string($_POST['descrtiption']);
	$created_at = $crud->escape_string($_POST['created_at']);
		
	
	
		//updating the table
		$result = $crud->update("UPDATE users SET title='$title',descrtiption='$descrtiption',created_at='$created_at' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	
}
?>
