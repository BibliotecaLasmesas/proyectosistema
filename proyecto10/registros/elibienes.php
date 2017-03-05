<?php
	include ('../lib/funciones.php');
	$conexion=conexion();
	$codigo=$_POST['bn'];
	$condicion="WHERE codigo = $codigo";
	$tabla='bienes';
	$delete=eliminar($tabla,$condicion);
		if  (($delete !=0  )  )
			{
			?>
			<script>
		   				alert("Registro Eliminado Correctamente..."); 
						{              self.location.href='../reportes/reportes_bienes.php';
						 }
		</script>
			<?php
			}
			else
				{
			?>
			<script>
		   				alert(" Ha ocurrido un error, por favor intente de nuevo."); 
						{              self.location.href='../reportes/reportes_bienes.php';
						 }
			</script>
			<?php
	}


?>