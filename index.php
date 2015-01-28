<?php
$rota = parse_url("http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
$path = str_replace("/", "", $rota['path']);

$rotaVerificada = verificaRota($path);

if ($rotaVerificada == "erro.php") {
  http_response_code(404);
}

?>

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
				<li> <a href="/home"> <i class="icon-star"></i> Home </a> </li>
				<li> <a href="/empresa"> <i class="icon-star"></i> Empresa </a> </li> 
				<li> <a href="/produtos"> <i class="icon-star"></i> Produtos </a> </li> 
				<li> <a href="/servicos"> <i class="icon-star"></i> Serviços </a> </li> 
				<li> <a href="/contato"> <i class="icon-star"></i> Contato </a> </li> 
			</ul> 
		</div>

<?php
	require_once($rotaVerificada);
?>

	</div>
</div>

<?php 
   require_once("footer.php");
?>

<?php
function verificaRota($qualRota) { 
	$rotas = array(
		"home"         => "home.php",
		"empresa"      => "empresa.php",
		"produtos"     => "produtos.php",
		"servicos"     => "servicos.php",
		"contato"      => "contato.php",
		"erro"         => "erro.php",
		);

	if ($qualRota == "") {
		$qualRota = 'home';
	}

	if (!file_exists($rotas[$qualRota])) {
		$qualRota = 'erro';
	}
	return $rotas[$qualRota]; 
} 

?>

</body>

</html>
