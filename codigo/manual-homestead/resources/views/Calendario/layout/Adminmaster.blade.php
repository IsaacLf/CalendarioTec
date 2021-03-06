<!DOCTYPE html>
<html lang="es">

<html>
<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta charset="utf-8">
	 <link href="css\calendariocss\adminmaster.css" rel="stylesheet" type="text/css">
	 <link href="css\calendariocss\adminContenedor.css" rel="stylesheet" type="text/css">
	 <link href="css\calendariocss\adminHerramientas.css" rel="stylesheet" type="text/css">
   <link href="css\calendariocss\calendarioAdmin.css" rel="stylesheet" type="text/css">
   <link href="css\calendariocss\plantilla.css" rel="stylesheet" type="text/css">
   <link href="css\calendariocss\calendario.css" rel="stylesheet" type="text/css">
   <!-- <link href="{{asset('css\app.css')}}" rel="stylesheet" type="text/css"> -->

	 
	

	<title>@yield('title')</title>

</head>

<header>

	<table id="tablarriba">
		<tr>
			<td id="deslogeo">
				<input type="button" value="Salir" id="deslogear" >
			</td>

			<td id="Bienvendio">
				<h1>Bienvenido Administrador: </h1>
			</td>
		</tr>
	</table>

	


<nav>
	<div class="menu">
			<ul>
				<li id="mCEscolar"><a href="#">Ciclo escolar completo</a></li>

				<li id="mCEscolarN"><a href="#">Ciclo escolar N</a></li>
				
				<li id="mCEscolarP"><a href="#">Ciclo escolar P</a></li>
				
				<li id="mMespecifico"><a href="#">Mes especifico</a></li>

				
			</ul>
	</div>
</nav>

	<div class="vista">
		<h1>Esta visualizando el Ciclo Escolar 2018-2019 </h1>

	</div>


</header>

<body onload="getAllPeriods()">

	 @yield('content')

</body>
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/adminCalendar.js') }}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js\calendario\fechado.js"></script>
  <script src="js\calendario\ocultadorAdmin.js"></script>
  @yield('Scripts')

</html>
