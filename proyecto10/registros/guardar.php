<?php
		include ('../lib/funciones.php');
		$conexion=conexion();
		$titulo= $_POST['titulo'];
		$autor= $_POST['autor'];
		$codigo= $_POST['codigo'];
		$editorial= $_POST['editorial'];
		$anio= $_POST['anio'];
		$volumen= $_POST['volumen'];
		$clasificacion= $_POST['clasificacion'];
		$cantidad= $_POST['cantidad'];
		$tabla="libros";
		$guardar="'$titulo', '$autor', '$codigo', '$editorial', '$anio','$volumen','$clasificacion', '$cantidad'";


		$registro=insertar($tabla,$guardar);
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
				alert("Ha ocurrido un error, porfavor intente de nuevo");
				{				self.location.href='rlibro.html';

				}
			</script>
			
<?php
						}
?>