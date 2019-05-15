<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Calculadora</title>
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form action="formu.php" method="get" class="form-horizontal">
			<h1>calculadora basica</h1>
			<div class="form-group">
				<label class="col-md-2">Ingrese el Número 1:</label>
				<div class="col-md-4">
					<input type="text" name="" value="" class="form-control input-md">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2">Ingreseel Número 2:</label>
				<div class="col-md-4">
					<input type="text" name="" value="" class="form-control input-md">
				</div>
			</div>	
			<div class="form-group">
				<label class="col-md-2"></label>
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>
		</form>	


	</div>
	

	<!-- AGREGANDO BOOTSTRAP JavaScript -->
	<script src="js/jquery-1.12.4.min.js"></script>
	<script src="js/bootstrap.min.js" ></script>
</body>
</html>