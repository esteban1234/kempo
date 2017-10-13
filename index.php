<!DOCTYPE html>
<?php include 'vistas/encabezado.php' ?>
<body>

<div class="banner">
<div class="fondo">
  <header>
    <figure class="logo">
      <img src="img/kempo.png" alt="KEMPO" class="img-responsive">
    </figure>
    <nav>
      <ul>
        <a class="selector" id="select" href="index.php">INICIO</a>
        <a class="selector" href="vistas/nosotros.php">NOSOTROS</a>
        <a class="selector" href="vistas/servicios.php">PRODUCTOS</a>
        <a class="selector" href="vistas/contacto.php">CONTACTO</a>
      </ul>
    </nav>
  </header>

  <p>Adquiere lo más moderno en electrodomésticos y línea blanca</p>

  <div class="boton">
    <a href="vistas/servicios.php"><button type="button" class="btn btn-warning btn-lg btn-block"><i class="fa fa-map-o" aria-hidden="true"></i> PRODUCTOS</button></a>
  </div>
</div>
</div>

<div class="seccion1">
  <div class="col-md-3 uno">
    <h1 class="text-right tit">Productos destacados</h1>
    <p class="text-right text">¡Conoce los<br> nuevos productos <br> y aprovecha los <br> descuentos!</p>
    <div class="icono"><i class="fa fa-cart-arrow-down fa-5x" aria-hidden="true"></i></div>
  </div>
  <div class="col-md-9 " style=" padding: 0px; margin:none;">
    <div class="col-md-4 unoo">
      <figure class="imagen">
        
      </figure>
      <p class="subtit">Plancha Ultraglide FV4016Q1</p>
    </div>
    <div class="col-md-4 unoo">
      <figure class="imagen2">
        
      </figure>
      <p class="subtit">LRI-15BLSA Lavadora De Dos Tinas</p>
    </div>
    <div class="col-md-4 unoo">
      <figure class="imagen3">
        
      </figure>
      <p class="subtit">KC-1800 Aspiradora Koblenz</p>
    </div>
  </div>
</div>

<div class="contenbanner">
  <div class="container">
    <div class="textobanner col-md-8">
      <p>¿Eres mayorista, constructor o desarrollador inmobiliario?</p>
       <div class="boton2">
    <a href="vistas/contacto.php"><button type="button" class="btn btn-warning btn-lg btn-block"><i class="fa fa-phone" aria-hidden="true"></i> CONTACTANOS</button></a>
  </div>
    </div>
    <figure class="imagenbanner col-md-4">
      
    </figure>
  </div>
</div>

<div class="container" style="margin-bottom: 5%;">
  <h1 class="text-marcas">Marcas que manejamos</h1>
  <hr>
    <div class="row">
    <div class="col-md-12">
                <div id="Carousel" class="carousel slide">
                 
                <ol class="carousel-indicators">
                    <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#Carousel" data-slide-to="1"></li>
                    <!-- <li data-target="#Carousel" data-slide-to="2"></li> -->
                </ol>
                 
                <!-- Carousel items -->
                <div class="carousel-inner">
                    
                <div class="item active">
                  <div class="row">
                    <div class="col-md-3"><a href="#" class="thumbnail"><img src="img/uno.png" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-3"><a href="#" class="thumbnail"><img src="img/dos.png" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-3"><a href="#" class="thumbnail"><img src="img/3.png" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-3"><a href="#" class="thumbnail"><img src="img/cuatro.png" alt="Image" style="max-width:100%;"></a></div>
                  </div><!--.row-->
                </div><!--.item-->
                 
                <div class="item">
                  <div class="row">
                    <div class="col-md-3"><a href="#" class="thumbnail"><img src="img/cinco.png" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-3"><a href="#" class="thumbnail"><img src="img/seis.png" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-3"><a href="#" class="thumbnail"><img src="img/siete.png" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-3"><a href="#" class="thumbnail"><img src="img/ocho.png" alt="Image" style="max-width:100%;"></a></div>
                  </div><!--.row-->
                </div><!--.item-->
                
                 
                </div><!--.carousel-inner-->
                  <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
                  <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
                </div><!--.Carousel-->
                 
    </div>
  </div>
</div><!--.container-->

<a class="go-top" href="#">Subir</a>
<?php include 'vistas/pie.php' ?>


<script src="js/jquery.js"></script>
<script src="js/menu.js"></script>
<script src="js/slide.js"></script>
<script src="js/arriba.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>