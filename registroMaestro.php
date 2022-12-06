<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="registroM.php" >
          <h1>Registar perfil</h1>
          <h2>Datos personales</h2>
          <br>
          <label for="">Ingresa tu nombre : </label>
          <input type="text" name="nombre" required placeholder="Escribe tu nombre(s)">
          <br>
          <br>
          <label for="">Escribe tus apellidos :</label>
          <input type="text" name="apepat" required placeholder="Escribe tu apellido">
          <input type="text" name="apemat" required placeholder="Escribe tu apellido">
          <br>
          <br>
          <label for="">Escribe tu clave escolar (esta no sera visible) : </label>
          <input type="text" name="clave" required placeholder="Escribe tu clave escolar">
          <label for="">Selecciona la materia en la que te gustaria apoyar :   </label>
          <select name="materia" required>
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
          <label for="">Selecciona el edificio en el que impartes clases : </label>
          <select name="edificio" required>
          <?php
          include("conexion.php");
          $Edificio = "SELECT * FROM edificio";
          $query= mysqli_query($conexion,$Edificio);

          while($row = mysqli_fetch_array($query)){
            $idEdificio = $row['id_edificio'];
            $edificio = $row['edificio'];
            ?>
            <option value="<?php echo $idEdificio?>"><?php echo $edificio;?></option>
            <?php
          }
            ?> 
          </select>
          <label for="">Selecciona la carrera en la que impartes clases: </label>
          <select name="carrera" required>
          <?php
          include("conexion.php");
          $Carrera = "SELECT * FROM carreras";
          $query= mysqli_query($conexion,$Carrera);

          while($row = mysqli_fetch_array($query)){
            $idcarrera = $row['id_carrera'];
            $carrera = $row['carrera'];
            ?>
            <option value="<?php echo $idcarrera?>"><?php echo $carrera;?></option>
            <?php
          }
            ?> 
          </select>
          <label for="">Escrbe tu correo electronico : </label>
          <input type="email" name="correo" required placeholder="Escribe tu Email">
          <br>
          <br>
          <label for="">Crea una contraseña :</label>
          <input type="password" name="contrasena" required placeholder="Crea una contrasena">
          <br>
          <br>
          <label>Escribe tu telefono :</label>
          <input type="text" name='telefono' required placeholder="matricula">
          <br>
          <br>
          <input type="submit" value="Enviar Datos" class="boton";>

/////////


    </form>
</body>
</html>