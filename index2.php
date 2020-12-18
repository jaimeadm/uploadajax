<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Projeto Upload de imagem com ajax e php - 2.0</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="script.js"></script>
	</head>
<body>
	<div class="container">
		<h1>Upload de imagem - 2.0 <small>ajax e php</small></h1>
		<img class="img-responsive" src="upload.png" alt="Upload" width="64" height="64"> 
		<hr />

		<div class="panel panel-warning">
			<div class="panel-heading">Formulário</div>
			<div class="panel-body">
				<div class="form-group">
					Nome:<br/>
					<input type="text" id="nome" name="nome" class="form-control"/>
				</div>
				<div class="form-group">
					Foto:<br/>
					<input type="file" id="foto" name="foto" class="form-control"/>
				</div>
				<button class="btn btn-default">Enviar</button>
			</div>
		</div>
	</div>	
</body>
</html>