<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio</title>
    <?php include './inc/link.php'; ?>
<style>
  .image-container {
    background-color: #fff; /* Fondo blanco */
    padding: 20px; /* Espacio entre el fondo y las imágenes */
  }
.image-collage {
    display: flex;
    flex-wrap: wrap;
  }

  .image-collage img {
    flex: 1;
    max-width: 100%;
    height: auto;
    transition: transform 0.2s;
  }

  .image-collage img:hover {
    transform: scale(1.05);
  }

  .image-link {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: rgba(0, 0, 0, 0.5);
    color: #fff;
    text-align: center;
    opacity: 0;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    transition: opacity 0.2s;
  }

  .image-collage img:hover + .image-link {
    opacity: 1;
  }
</style>
</head>
<body id="container-page-index">
    <?php include './inc/navbar.php'; ?>
    <div class="jumbotron" id="jumbotron-index">
      <h1><span class="tittles-pages-logo">Latinox</span> <small style="color: #fff;">San Luis Potosí, S.L.P.</small></h1>
      <p>
          Bienvenido a nuestra tienda en linea, aquí encontrara una gran variedad de artículos con base a las mejores aleaciones de aceros y metales.
      </p>
    </div>
    <section id="new-prod-index">
         <div class="container">
            <div class="page-header">
                <h1>Novedades <small>productos</small></h1>
            </div>
            <div class="row">
              <?php
                  include 'library/configServer.php';
                  include 'library/consulSQL.php';
                  $consulta= ejecutarSQL::consultar("select * from producto where Stock > 0 limit 6");
                  $totalproductos = mysqli_num_rows($consulta);
                  if($totalproductos>0){
                      while($fila=mysqli_fetch_array($consulta)){
                         echo '
                        <div class="col-xs-12 col-sm-6 col-md-4">
                             <div class="thumbnail">
                               <img src="assets/img-products/'.$fila['Imagen'].'">
                               <div class="caption">
                                 <h3>'.$fila['Marca'].'</h3>
                                 <p>'.$fila['NombreProd'].'</p>
                                 <p>$'.$fila['Precio'].'</p>
                                 <p class="text-center">
                                     <a href="infoProd.php?CodigoProd='.$fila['CodigoProd'].'" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                                     <button value="'.$fila['CodigoProd'].'" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                                 </p>

                               </div>
                             </div>
                         </div>     
                         ';
                     }   
                  }else{
                      echo '<h2>No hay productos registrados en la tienda</h2>';
                  }  
              ?>  
            </div>
         </div>
    </section>
    <section id="reg-info-index">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 text-center">
                   <article style="margin-top:20%;">
                        <p><i class="fa fa-users fa-4x"></i></p>
                        <h3>Registrate</h3>
                        <p>Registrese y hagase cliente de <span class="tittles-pages-logo">Latinox</span> para recibir las mejores ofertas y descuentos especiales de nuestros productos.</p>
                        <p><a href="registration.php" class="btn btn-info btn-block">Registrarse</a></p>   
                   </article>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <img src="assets\img-products\products.jpeg" alt="Smart-TV" class="img-responsive">
                </div>
            </div>
        </div>
    </section>
    <section id="distribuidores-index">
        <div class="container">
            <div class="col-xs-12 col-sm-6">

            </div>
            <div class="col-xs-12 col-sm-6">

            </div>
            <div class="col-xs-12">
                <div class="page-header">
                  <h1>Nuestras <small style="color: #333;">Marcas</small></h1>
                </div>
                <br>
                <div class="image-container">
                    <div class="image-collage">
                        <div>
                            <img src="assets/img/GAcerero.jpg" alt="Grupo Acerero" class="img-responsive">
                            <a href="enlace1.html" class="image-link">Enlace 1</a>
                        </div>
                        <div>
                            <img src="assets/img/simec.png" alt="Grupo Simec" class="img-responsive">
                            <a href="enlace2.html" class="image-link">Enlace 2</a>
                        </div>
                        <div>
                            <img src="assets/img/sigosa.jpeg" alt="Sigosa" class="img-responsive">
                            <a href="enlace3.html" class="image-link">Enlace 3</a>
                        </div>
                        <div>
                            <img src="assets/img/deacero.jpg" alt="Deacero" class="img-responsive">
                            <a href="enlace4.html" class="image-link">Enlace 4</a>
                        </div>
                    </div>
                </div>
                </br>
            </div>
        </div>
    </section>
    <?php include './inc/footer.php'; ?>
</body>
</html>