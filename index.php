
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
    <!-- Bootstrap CSS -->
	<LINK REL=StyleSheet HREF="bootstrap-4.0.0/css/bootstrap.min.css" TYPE="text/css" MEDIA=screen>
	<LINK REL=StyleSheet HREF="bootstrap-4.0.0/css/bootstrap.css" TYPE="text/css" MEDIA=screen>
    <LINK REL=StyleSheet HREF="bootstrap-4.0.0/css/floating-labels.css" TYPE="text/css" MEDIA=screen>
	
	<title>Villa Group | Resguardos</title>
   </head>
  <body>
	
	<form class="form-signin" method="post">
		<div class="text-center mb-8">
			<img class="mb-4" src="Recursos/Img/Lap_Archivo.png" alt="">
			<h1 class="h2 mb-3 font-weight-normal">Sistema de Administración de Resguardos</h1>
			<?php include 'Proyecto/login.php'; ?>
		</div>
		<div class="form-label-group">
        <input type="text" id="inputEmail" name="usr" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputEmail">Usuario</label>
      </div>

      <div class="form-label-group">
        <input type="password" id="inputPassword" name="psw" class="form-control" placeholder="Password" required>
        <label for="inputPassword">Contraseña</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Recordar mi cuenta
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesión</button>
      <p class="mt-5 mb-3 text-muted text-center">Villagroup Loreto</p>
			<table class="table table-sm">
				<thead>
					<tr>
					  <td class="table-active"></td>
					  <td class="table-primary"></td>
					  <td class="table-success"></td>
					  <td class="table-secondary"></td>
					  <td class="table-primary"></td>
					  <td class="table-success"></td>
					  <td class="table-info"></td>
					  <td class="table-active"></td>
					</tr>
				</thead>
			</table>
	  </form>
	

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="bootstrap-4.0.0/js/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="bootstrap-4.0.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="bootstrap-4.0.0/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<script>
		document.oncontextmenu = function(){return false;}
	</script>
	
  </body>
  
</html>

