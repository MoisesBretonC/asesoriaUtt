
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homealumno.css">
    <title>Document</title>
</head>
<body>
       
    <table> 
      <img src="utt.jpeg" width = "200px">
     
      <?php
          session_start();
           $nom= $_SESSION['nombre'];

           if(!isset($nom)){
             header("location:login.html");
           }else{  
             echo "<center><h3> Bienvenido $nom</h3> </center>";
           }
          ?>
          </table>

       
        <tbody>
 
        
          <?php
            include ("conexion.php");

            $query = "SELECT administrativos.nombre AS'nombre', administrativos.ape_Pat AS'Apellido Paterno', administrativos.ape_Mat AS 'Apellido Materno', materias.materia AS'Materia',
             edificio.edificio AS'Edificio', carreras.carrera AS'Carrera', administrativos.telefono AS'Telefono' FROM administrativos
            INNER JOIN materias ON administrativos.id_materia = materias.id_materias INNER JOIN edificio ON administrativos.id_edificio = edificio.id_edificio INNER JOIN carreras ON administrativos.id_carrera = carreras.id_carrera";
            $resul = $conexion->query($query);

            while($row = $resul->fetch_assoc()){
              ?>
             
    
    <div class="container">
       
        <div class="card">
            <img src="javier.jpeg" width="20px">
            <h4>Profesor</h4>
          <label for="">Profesor:</label>       
          <input type="text" name="apepat" value="<?php echo $row['nombre'];?><?php echo $row['Apellido Paterno'];?> <?php echo $row['Apellido Materno'];?>">
          <br>
          <label>Telefono:</label>
          <input name='telefono' value="<?php echo $row['Telefono'];?>">
          <br>
          <!-- <label for="">Escribe tu clave escolar (esta no sera visible) : </label> -->
          <!-- <input type="text" name="clave" value=";?>"> -->
          <label for="">Materia de apoyo:   </label>
          <input value="<?php echo $row['Materia'];?>">

        </div>
        
        <div class="card">
            <img src="img/img2.jpg">
            <h4>Profesor2</h4>
            
        </div>
        
        <div class="card">
            <img src="img/img3.jpg">
            <h4>Profesor3</h4>
           
        </div>
        
    </div>

    <br>
       <br>
       <br>
       <center><a href="cerrarsesion.php" id="Cerrar">Cerrar sesion</a></center>


              <?php
            }
            ?>
        </tbody>
       </table>
      
</body>
</html>
