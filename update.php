<?php
        function actualizado(){
            ?>
            <script >alert("Los datos del registro se han actualizado correcamente");</script>
            <?php
        }
        function noactualizado(){
          ?>
          <script>alert("Los datos no se actualizaron de manera correcta");</script>
          <?php
        }
include "conexion.php";

$nombre=$_POST['nombre'];
$apepat=$_POST['apepat'];
$apemat=$_POST['apemat'];
$materia=$_POST['materia'];
$telefono=$_POST['telefono'];

$consulta ="UPDATE administrativos SET nombre='$nombre',ape_Pat='$apepat',ape_Mat='$apemat', id_materia='$materia', telefono='$telefono'";
$query=mysqli_query($conexion,$consulta);

if($query){
    actualizado();
    include "homemaestro.php";
}else {
    noactualizado();
    include "homemaestro.php";
}
?>
