<html>

<head>

	<title>APRENDIENDO-PHP</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>
<ol>
	<li><a href="iniciando.php">iniciando</a></li>
	<li><a href="ejemploOperadores.php">Operadores</a></li>
	<li>conexion</li>


</ol>



<div class="row" >
		<div class="col-lg-4">
		</div>

		<div class="col-lg-4 card">
		<div class="card-header">
		<p>ingrese sesión</p>
		</div>
			<div class= "card-body">
					<form >
						<div class="form-group">
						<label for="nombre">nombre:</label>
						<input type="nombre" class="form-control" id="nombre">
						</div>
						<div class="form-group">
						<label for="dni">dni:</label>
						<input type="dni" class="form-control" id="dni">
						</div>
						<div class="checkbox">
						<label><input type="checkbox"> Remember me</label>
						</div>
						<button id="registrar" type="button" class="btn bg-success-400 btn-labeled btn-labeled-left"> Registrar</button>
					</form>
				</div>
			</div>
		</div>	
</div>
</body>

<script>

	$(function(){
            $('#registrar').on('click', function(){
                console.log('Nombre del usuario:');
                var nombre = $('#nombre').val();
                console.log(nombre);

                console.log('DNI:');
                var dni = $('#dni').val();
                console.log(dni);
            })
        });



</script>



</html>

