<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
$data = [];
$data['email'] = $_POST['email'];
$data['password'] = $_POST['password'];
$data['alternate'] = $_POST['alternate'];

echo json_encode($data);


?>
