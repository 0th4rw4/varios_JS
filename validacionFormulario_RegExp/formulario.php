<?php
session_start();

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$fecha = $_POST['fecha'];
//$foto = $_FILE['name'];

$email = $_POST['email'];
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$calle = $_POST['calle'];
$numero = $_POST['numero'];
$piso = $_POST['piso'];
$depto = $_POST['depto'];

	$pat_nombre = '/^[a-zA-Z\á\é\í\ó\ú]*$/';
	$pat_apellido = '/^[a-zA-Z\á\é\í\ó\ú]*$/';
	$pat_dni = '/^[0-9]{2}[\.]?[0-9]{3}[\.]?[0-9]{3}$/';
	$pat_fecha = '/^[\d\d]{1,2}(\-|\/)[0-9]{1,2}(\-|\/)[0-9]{4}$/';
	$pat_email = '/^[\w\-\_\.]{3}[a-z0-9A-Z\-\_\.]*[@][\w]{3}[\w\-\_\.]*[\.]?[\w]{2,4}$/';
	$pat_usuario = '/^[A-Z]{4}[A-Z]*$/';
	$pat_clave = '/^[\S]{3,15}$/';
	$pat_calle = '/^[\w\d\-\ ]*$/';
	$pat_numero = '/^[\d]*(S\/N)?$/';
	$pat_piso = '/^[\d]*(S\/N)?(PB)?$/';
	$pat_depto = '/^[\d]*[\w]?$/';
	
	
	if(preg_match($pat_nombre,$nombre)!=0)$_SESSION['nombre'] = $nombre; 
		elseif(is_null($nombre)) $_SESSION['nombre']='La fuga del paralitico en bicicleta';
		
	if(preg_match($pat_apellido,$apellido)!=0)$_SESSION['apellido'] = $apellido; 
		elseif(is_null($apellido)) $_SESSION['apellido']='La fuga del paralitico en bicicleta';
		
	if(preg_match($pat_dni,$dni)!=0)$_SESSION['dni'] = $dni; 
		elseif(is_null($dni)) $_SESSION['dni']='La fuga del paralitico en bicicleta';
		
	if(preg_match($pat_fecha,$fecha)!=0)$_SESSION['fecha'] = $fecha; 
		elseif(is_null($fecha)) $_SESSION['fecha']='La fuga del paralitico en bicicleta';
	
	
	if(preg_match($pat_email,$email)!=0)$_SESSION['email'] = $email; 
		elseif(is_null($email)) $_SESSION['email']='La fuga del paralitico en bicicleta';
		
	if(preg_match($pat_usuario,$usuario)!=0)$_SESSION['usuario'] = $usuario; 
		elseif(is_null($usuario)) $_SESSION['usuario']='La fuga del paralitico en bicicleta';
		
	if(preg_match($pat_clave,$clave)!=0)$_SESSION['clave'] = $clave; 
		elseif(is_null($clave)) $_SESSION['clave']='La fuga del paralitico en bicicleta';
		
	if(preg_match($pat_calle,$calle)!=0)$_SESSION['calle'] = $calle; 
		elseif(is_null($calle)) $_SESSION['calle']='La fuga del paralitico en bicicleta';
		
	if(preg_match($pat_numero,$numero)!=0)$_SESSION['numero'] = $numero; 
		elseif(is_null($numero)) $_SESSION['numero']='La fuga del paralitico en bicicleta';
	
	if(preg_match($pat_piso,$piso)!=0)$_SESSION['piso'] = $piso; 
		elseif(is_null($piso)) $_SESSION['piso']='La fuga del paralitico en bicicleta';
		
	if(preg_match($pat_depto,$depto)!=0)$_SESSION['depto'] = $depto; 
		elseif(is_null($depto)) $_SESSION['depto']='La fuga del paralitico en bicicleta';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Formulario de pedido</title>
	<style>
		h1{ text-align: center; }
		body{ font: normal 14px/16px Verdana; background: #3A5169; color: #18222B; }
		form *{ -moz-box-sizing: border-box; -webkit-box-sizing: border-box; font-size: 12px; color: black }
		form h2{ color: #3498DB; font: bold 20px/25px Verdana; margin: 0 0 10px 0; padding-bottom: 6px; border-bottom: 1px dashed #3498DB; }
		form{ width: 500px; margin: auto; border: 1px solid #aaa; background: white; padding: 10px 20px; overflow: auto; }
		form div{ margin-bottom: 5px; }
		form div span{ display: inline-block; width: 120px; text-align: right; padding-right: 10px; }
		form div input{ display: inline-block; width: 350px; border: 1px solid #aaa; padding: 6px 9px; border-radius: 8px; color: #666 }
		form div input[type=submit]{ float: right; width: 250px; }
		form div *:focus{ background: #FFF6B7; color: black; }
		fieldset{ border: 1px solid #ccc; margin-bottom: 20px; }
		legend{ background: #18222B; padding: 3px 9px; color: #FFF6B7 }
	</style>
</head>
<body>
<h1>Formulario de pedido</h1>

	<form action="formulario.php" method="post" id="comprar">
		<h2>Checkout!</h2>
		<fieldset><legend>Datos personales</legend>
			<div><span>Nombre</span><input type="text" name="nombre" id="nombre" <?php if(isset($_SESSION['nombre'])) echo 'value="'.$_SESSION['nombre'].'"'; else echo ''; ?> /></div>
			<div><span>Apellido</span><input type="text" name="apellido" id="apellido"  <?php if(isset($_SESSION['apellido'])) echo 'value="'.$_SESSION['apellido'].'"';else echo ''; ?> /></div>
			<div><span>DNI</span><input type="text" name="dni" id="dni"  <?php if(isset($_SESSION['dni'])) echo 'value="'.$_SESSION['dni'].'"';else echo ''; ?> /></div>
			<div><span>F. Nacimiento</span><input type="text" name="fecha" id="fecha"  <?php if(isset($_SESSION['fecha'])) echo 'value="'.$_SESSION['fecha'].'"';else echo ''; ?>/></div>
			<div><span>Foto</span><input type="file" name="foto" id="foto"  /></div>
		</fieldset>
		
		<fieldset><legend>Registro para seguimiento</legend>
			<div><span>Email</span><input type="text" name="email" id="email"  <?php if(isset($_SESSION['email'])) echo 'value="'.$_SESSION['email'].'"';else echo ''; ?> /></div>
			<div><span>Usuario</span><input type="text" name="usuario" id="usuario"  <?php if(isset($_SESSION['usuario'])) echo 'value="'.$_SESSION['usuario'].'"';else echo ''; ?> /></div>
			<div><span>Clave</span><input type="text" name="clave" id="clave"  <?php if(isset($_SESSION['clave'])) echo 'value="'.$_SESSION['clave'].'"';else echo ''; ?>/></div>
		</fieldset>
		
		<fieldset><legend>Domicilio de entrega</legend>
			<div><span>Calle</span><input type="text" name="calle" id="calle"  <?php if(isset($_SESSION['calle'])) echo 'value="'.$_SESSION['calle'].'"';else echo ''; ?> /></div>
			<div><span>Numero</span><input type="text" name="numero" id="numero"  <?php if(isset($_SESSION['numero'])) echo 'value="'.$_SESSION['numero'].'"';else echo ''; ?>/></div>
			<div><span>Piso</span><input type="text" name="piso" id="piso"  <?php if(isset($_SESSION['piso'])) echo 'value="'.$_SESSION['piso'].'"';else echo ''; ?> /></div>
			<div><span>Depto</span><input type="text" name="depto" id="depto"  <?php if(isset($_SESSION['depto'])) echo 'value="'.$_SESSION['depto'].'"';else echo ''; ?> /></div>
		</fieldset>
		<div><input type="submit" id="enviar" value="Cerrar compra!" /></div>
	</form>
	<script type="text/javascript">
	
	document.getElementById('comprar').onsubmit = function(){
				

			var nombre = document.getElementById('nombre');
			var apellido = document.getElementById('apellido');
			var dni = document.getElementById('dni');
			var fecha = document.getElementById('fecha');
			var foto = document.getElementById('foto');
			
			var email = document.getElementById('email');
			var usuario = document.getElementById('usuario');
			var clave = document.getElementById('clave');
			
			var calle = document.getElementById('calle');
			var numero = document.getElementById('numero');
			var piso = document.getElementById('piso');
			var depto = document.getElementById('depto');
			
			var pat_nombre = /^[a-zA-Z\á\é\í\ó\ú]*$/;
			var pat_apellido = /^[a-zA-Z\á\é\í\ó\ú]*$/;
			var pat_dni = /^[0-9]{2}[\.]?[0-9]{3}[\.]?[0-9]{3}$/;
			var pat_fecha = /^[\d\d]{1,2}(\-|\/)[0-9]{1,2}(\-|\/)[0-9]{4}$/;
			var pat_email = /^[\w\-\_\.]{3}[a-z0-9A-Z\-\_\.]*[@][\w]{3}[\w\-\_\.]*[\.]?[\w]{2,4}$/;
			var pat_usuario = /^[A-Z]{4}[A-Z]*$/;
			var pat_clave = /^[\S]{3,15}$/;
			var pat_calle = /^[\w\d\-\ ]*$/;
			var pat_numero = /^[\d]*(S\/N)?$/;
			var pat_piso = /^[\d]*(S\/N)?(PB)?$/;
			var pat_depto = /^[\d]*[\w]?$/;
			
			var error = false;
			
			if(pat_nombre.test(nombre.value) && isNaN(nombre.value)){nombre.style.backgroundColor='white'; error += false;}
			else {nombre.style.backgroundColor='red'; error += true;}
			
			if(pat_apellido.test(apellido.value) && isNaN(apellido.value)){apellido.style.backgroundColor='white';error += false;}
			else {apellido.style.backgroundColor='red'; error += true;}
			
			if(pat_dni.test(dni.value) && isNaN(dni.value)){dni.style.backgroundColor='white';error += false;}
			else {dni.style.backgroundColor='red'; error += true;}
			
			if(pat_fecha.test(fecha.value) && isNaN(fecha.value)){fecha.style.backgroundColor='white'; error += false;}
			else {fecha.style.backgroundColor='red'; error += true;}
			
			if(isNaN(foto.value)){foto.style.backgroundColor='white'; error += false;}
			else {foto.style.backgroundColor='red'; error += true;}
			
			if(pat_email.test(email.value)||!isNaN(email.value)){email.style.backgroundColor='white'; error += false;}
			else {email.style.backgroundColor='red'; error += true;}
			
			if(pat_usuario.test(usuario.value)||!isNaN(usuario.value)){usuario.style.backgroundColor='white'; error += false;}
			else {usuario.style.backgroundColor='red'; error += true;}
			
			if(pat_clave.test(clave.value)||!isNaN(clave.value)){clave.style.backgroundColor='white'; error += false;}
			else {clave.style.backgroundColor='red'; error += true;}
			
			if(pat_calle.test(calle.value)||!isNaN(calle.value)){calle.style.backgroundColor='white'; error += false;}
			else {calle.style.backgroundColor='red'; error += true;}
			
			if(pat_numero.test(numero.value)||!isNaN(numero.value)){numero.style.backgroundColor='white'; error += false;}
			else {numero.style.backgroundColor='red'; error += true;}
			
			if(pat_piso.test(piso.value)||!isNaN(piso.value)){piso.style.backgroundColor='white'; error += false;}
			else {piso.style.backgroundColor='red'; error += true;}
			
			if(pat_depto.test(depto.value)||!isNaN(depto.value)){depto.style.backgroundColor='white'; error += false;}
			else {depto.style.backgroundColor='red'; error += true;}
			
			if(error>0)return false;
			else return true;
			
			
		}

		
	</script>
</body>
</html>
<?php session_destroy(); ?>