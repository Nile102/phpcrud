<?php

include_once("crud.php");

$crud = new Crud();

$id = $crud->escape_string($_GET['id']);

$result = $crud->delete($id, 'users');

if ($result) {

	header("Location:index.php");
}
?>

