<?php
require 'cadastro/db.php';
$id = $_GET['id'];
$sql = 'DELETE FROM cotacao WHERE id=:id';
$statement = $connection->prepare($sql);
if ($statement->execute([':id' => $id])) {
  header("Location: exibir.php");
}