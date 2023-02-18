<!doctype html>
<html lang="en">
  <head>
  	<title>Mutley - Bot de Divulgação!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/background.css">
	</head>
	<body>
	
<?php

if ($_GET){

if ($_GET ['bd'] == 'false'){

?>

<p style="color: red;">As informações de acesso ao seu banco de dados parecem estar erradas.</p>

<?php
} elseif ($_GET ['ok'] == 'true'){
?>

<p style="color: green;">
Ok, o seu bot foi configurado com sucesso!
<br>
Agora você pode deletar a pasta init.
</p>

<?php
}elseif ($_GET ['ok'] == 'false'){
?>

<p style="color: red;">Infelizmente tivemos um erro ao configurar o seu bot tente fazer isso de modo manual editando o arquivo <b>config.php</b> e definindo a sua url de webhook com a API do Telegram</p>

<?php
}

}else {

?>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
							<div class="col-lg-5">
								<div class="contact-wrap w-100 p-md-5 p-4">
								<div>
								<img src="https://uploaddeimagens.com.br/images/004/343/393/full/20230209_084429_0000-removebg-preview.png?1675944286" height="50%" width="50%" >
</div>
									<h4 class="mb-4">Instaldor Bot Divulgação</h4>
									<h6>Não sabe instalar? <a href="http://t.me/HarrisonnWells">CLIQUE AQUI</a></h6>
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				            Your message was sent, thank you!
				      		</div>
									<form method="POST" action="instalacao.php">
									<form  method="post">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="host" id="host" placeholder="🖥️ Host">
												</div>
											</div>
											<div class="col-md-12"> 
												<div class="form-group">
													<input type="text" class="form-control" name="usuario" id="usuario" placeholder="👤 Usuário">
												</div>
											</div>
											<div class="col-md-12"> 
												<div class="form-group">
													<input type="text" class="form-control" name="senha" id="senha" placeholder="🔑 Senha">
												</div>
											</div>
											<div class="col-md-12"> 
												<div class="form-group">
													<input type="text" class="form-control" name="bd" id="bd" placeholder="📀 Banco de Dados">
												</div>
											</div>
											<div class="col-md-12"> 
												<div class="form-group">
													<input type="text" class="form-control" name="token" id="token" placeholder="🤖 Token do Bot">
												</div>
											</div>
											<div class="col-md-12"> 
												<div class="form-group">
													<input type="text" class="form-control" name="id" id="id" placeholder="🆔 ID do Administrador">
												</div>
											</div>
											<div class="col-md-12"> 
												<div class="form-group">
													<input type="text" class="form-control" name="canal" id="canal" placeholder="💬 User do Canal | @Seu_Canai">
												</div>
											</div>
											    <input type="hidden" value="<?php echo 'https://'.$_SERVER ['SERVER_NAME'].str_replace ('/init/', '/', $_SERVER ['REQUEST_URI']).'bot.php'; ?>" name="url"/>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Instalar agora!" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
									<p><a href="http://t.me/HarrisonnWells"> Copyright &copy by Harrison Wells<br>All right reserved</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/main.js"></script>

<?php
}
?>

	</body>
</html>