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

<p style="color: red;">Infelizmente tivemos um erro ao configurar o seu bot tente fazer isso de modo manual editando o arquivo <b>config.php</b> e definindo a sua url de webhook com a API do Telegram.</p>

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
<h4> Deu Ruim! 😭</h4>
<h6>Seu Mutley BOT não foi configurado! 🔴</h6>
<p>Clique no botão abaixo e preencha os dados corretamente!
<div class="form-group">

<a href="index.php" value="Abrir Telegram!" class="btn btn-primary">Tentar Novamente ↩️️<a><br><br>

<img src="https://uploaddeimagens.com.br/images/004/348/086/full/images_%281%29.png?1675959716"" height="100%" width="100%" ><br>
										<p><a href="http://t.me/HarrisonnWells"> Copyright &copy by Harrison Wells<br>All right reserved</a></p>
									
												</div>
											</div>
										</div>
									</form>
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