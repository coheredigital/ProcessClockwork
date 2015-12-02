<?php 
header('Content-Type: application/json');

// include PW api
include '../index.php';

// get and sanitize id
$id = $this->input->get->text("id");

// prevent storing this request
$wire->clockwork->storeRequest = false;

// run cleanup, running here shpuld mean cleanup only runs when a dev is using clockwork
// simple way to minimize overhead with setting up crons, etc
$wire->clockwork->cleanup();

// retireve data if found
if ($data = $wire->clockwork->storage->retrieve($id)) {
	echo $data->toJson();
}