<!DOCTYPE html>
<html>
<head>
	<title>Labs</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="stilos.css"/>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<!-- CUERPO DEL CODIGO -->
<body>
<!-- menu superior -->
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">Labs</a>
	    </div>
	    <ul class="nav navbar-nav">
	      <li class="active"><a href="#">Home</a></li>
	      <li><a href="#">Page 1</a></li>
	      <li><a href="#">Page 2</a></li>
	      <li><a href="#">Page 3</a></li>
	    </ul>
	  </div>
	</nav>
<!-- contenedor principal -->
<div class="container">
	<fieldset>
		<legend>Calculadora</legend>
	<div class="form-group">
		<div class="input-group margin-bottom-sm">
		  <span class="input-group-addon"><i class="fa fa-balance-scale fa-fw"></i></span>
		  <input class="form-control" type="text" placeholder="Peso en Kilos" name="peso" id="peso" required>
		</div>
		<div class="input-group margin-bottom-sm">
			<span class="input-group-addon"><i class="fa fa-arrows-v fa-fw"></i></span>
			<input class="form-control" type="text" placeholder="Alto" name="alto" id="alto" required>
		</div>
		<div class="input-group margin-bottom-sm">
			<span class="input-group-addon"><i class="fa fa-arrows-h fa-fw"></i></span>
			<input class="form-control" type="text" placeholder="Ancho" name="ancho" id="ancho" required>
		</div>
		<div class="input-group margin-bottom-sm">
			<span class="input-group-addon"><i class="fa fa-arrows-alt fa-fw"></i></span>
			<input class="form-control" type="text" placeholder="largo" name="largo" id="largo" required>
		</div>
		<div class="input-group margin-bottom-sm">
			<span class="input-group-addon"><i class="fa fa-bars fa-fw"></i></span>
			<select class="form-control" id="arancel" name="arancel" required>
				<option selected>Seleccione...</option>
				<option value="0.25">Ropa 25% </option>
			</select>
		</div>
		<hr/>
		<div class="input-group margin-bottom">
			<input class="btn btn-success" type="submit" id="enviar" value="Calcular" />
		</div>
		<h1 class="display-4"></h1>

	</div>
</fieldset>
</div>
<!-- SECCION DE SCRIPTS  -->
<script type="text/javascript">
	var pes = document.getElementById("peso");
	var alt = document.getElementById("alto");
	var anch = document.getElementById("ancho");
	var larg = document.getElementById("largo");
	var aran = document.getElementById("arancel");
	var costo_libra = 7;
$(function() {
	var resultado;
	$("#enviar").click(function(){
		resultado = (parseInt(alt.value) * parseInt(anch.value) * parseInt(larg.value)) / 166;
		if (resultado > pes.value) {
			resultado_final = resultado * costo_libra;
			$("h1").append(parseInt(resultado_final));
		}
			resultado_final = parseInt(pes.value * costo_libra);
			$("h1").append("Estimado a Pagar es: <strong>" + parseInt(resultado_final) + "$</strong>");

		//alert(resultado);
	});

});


</script>
</body>
</html>
