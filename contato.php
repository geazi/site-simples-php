<div class="span10"> 
	<div class="well"> 

		<form action="index.php?file=processardados.php" method="POST">
			<fieldset>
				<legend align=left>Formulário de Contato</legend>
			</fieldset>

			<div class="form-group">
				<label for="nome">Nome:</label>
				<input type="text" name="nome" id="nome" autofocus>
			</div>

			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" class="form-control" name="email" id="email">
			</div>

			<div class="form-group">
				<label for="assunto">Assunto:</label>
				<input type="text" name="assunto" id="assunto">
			</div>

			<div class="form-group">
				<label for="mensagem">Mensagem:</label>
				<textarea name="mensagem" id="mensagem" rows=8 class="large"></textarea>
			</div>

			<p></p>
			<input type="submit" name="enviar" value="Enviar">
		</form>
	</div>
</div>
