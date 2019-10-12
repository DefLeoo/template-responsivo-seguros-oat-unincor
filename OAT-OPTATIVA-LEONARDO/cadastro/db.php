<?php
	$dsn = 'mysql:host=localhost;dbname=TrabalhoAlexandreOptativaLeonardo';
	$username = 'root';
	$password = 'senha';
	$options = [];
try {
	$connection = new PDO($dsn, $username, $password, $options);
} catch(PDOException $e) {

}