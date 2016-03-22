<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projeto POO</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <h2>Clientes</h2> <br>
<?php
require "Clientes.php";

$cliente=$clientes->find($_GET['id']);
?>
    <table class="table">
  <tr>
 	<td><strong>Id</strong></th>
    <td><?php echo $_GET['id'];?></th>
  </tr>
  <tr>
 	<td><strong>Nome</strong></th>
    <td><?php echo $cliente['nome'];?></th>
  </tr>
  <tr>
 	<td><strong>E-mail</strong></th>
    <td><?php echo $cliente['email'];?></th>
  </tr>
  <tr>
 	<td><strong>CPF</strong></th>
    <td><?php echo $cliente['cpf'];?></th>
  </tr>
    <tr>
 	<td><strong>Telefone</strong></th>
    <td><?php echo $cliente['telefone'];?></th>
  </tr>
  <tr>
 	<td><strong>Endereço</strong></th>
    <td><?php echo $cliente['endereco'];?></th>
  </tr>
</table><br>   <br>   
 <a href='index.php'><< Voltar</a>
</div>
<!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
<?php
/*

foreach($clientes as $cliente){

    echo "Nome: ".$cliente->getNome();

}
*/
?>