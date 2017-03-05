<?php
		include ('../lib/funciones.php');
		$conexion=conexion();

		$codigo= $_POST['codigo'];
		$mueble= $_POST['mueble'];
		$descripcion= $_POST['descripcion'];
		$fecha= $_POST['fecha'];
		$sala= $_POST['sala'];
		$cantidad= $_POST['cantidad'];
		$tabla="bienes";
		$insertar_mue="'$codigo', '$mueble', '$descripcion', '$fecha', '$sala','$cantidad' ";

		$registro=insertar($tabla,$insertar_mue);
		if ($registro>0) {
			?>
			<script>
				alert("Registro Correcto!!!!!!");
				{				self.location.href='../inicio.html';

				}
			</script>
				<?php
		}
		else{	
?>
			<script>
				alert("Ha ocurrido un error, por favor intente de nuevo");
				{				self.location.href='rusuario.html';

				}
			</script>
			
<?php
						}
?>