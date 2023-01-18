
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/nostros.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link href="../css/style.css" rel="stylesheet" type="text/css">

    <title>Distritrebol</title>
</head>
<body >
    
    <div >

    <head>
    <nav class="navbar sticky-top navbar-expand-lg " style="background-color:#7A542D  ;opacity: 90%;padding: 6px 0 ;">
    <div class="container-fluid " >
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
        <a href="../index.html" style="color:white;margin-right: 30px;margin-left: 30px;" class="link navbar-brand"><li>Inicio</li></a>
        </li>
          <li class="nav-item">
            <a href="../vista/tienda.html" style="color:white;margin-right: 30px;margin-left: 30px;" class="link nav-link active "  aria-current="page"><li>Tienda</li></a>
          </li>
          <li class="nav-item">
            <a href="../vista/nosotros.html" style="color:white;margin-right: 30px;margin-left: 30px;" class="link nav-link active "  aria-current="page"><li>Contacto</li></a>
          </li>
          <li class="nav-item">
            <a href="../vista/login.php" style="color:white;margin-right: 30px;margin-left: 30px;" class="link nav-link active "  aria-current="page"><li>login</li></a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
        

    </head>
    <?php
    include("../vista/conexion.php");
    $conn=Conectarse();
    $consulta="SELECT id, ruta FROM galeria";
    $result1=mysqli_query($conn,$consulta);
    $sql= "SELECT * FROM producto ";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) >0)
		{
            $row=mysqli_fetch_assoc($result);		
    ?>
    <div id="baner" >
        <?php
        while ($row1 = mysqli_fetch_array($result1)){
            
        ?>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-light" ><strong ><?php echo $row['nombre']?></strong></h5>
              <img src='<?php echo $row1['ruta']; ?>'  alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description" ><?php echo $row['descripcion']?> </p>
                <h5 class="text-light">Precio: <span class="precio" >$ <?php echo $row['precio']?> </span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
    <div style>  
        
    </div>  
        <?php    
        }
    }
        ?>
      </div>
    <!-- Footer -->
  <footer>

    <div class="contact-info">

      <div class="contact">
        <ul>
          <li><a href="#">Contáctanos</a></li>
          <li><a href="#">Politica de privacidad</a></li>
          <li><a href="#">Politica de reembolso</a></li>
          <li><a href="#">Términos del servicio</a></li>
        </ul>
      </div>

      <div class="social-media">
        <p>Siguenos</p>
        <ul>
          <li><a href="https://www.facebook.com/profile.php?id=100087281747074" target="_blank"
            ><img src="../img/facebook.png" title="facebook"
          /></a></li>
          <li><a href="https://www.twitter.com" target="_blank"
            ><img src="../img/twitter.svg" title="twitter"
          /></a></li>
        </ul>
      </div>

      <div class="social-media">
        <p>©2022, Distritrebol</p>
        <ul>
          <li><a href="#" target="_blank"
            ><img src="../img/logo propio.png" title="twitter"
          /></a></li>
          <li><a href="#">Luis Miguel</a></li>
        </ul>
      </div>

    </div>
  </div>
  </footer>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>