<div class="span10"> 
	<div class="well"> 
		<p><h3> Dados enviados com sucesso </h3> </p>
		<p><h4> Abaixo seguem os dados que você enviou</h4> </p>

<?php

if(empty($_POST)) {

	print "<p>Não há dados para exibir</p>";

} else {

  echo "<p><b>Nome:</b></p> <p>" . $_POST["nome"] . "</p>";
  echo "<p><b>Email:</b></p> <p>" . $_POST["email"] . "</p>";
  echo "<p><b>Assunto:</b></p> <p>" . $_POST["assunto"] . "</p>";
  echo "<p><b>Mensagem:</b></p> <p>" . $_POST["mensagem"] . "</p>";

}


?>



	</div>
</div>
