<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Painel - Admin</title>
	 <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.6/angular.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

	<!-- Fonts -->
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	
	{!! Html::script('js/angular/lib/snackbar/snack.js') !!}
	{!! Html::style('js/angular/lib/snackbar/snack.css') !!}
	{!! Html::style('css/style.css') !!}
	
	{!! Html::script('js/menu/menu.js') !!}

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="http://marceloprogrammer.com">Marcelo Programmer</a>
			</div>
		</div>
	</nav>
	@if(Auth::user())
	<div class="menu-vertical" id='cssmenu'>
		<ul id="nav" class="menu-vertical-nav"> 
			<li class='active'><a href='#'><span>Menu</span></a></li>
			<li class='has-sub'><a href='#'><span>Usuário</span></a>
				<ul>
					<li><a href="{{route('admin.painel.user') }}"><span>Criar</span></a></li>
					<li class='last'><a href="{{route('admin.painel.userlist') }}"><span>Listar</span></a></li>
				</ul>
			</li>
			<li class='has-sub'><a href='#'><span>Projetos</span></a>
				<ul>
					<li><a href="{{route('admin.painel.project') }}"><span>Criar</span></a></li>
					<li class='last'><a href="{{route('admin.painel.projectView') }}"><span>Exibir</span></a></li>
				</ul>
			</li>
			<li class='has-sub'><a href='#'><span>Imagem</span></a>
				<ul>
					<li class='last'><a href="{{route('admin.painel.projectedit') }}"><span>Gerenciar</span></a></li>
				</ul>
			</li>
			<li class='has-sub'><a href='#'><span>Publicações</span></a>
				<ul>
					<li><a href="{{route('admin.painel.news.create') }}"><span>Enviar</span></a></li>
					<li class='last'><a href="{{route('admin.painel.news.list') }}"><span>Exibir</span></a></li>
				</ul>
			</li>
			<li class='has-sub'><a href='#'><span>E-mails</span></a>
				<ul>
					<li class='last'><a href="{{route('admin.painel.emails.list') }}"><span>Exibir</span></a></li>
				</ul>
			</li>
			<li class='has-sub'><a href='#'><span>Promoções</span></a>
				<ul>
					<li><a href="{{route('admin.painel.promotions.store') }}"><span>Criar</span></a></li>
					<li class='last'><a href="{{route('admin.painel.promotions.list') }}"><span>Exibir</span></a></li>
				</ul>
			</li>
			<li class='has-sub'><a href='#'><span>{{ auth()->user()->name }} </span></a>
				<ul>
					<li class='last'><a href="{{ url('/auth/logout') }}"><span>Sair</span></a></li>
				</ul>
			</li>
		</ul>
	</div>
	@endif
	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

	@yield('post-script')

	<footer class="footer">
		<div class="footer-text">
			<div>
				Painel - V 1.0
			</div>
			<div>
				© Marcelo Nascimento - Todos os direitos reservados.
			</div>
		</div>
	</footer>
</body>
</html>
