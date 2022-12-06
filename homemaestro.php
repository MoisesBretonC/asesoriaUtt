<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
          <?php
          session_start();
           $nom= $_SESSION['nombre'];

           if(!isset($nom)){
             header("location:login.html");
           }else{  
             echo "<h2> Bienvenido $nom</h2>";
           }
          ?>
<form method="POST" action="update.php" >
          <h2>Actualizar los datos personales</h2>
          <br>
          <?php
            include ("conexion.php");

            $query = "SELECT administrativos.nombre AS'nombre', administrativos.ape_Pat AS'Apellido Paterno', administrativos.ape_Mat AS 'Apellido Materno', materias.materia AS'Materia',
             edificio.edificio AS'Edificio', carreras.carrera AS'Carrera', administrativos.telefono AS'Telefono' FROM administrativos
            INNER JOIN materias ON administrativos.id_materia = materias.id_materias INNER JOIN edificio ON administrativos.id_edificio = edificio.id_edificio INNER JOIN carreras ON administrativos.id_carrera = carreras.id_carrera" WHERE ;
            $resul = $conexion->query($query);

            while($row = $resul->fetch_assoc()){
              ?>
          <label for="">Ingresa tu nombre : </label>
          <input type="text" name="nombre" value="<?php echo $row['nombre'];?>">
          <br>
          <br>
          <label for="">Escribe tus apellidos :</label>
          <input type="text" name="apepat" value="<?php echo $row['Apellido Paterno'];?>">
          <input type="text" name="apemat" value="<?php echo $row['Apellido Materno'];?>">
          <br>
          <br>
          <label>Escribe tu telefono :</label>
          <input name='telefono' value="<?php echo $row['Telefono'];?>">
          <br>
          <br>
          <!-- <label for="">Escribe tu clave escolar (esta no sera visible) : </label> -->
          <!-- <input type="text" name="clave" value=";?>"> -->
          <label for="">Materia en la que actualmente estas apoyando :   </label>
          <input value="<?php echo $row['Materia'];?>">
          <label for="">Selecciona la materia en la que te gustaria apoyar :</label>
          <select name="materia" require>
          <?php
          include("conexion.php");
          $Materia = "SELECT * FROM materias";
          $query= mysqli_query($conexion,$Materia);

          while($row = mysqli_fetch_array($query)){
            $idmateria = $row['id_materias'];
            $materia = $row['materia'];
            ?>
            <option value="<?php echo $idmateria?>"><?php echo $materia;?></option>
            <?php
          }
            ?> 
          </select>
          <br>
          <br>
          <input type="submit" value="Actualizar Datos" class="boton">
          <?php
            }
            ?>
    </form>
    <a href="cerrarsesion.php">Cerrar sesion</a>
</body>
</html>
