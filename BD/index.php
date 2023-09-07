<?php

header('Access-Control-Allow-Origin: *');

include_once 'apiartistas.php';

$api = new ApiArtistas();

$api->getAll();

?>