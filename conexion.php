<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'cuestionario';

$mysqli = new mysqli($host, $user, $pass, $db);
if ($mysqli->connect_errno) {
  echo "Fallo al conectar a MySQL: " . $mysqli->connect_error;
}

?>