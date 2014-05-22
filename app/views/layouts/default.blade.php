<!DOCTYPE html>
<html lang="en" ng-app>
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ieventos</title>
		<link href="{{ url('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	<style>
		body {
		padding-top: 60px;
		}
	</style>
	<link href="{{ url('bootstrap/css/bootstrap-theme.min.css') }}" rel="stylesheet">
<!--[css]-->

<style>
html, body {
	overflow-x: hidden;
}
body {
	padding-top: 70px;
}
footer {
	padding: 30px 0;
}
.cracha{
	width: 200px;
	margin-left: 20px;
}
#nomep{
	text-transform: uppercase;
	text-align: center;
	font-weight: bold;
}
#empresap{
	text-transform: uppercase;
	text-align: center;
	border-bottom: 1px solid #000;
}
input[disabled]{
	border:none;
}
@media screen and (max-width: 767px) {
	.row-offcanvas {
	position: relative;
	-webkit-transition: all .25s ease-out;
	-moz-transition: all .25s ease-out;
	transition: all .25s ease-out;
	}
	.row-offcanvas-right {
	    right: 0;
	}
	.row-offcanvas-left {
	    left: 0;
	}
	.row-offcanvas-right
	.sidebar-offcanvas {
	    right: -50%;
	}
	.row-offcanvas-left
	.sidebar-offcanvas {
	    left: -50%;
	}
	.row-offcanvas-right.active {
	    right: 50%;
	}
	.row-offcanvas-left.active {
	    left: 50%;
	}
	.sidebar-offcanvas {
	    position: absolute;
	    top: 0;
	    width: 50%;
	}
}
</style>

<style type="text/css" media="print">
    @page 
    {
        size: auto;   /* auto is the initial value */
        margin: 0mm;  /* this affects the margin in the printer settings */
    }

    body 
    {
        background-color:#FFFFFF; 
        margin: 0px;  /* this affects the margin on the content before sending to printer */
   }
</style>

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Menu</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Ieventos</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="{{ url('inscricao') }}">Inscrição</a></li>
				<li><a href="{{ url('palestra') }}">Palestras</a></li>
				<li><a href="#">Certificados</a></li>
				<li><a href="#contact">Controle de acesso</a></li>
			</ul>
		</div><!-- /.nav-collapse -->
	</div><!-- /.container -->
</div><!-- /.navbar -->
<div class="container">
	<div class="row row-offcanvas row-offcanvas-right">
		<div class="col-xs-12 col-sm-9">
			@section('content')
			<p class="pull-right visible-xs">
				<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
			</p>
			<div class="jumbotron">
				<h1>Hello, world!</h1>
				<p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
			</div>
			<div class="row">
 			</div><!--/row-->
			@show
 		</div><!--/span-->
 		<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
			<div class="list-group">
				<a href="{{ url('inscricao') }}" class="list-group-item">Inscricao</a>
<!--[linkToModels]-->
 			</div>
		</div><!--/span-->
	</div><!--/row-->
	<hr>
	<footer>
		<p>&copy; Ieventos 2014 - Todos os direitos reservados</p>
 	</footer>
</div>
<script src="{{ url('js/jquery1.js') }}"></script>
<script src="{{ url('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ url('js/angular.js') }}"></script>
<script src="{{ url('js/custom.js') }}"></script>
<script src="{{ url('js/jquery.maskedinput.min.js') }}"></script>
<!--[javascript]-->
</body>
</html>
