<?php 
header('Content-Type: application/json');
include '../index.php';
$id = $_GET['id'];
if ($data = $wire->clockwork->storage->retrieve($id)) {
	echo $data->toJson();
}