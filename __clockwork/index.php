<?php 
header('Content-Type: application/json');
include '../index.php';
$id = $_GET['id'];

// prevent storing this request
$wire->clockwork->storeRequest = false;
if ($data = $wire->clockwork->storage->retrieve($id)) {
	echo $data->toJson();
}