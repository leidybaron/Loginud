<?php

$host="localhost";
$port=3306;
$user="root";
$password="mysql2018";
$dbname="ud";

$conexion= mysqli_connect($host, $user, $password, $dbname,$port);
$cadena="SELECT nombre,clave FROM usuario";
$resultado=mysqli_query($conexion,$cadena);


 if(mysqli_num_rows($resultado)>0)
{
  
    $registro= mysqli_fetch_assoc($resultado);
    
        //echo"usuario: ".$registro["nombre"];
       //echo"<br> clave: ".$registro["clave"];
        
        if($_REQUEST["usuario"]==$registro["nombre"] && $_REQUEST["clave"]==$registro["clave"])
        {
            echo"ACCESO CORRECTO";
            echo"<br>usuario: ".$registro["nombre"];
            echo"<br>clave: ".$registro["clave"];
            
        }
        else
        {
            echo"ACCESO DENEGADO";
            echo"<br>INGRESE NUEVAMENTE LOS DATOS";
        }
         
    
   
}
 else {
    echo"NO HAY RESULTADOS";
}


//$con->close();


