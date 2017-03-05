<?php
function conexion()
{
 if (!($link=mysql_connect("localhost","root","12345678")))
   {
      echo "Error conectando a la base de datos.";
      exit();
   }
   if (!mysql_select_db("biblioteca",$link))
   {
      echo "Error seleccionando la base de datos.";
   }
   mysql_query ("SET NAMES 'utf8'");
   return $link;
}
conexion();
?>
<?php



function insertar($tabla,$insertar)
            {
       
         $query       = "INSERT INTO $tabla VALUES($insertar)";
                 $resultado   = mysql_query($query);
                  $tuplas      = mysql_affected_rows();
         //echo " estas son las putlas $tuplas";
                 //mysql_free_result($resultado);
              if($tuplas <= 0)
                 return($retorno=FALSE);
               else
                 return $tuplas;
            }

function busqueda($tabla,$campos,$condicion,$orden,&$num_campos,&$num_filas)
            { 
             $query      = "SELECT $campos FROM $tabla $condicion $orden";
             $resultado  = @mysql_query($query);
             $num_filas  = @mysql_num_rows($resultado);
             $num_campos = @mysql_num_fields($resultado);
             if($num_filas!=0)
                 { 
               $i = 0;
                while ($retorno[$i] = @mysql_fetch_array($resultado, MYSQL_NUM)) 
                  {
                     $i++;
                       }
                      @mysql_free_result($resultado);
                      return $retorno;
                 }
                elseif($num_filas == 0 || $resultado == FALSE) 
                 { 
                  @mysql_free_result($resultado);
                  
                      return FALSE; 
                } 
            } 

function modificar($tabla,$campos,$condicion)
            {
              $query       = "UPDATE $tabla SET $campos $condicion ";
              $resultado   = mysql_query($query);
              $tuplas      = mysql_affected_rows();
                
              if($resultado !== FALSE)
                 return $tuplas;
              else
              return($retorno=FALSE);
                 

            }  
function eliminar($tabla,$condicion) 
            {
              $query      = "DELETE FROM $tabla $condicion";
              $resultado  = @mysql_query($query);
              $tuplas     = @mysql_affected_rows();
               
              if($resultado !== FALSE)
                 return $tuplas;
              else
              return($retorno=FALSE);
                  
            }  
function busqueda_total($registro,&$num_campos,&$num_filas)
            { 
              $query      = "SELECT * FROM $biblioteca";
              $resultado  = @mysql_query($query);
              $num_filas  = @mysql_num_rows($resultado);
              return $num_filas;
           }


       
?>