<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Projeto Upload de imagem com ajax e php - 3.0</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="shortcut icon" href="favicon.ico" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="script.js"></script>
	</head>
<body>
	<div class="container">
		<h1>Upload de imagem - 3.0 <small>ajax e php</small> <span class="label label-success">novo</span></h1>
		<img class="img-responsive" src="uploadnew.png" alt="Upload" width="64" height="64"> 
		<p>
			<div class="dropdown">
				<button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Menu <span class="caret"></span></button>
				<ul class="dropdown-menu">
					<li class="dropdown-header">Selecione a versão</li>
					<li><a href="index.php">Versão 1.0</a></li>
					<li><a href="index2.php">Versão 2.0</a></li>
					<li><a href="index3.php">Versão 3.0</a></li>
					<li class="divider"></li>
					<li class="disabled"><a href="#">Versão Beta</a></li>
				</ul>
			</div>
		</p>
		<hr />

		<div class="panel panel-info">
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
				<button class="btn btn-info">Fazer Upload</button>
			</div>
		</div>
	</div>	
</body>
</html>