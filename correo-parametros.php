<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Envio de Correo</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

<style>
.github{
	color: black;
}

</style>

<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<h1>Envio de Correo</h1>
			<hr>

    <form action="http://correo.cloudperu.tech/correo-parametros.php" method="POST">
    	
    <textarea name="mensaje" id="" rows="3" class="form-control" required=""></textarea>
    <button class="btn btn-primary"><i class="fa fa-envelope"></i>
	Enviar de correo</button>

    </form>
			

		</div>

	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h1 class="text-center">
				
			<a href="https://github.com/PHPMailer/PHPMailer" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Descargar PHPMailer"><i class="fa fa-github github fa-5x"></i></a>

			</h1>
		</div>
	</div>
	</div>
</div>
</body>
</html>