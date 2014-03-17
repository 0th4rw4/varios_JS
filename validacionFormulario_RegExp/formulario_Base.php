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

	<form action="procesar.php" method="post" id="comprar">
		<h2>Checkout!</h2>
		<fieldset><legend>Datos personales</legend>
			<div><span>Nombre</span><input type="text" name="nombre" id="nombre" /></div>
			<div><span>Apellido</span><input type="text" name="apellido" id="apellido" /></div>
			<div><span>DNI</span><input type="text" name="dni" id="dni" /></div>
			<div><span>F. Nacimiento</span><input type="text" name="fecha" id="fecha" /></div>
			<div><span>Foto</span><input type="file" name="foto" id="foto" /></div>
		</fieldset>
		
		<fieldset><legend>Registro para seguimiento</legend>
			<div><span>Email</span><input type="text" name="email" id="email" /></div>
			<div><span>Usuario</span><input type="text" name="usuario" id="usuario" /></div>
			<div><span>Clave</span><input type="text" name="clave" id="clave" /></div>
		</fieldset>
		
		<fieldset><legend>Domicilio de entrega</legend>
			<div><span>Calle</span><input type="text" name="calle" id="calle" /></div>
			<div><span>Numero</span><input type="text" name="numero" id="numero" /></div>
			<div><span>Piso</span><input type="text" name="piso" id="piso" /></div>
			<div><span>Depto</span><input type="text" name="depto" id="depto" /></div>
		</fieldset>
		<div><input type="submit" value="Cerrar compra!" /></div>
	</form>
	<script type="text/javascript">
	
		document.getElementById('comprar').onsubmit = function(){
			
			var pat = /^\b(s\/n|pb|\d*)\b$/;
			var n = document.getElementById('piso').value;
			var rta = pat.test(n);
			alert(rta);
			return false;
		}
		
	</script>
</body>
</html>