<!DOCTYPE html>
<html lang = "es">
<head>
    <meta charset= "utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <title>Datos de registro GoFit Centro de Entrenamiento online</title>
    
</head>

<body>
    <P> <a href=" index.html>"> Regresar </a> </p>
    <input type ="button" value="volver" onclick="pvolver();"> <br>
    <input type="button" value="submit" id= "submit" onclick="paginaRedirect();"> <br>
    <!--message-->
    <div id="mensaje"> </div>
    
    <?php
      $nombre = $_POST["nombre"];
      $apellido = $_POST["apellido"];
      $email = $_POST["email"];
      $Fechadenacimiento = $_POST["Fechadenacimiento"];
      $telefono = $_POST["telefono"];
      $contraseña = $_POST["contraseña"];

      print " <p>su nombre es <strong> $nombre <strong>. </p>\n";
      print"\n";
      print " <p>su apellido es <strong> $apellido <strong>. </p>\n";
      print"\n";
      print " <p>su email es <strong> $email<strong>. </p>\n";
      print"\n";
      print " <p>su fecha de nacimiento es <strong> $Fechadenacimiento<strong>. </p>\n";
      print"\n";
      print " <p>su telefono es <strong> $telefono <strong>. </p>\n";
      print"\n";
      print " <p>su contraseña es <strong> $contraseña<strong>. </p>\n";
      print"\n";

      //incluimos los datos de conexion y funciones//
      include("./Conexion.php");
      $con= mysqli_connect($host,$usuario,$clave,$basededatos)or die("no se ha podido conectar al servidor");
      if (!$con){
          die("conexion fallida: ". mysqli_connect_error()); 
      }
      $db = mysqli_select_db($con, $basededatos) or die ( "Upps! no se ha podido conectar a la base de datos" );
$consulta = "INSERT INTO Clientes (Nombre, Apellido,CorreoElectronico,Fechadenacimiento,Telefono,contraseña) VALUES ('$nombre', '$apellido', '$email', '$Fechadenacimiento', '$telefono', '$contraseña')";

// Usamos esas variables:
if (mysqli_query ($con, $consulta)){
    echo "<h3>Registro agregado.</h3>";
    } else {
    echo "<h3>No se agregó nuevo registro</h3>";
    echo "Error: " . $consulta . "<br>" . mysqli_error($con);
 }
 mysqli_close($con);


?>


</body>

</html>