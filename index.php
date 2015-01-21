<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<!-- JQUERY --> 
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> 
	<script>window.jQuery || document.write('<script src="js/jquery-1.7.1.min.js"><\/script>')</script> 
	
	<!-- TWITTER BOOTSTRAP CSS --> 
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" /> 

	<!-- TWITTER BOOTSTRAP JS --> 
	<script src="js/bootstrap.min.js"></script> 

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>sitesimples</title>

</head>

<body>

<?php 
   require_once("header.php");
?>

<div class="container-fluid"> 
	<div class="row-fluid"> 

		<div class="span2"> 
			<h2> Menu </h2> 
			<ul class="nav nav-tabs nav-stacked"> 
				<li> <a href="index.php?file=home.php"> <i class="icon-star"></i> Home </a> </li>
				<li> <a href="index.php?file=empresa.php"> <i class="icon-star"></i> Empresa </a> </li> 
				<li> <a href="index.php?file=produtos.php"> <i class="icon-star"></i> Produtos </a> </li> 
				<li> <a href="index.php?file=servicos.php"> <i class="icon-star"></i> Serviços </a> </li> 
				<li> <a href="index.php?file=contato.php"> <i class="icon-star"></i> Contato </a> </li> 
			</ul> 
		</div>

<?php

if ($_GET["file"] == "") {
   require_once("home.php");
} else {
	if (file_exists($_GET["file"])) {
		require_once($_GET["file"]);
	} else {
		require_once("erro.php");
	}
   
}
?>

	</div>
</div>

<?php 
   require_once("footer.php");
?>

</body>

</html>
