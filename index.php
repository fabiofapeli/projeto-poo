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

if(isset($_GET['order_dec'])){
	$clientes->orderDec();
	echo "Ordem descendente <a href='index.php'>(Alterar)</a>";
}
else{
	echo "Ordem ascendente <a href='index.php?order_dec=s'>(Alterar)</a>";

}

?><br><br>
    <table class="table">
  <tr>
 	<th>Id</th>
    <th>Nome</th>
  </tr>
  <?php

  foreach($clientes->all() as $k=>$cliente){
	 echo "<tr>"; 
	 echo "<td>$k</td>";
	 echo "<td><a href='ver_cliente.php?id=$k'>".$cliente['nome']."</a></td>";
	 echo "</tr>"; 
  }
  
  ?>
</table>
    
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