<?php

       ini_set(“display_errors”,1);
       ini_set(“display_startup_erros”,1);
        error_reporting(E_ALL);
?>


<?php
    require 'cadastro/db.php';
    $sql = 'SELECT * FROM cotacao';
    $statement = $connection->prepare($sql);
    $statement->execute();
    $people = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Trabalho - Optativa - Leonardo</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/tabela.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

 <div class="top-bar">
     <div class="logo"> LIFE SEGUROS </div>
       <div class="menu">
          <ul>
             <li><a href="index.php">Home</a></li>
             <li><a href="quemsomos.php">Quem Somos</a></li>
             <li><a href="servicos.php">Services</a></li>
             <li><a href="exibir.php">Consultar</a></li>
             <li><a href="contato.php">Contato</a></li>
          </ul>
       </div>
   </div>

<!-- RESPONSIVE TABLE -->
<table class="table table-responsive" 
style=" margin-top: 20px;">
  
  <thead> 
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Sexo</th> 
        <th>CPF</th>  
        <th>Telefone</th>  
        <th>Email</th>  
    </tr>
  </thead>
  
  <tbody>
  <?php foreach($people as $person): ?> 
    <tr>
        <td><?= $person->id; ?></td>  
        <td><?= $person->nome; ?></td>
        <td><?= $person->sexo; ?></td> 
        <td><?= $person->cpf; ?></td> 
        <td><?= $person->telefone; ?></td>
        <td><?= $person->email; ?></td>
        <td><a href="edit.php?id=<?= $person->id ?>" class="contact-items">Editar</a>
         <a onclick="return confirm('Tem certeza que deseja deletar este aluno?')" href="delete.php?id=<?= $person->id ?>" class='contact-items'>Deletar</a></td>

    </tr>
   </tbody>
     <?php endforeach; ?>
</table>

<div class="footer">
         
    <p>Todos os Direitos Reservados 2019</p>

</div>
</body>
</html>