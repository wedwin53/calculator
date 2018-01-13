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
		<div class="form-group">
			<label class="radio-inline"><input type="radio" name="optradio">Miami - CR</label>
			<label class="radio-inline"><input type="radio" name="optradio">CR - VZLA</label>
		</div>
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
		<div class="btn-group margin-bottom">
			<input class="btn btn-success" type="button" id="enviar" value="Calcular" />
			<input class="btn btn-info" type="reset" value="Limpiar" />
		</div>
		<h2></h2>

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
	var libra_adicional = 5;
$(function() {
	var resultado;
	$("#enviar").click(function(){
		resultado = (parseFloat(alt.value).toFixed(2) * parseFloat(anch.value).toFixed(2) * parseFloat(larg.value).toFixed(2)) / 166;
		if (resultado > parseFloat(pes.value).toFixed(2)) {
			//resultado_final = resultado.value * costo_libra;
			resultado2 = ((resultado - 1) * libra_adicional ) + costo_libra;
			$("h2").html("Estimado a Pagar es: <strong>" + parseFloat(resultado2).toFixed(2) + "$ USD</strong> (Peso Volumen)");

		} else {
			resultado_final = ((parseFloat(pes.value).toFixed(2) - 1) * libra_adicional) + costo_libra;
			$("h2").html("Estimado a Pagar es: <strong>" + parseFloat(resultado_final).toFixed(2) + "$ USD</strong> (Peso Fisico)");

		}

	});

});


</script>
</body>
</html>
