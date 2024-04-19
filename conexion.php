<?php
function retornarConexion() {
    $server="mysql.webcindario.com";
    $usuario="techno";
    $clave="Lokendo26";
    $base="techno";
    $con=mysqli_connect($server,$usuario,$clave,$base) or die("problemas") ;
    mysqli_set_charset($con,'utf8'); 
    return $con;
}
?>