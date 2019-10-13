<?php

       ini_set(“display_errors”,1);
       ini_set(“display_startup_erros”,1);
        error_reporting(E_ALL);
?>


<?php
    require 'cadastro/db.php';

    $id = $_GET['id'];
    $sql = 'SELECT * FROM cotacao WHERE id=:id';
    $statement = $connection->prepare($sql);
    $statement->execute([':id' => $id ]);
    $person = $statement->fetch(PDO::FETCH_OBJ);
    if (isset ($_POST['nome']) && isset($_POST['sexo']) && isset($_POST['cpf']) && isset($_POST['telefone']) && isset($_POST['email']) ) 
    {

      $nome = $_POST['nome'];
      $sexo = $_POST['sexo'];
      $cpf = $_POST['cpf'];
      $telefone = $_POST['telefone'];
      $email = $_POST['email'];
      $sql = 'UPDATE cotacao SET nome=:nome, sexo=:sexo, cpf=:cpf, telefone=:telefone, email=:email WHERE id=:id';
      $statement = $connection->prepare($sql);
      if ($statement->execute([':nome' => $nome, ':sexo' => $sexo, ':cpf' => $cpf, ':telefone' => $telefone,':email' => $email, ':id' => $id])) {
      
        header("Location: exibir.php");
      }

    }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Trabalho - Optativa - Leonardo</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div class="top-bar">
     <div class="logo"> LIFE SEGUROS </div>
       <div class="menu">
          <ul>
             <li><a href="index.php">Home</a></li>
             <li><a href="quemsomos.php">Quem Somos</a></li>
             <li><a href="servicos.php">Servicos</a></li>
             <li><a href="exibir.php">Consultar</a></li>
             <li><a href="contato.php">Contato</a></li>
          </ul>
       </div>
</div>

 <div class="contact">
      <div class="contact-text">
        <form  method="post">
         <div class="contact-items">
          <h2>Atualizar Cotação</h2>
          <input value="<?= $person->nome; ?>" type="text" name="nome" id="nome" placeholder="Seu Nome">
          <input value="<?= $person->sexo; ?>" type="text" name="sexo" id="sexo" placeholder="Sexo">
          <input value="<?= $person->cpf; ?>" type="text" name="cpf" id="cpf" placeholder="CPF">
          <input value="<?= $person->telefone; ?>"  type="text" name="telefone" id="telefone" placeholder="Telefone">
          <input value="<?= $person->email; ?>" type="text" name="email" id="email" placeholder="Seu email">
          <button type="submit">Atualizar Cotação</button>
         </div>
        </form>

       </div>
    </div> 

<div class="footer">
         
    <p>Todos os Direitos Reservados 2019</p>

</div>    