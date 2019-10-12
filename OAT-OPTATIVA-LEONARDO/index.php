<?php

       ini_set(“display_errors”,1);
       ini_set(“display_startup_erros”,1);
       error_reporting(E_ALL);
?>

<?php
  require 'cadastro/db.php';
  $message = '';
  if (isset ($_POST['nome']) && isset($_POST['sexo']) && isset($_POST['cpf']) && isset($_POST['telefone']) && isset($_POST['email']) ) {
    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $sql = 'INSERT INTO cotacao(nome, sexo, cpf, telefone, email) VALUES(:nome, :sexo, :cpf, :telefone, :email)';
    $statement = $connection->prepare($sql);
    if ($statement->execute([':nome' => $nome, ':sexo' => $sexo , ':cpf' => $cpf, ':telefone' => $telefone, ':email' => $email])) {
      $message = 'Cotação Realizada com sucesso Entraremos em contato via email';
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
             <li><a href="#">Home</a></li>
             <li><a href="quemsomos.php">Quem Somos</a></li>
             <li><a href="servicos.php">Servicos</a></li>
             <li><a href="exibir.php">Consultar</a></li>
             <li><a href="contato.php">Contato</a></li>
          </ul>
       </div>
   </div>

   <div class="banner">
       <div class="banner-text">
       	   <div class="banner-text-items">
       	   	  <h2>Seguro de Vida</h2>
       	   	  <p>
Seguro de vida pode ser uma parte fundamental do seu plano financeiro. Fale com um especialista para determinar o seguro de vida certo para suas necessidades ou faça uma cotação online.</p>
       	   </div>
       </div>
   </div>

   <div class="main-content">

	     <div class="main1">
	        <h2>O que é Seguro de Vida?</h2>
	        <p>
Uma vez que este tipo de seguro se baseia em amenizar as condições financeiras desfavoráveis, ao se contratar escolhem-se previamente beneficiários e se define o valor do seguro, sendo esta a quantia máxima a ser paga pela seguradora, em caso de imprevistos. O valor máximo de indenização varia de acordo com as coberturas escolhidas. </p>    	
	     </div>

	     <div class="main1">
	        <h2>Coberturas do Seguro de Vida</h2>
	        <p>✔︎ Invalidez Permanente Total ou Parcial por Acidente (IPA)
 ✔︎ Invalidez permanente total por acidente (IPTA)
 ✔︎ Invalidez Permanente por Acidente Majorada (IPAM)
 ✔︎ Invalidez Funcional Permanente Total por Doença (IFPD)
 ✔︎ Invalidez Laborativa Permanente Total por Doença (ILPD)
 ✔︎ Despesas Médico-Hospitalares e Odontológicas (DMHO)
 ✔︎ Diárias de Incapacidade Temporária (DIT)
 ✔︎ Diárias por Internação Hospitalar (DIT)
 ✔︎ Doenças Graves (DG)</p>    	
	     </div>

	     <div class="main1">
	        <h2>Por que Contratar?</h2>
	        <p>Se tudo correr conforme o planejado, você vai pagar a sua casa, colocar seus filhos na faculdade e desfrutar de uma longa aposentadoria. Mas você sabe que o inesperado pode acontecer - você quer ajudar a planejar o futuro da sua família se eles devem continuar sem você? O seguro de vida pode ajudar a aliviar seu fardo financeiro.</p>    	
	     </div>

   </div>

   <div class="contact">
      <div class="contact-text">
        <div class="message">
           <?php if(!empty($message)): ?>
           
              <?= $message; ?>
           
           <?php endif; ?>
      </div>

       <form method="post">
         <div class="contact-items">
         	<h2>Fazer uma Cotação</h2>
         	<input type="text" name="nome" id="nome" placeholder="Seu Nome">
          <input type="text" name="sexo" id="sexo" placeholder="Sexo">
          <input type="text" name="cpf" id="cpf" placeholder="CPF">
          <input type="text" name="telefone" id="telefone" placeholder="Telefone">
         	<input type="text" name="email" id="email" placeholder="Seu email">
          <button type="submit">Cotar</button>
         </div>
        </form>
       </div>
    </div>

    <div class="footer">
         
         <p>Todos os Direitos Reservados 2019</p>

    </div>

</body>
</html>