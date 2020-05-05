<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Página de inicio de sesión</title>
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
	<div class="container">
		<div class="login-form">
			<div class="form-header">
				<img src="logo.jpg" height="62" width="45">
			</div>
			<form id="login-form" method="post" class="form-signin" role="form" action="indexbd.php">
				<h1>Bienvenido a creador web</h1>
				<li>Esta a 2 paso para poder crear su propia web semi-automatica.</li>
				<br>
				<input name="usad" id="email" class="form-control" placeholder="Usuario" autofocus> 
				<input name="pdad" id="password" type="password" class="form-control" placeholder="Contraseña"> 
				<button class="btn btn-block bt-login" type="submit" id="submit_btn" data-loading-text="Iniciando....">Siguiente</button>
			</form>
			<div class="form-footer">
						<center> Codigo sin fines de lucro. Editor @kouller.</center>
			</div>
		</div>
	</div>
	<!-- /container -->
  </body>
</html>
