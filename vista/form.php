<?php
	
	include("conexion.php");
	$conn=conectarse();
	$cedula=$_POST['cedula'];
		$sql= "SELECT * FROM registro where cedula='$cedula'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) >0)
		{
            $row=mysqli_fetch_assoc($result);
		
		
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<meta charset="UTF-8">
</head>
<body style="background-color: #23242a;">
    <center>
        <br><br><p style="color: white;">cedula</p>
    <form action="" method="" >
    <input type="text" name="cedula" value="<?php echo $row['cedula']?>" id="iden">
    <br><br><p style="color: white;">nombre</p>
    <input type="text" name="nombre" value="<?php echo $row['nombre']?>" id="iden">
    <br><br><p style="color: white;">dirección</p>
    <input type="text" name="direccion" value="<?php echo $row['direccion']?>" id="iden">
    <br><br><p style="color: white;">telefono</p>
    <input type="text" name="telefono" value="<?php echo $row['telefono']?>" id="iden">
    <br><br><p style="color: white;">correo</p>
    <input type="text" name="correo" value="<?php echo $row['correo']?>" id="iden">
    <br><br><p style="color: white;">contraseña</p>
    <input type="text" name="contrasena" value="<?php echo $row['contrasena']?>" id="iden">
    </form>
    <?php
        }
    ?>
   </center> 
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>
</html>