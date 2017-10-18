<?php



function GuardarFormularioAlumno($nombre, $apellido, $rut)
{
   require'conexion.php';
   $sql = "INSERT INTO  alumno VALUES(?,?,?)";
   $smt = $conn ->prepare($sql);
   $smt ->bindParam(1, $nombre);
   $smt ->bindParam(2, $apellido);
   $smt ->bindParam(3, $rut);
   $smt ->execute();
   $conn = null;

}

function GuardarFormularioRamo($nombre_ramo, $nota)
{
   require'conexion.php';
   $sql = "INSERT INTO  ramo(nombre_ramo, nota VALUES(?,?,?)";
   $smt = $conn ->prepare($sql);
   $smt ->bindParam(1, $nombre_ramo);
   $smt ->bindParam(2, $nota);
   $smt ->execute();
   $conn = null;

}




if(isset($_REQUEST['alumno_formulario'])){
    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    $rut = $_REQUEST['rut'];

    GuardarFormularioAlumno($nombre, $apellido, $rut)
}


if(isset($_REQUEST['ramo_formulario'])){
    $nombre = $_REQUEST['ramo'];
    $apellido = $_REQUEST['nota'];
    GuardarFormularioRamo($ramo, $nota);
    
}


?>