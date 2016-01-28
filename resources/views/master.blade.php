<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>@yield('titulo')</title>
		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/estilos.css" rel="stylesheet">
		<!-- Custom CSS -->
		<link href="css/simple-sidebar.css" rel="stylesheet">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Menu Toggle Script -->
	</head>
	<body>
		<nav class="navbar navbar-inverse visible-xs">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>                        
					</button>
					<a class="navbar-brand" href="#">Logo</a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li><a href="#"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;Início</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Clientes</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;Processos</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-calendar"></span>&nbsp;&nbsp;Agenda</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<nav class="bartitulo navbar-inverse hidden-xs">
			<div class="container-fluid">
				Emissão
			</div>
		</nav>
		<div id="wrapper">
			<!-- Sidebar -->
			<div id="sidebar-wrapper">
				<a href="#"><img class="img-responsive" src="img/logos/logo03.png" alt="Chania"></a>
				<ul class="sidebar-nav">
					<li class="sidebar-brand">Barbosa e Santos Advocacia</li>
					<li><a href="#"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;Início</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Clientes</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;Processos</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-calendar"></span>&nbsp;&nbsp;Agenda</a></li>
				</ul>
			</div>
			<!-- /#sidebar-wrapper -->
			<!-- Page Content -->
			<div id="page-content-wrapper">
				<div class="container-fluid conteudo">
					<!-- Aqui entra o conteúdo da página -->
					@yield('conteudo')
				</div>
			</div>
			<!-- /#page-content-wrapper -->
		</div>
		<!-- /#wrapper -->
	</body>
</html>
