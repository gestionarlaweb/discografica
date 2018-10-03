<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="<?php echo CDN;?>/assets/css/font-awesome-n.min.css">

    <title>Discográfica :: Pixeden</title>
    <link rel="icon" type="image/svg+xml" href="<?php echo CDN;?>/assets/img/urku-ico.svg">
    <link rel="stylesheet" href="<?php echo CDN;?>/assets/css/aurora-pack.min.css">
    <link rel="stylesheet" href="<?php echo CDN;?>/assets/css/aurora-theme-base.min.css">
    <link rel="stylesheet" href="<?php echo CDN;?>/assets/css/urku.css">
    <link rel="stylesheet" href="<?php echo CDN;?>/assets/css/animate.css">
  </head>
  <body class="top-fixed">
    <header class="ae-container-fluid ae-container-fluid--full rk-header ">
      <input type="checkbox" id="mobile-menu" class="rk-mobile-menu">
      <label for="mobile-menu">
        <svg>
          <use xlink:href="<?php echo CDN;?>/assets/img/symbols.svg#bar"></use>
        </svg>
        <svg>
          <use xlink:href="<?php echo CDN;?>/assets/img/symbols.svg#bar"></use>
        </svg>
        <svg>
          <use xlink:href="<?php echo CDN;?>/assets/img/symbols.svg#bar"></use>
        </svg>
      </label>
      <div class="ae-container-fluid rk-topbar">
        <h1 class="rk-logo"><a href="artistas">Todo música<sup>tm</sup></a></h1>
        <nav class="rk-navigation">
          <ul class="rk-menu">
            <li class="rk-menu__item"><a href="<?php echo base_url("/index.php/cont_Artistas/artistas");?>" class="rk-menu__link">Inicio</a>
            </li>
            <li class="rk-menu__item"><a href="" class="rk-menu__link">Administrar</a>
              <nav class="rk-menu__sub">
                <ul class="rk-container">
                  <li class="rk-menu__item">
                    <a href="<?php echo base_url("/index.php/cont_Registro/registrar_artista");?> " 
                      class="rk-menu__link">Artistas</a>   
                    </li>
                  </li>
                  <li class="rk-menu__item">
                    <a href="<?php echo base_url("/index.php/cont_Registro/registrar_lp");?>" 
                      class="rk-menu__link">LP's</a>
                  </li>
                </ul>
              </nav>
            </li>
          </ul>
        </nav>
      </div>
    </header>

      <section class="ae-container-fluid ae-container-fluid--inner rk-blog">
        <div class="rk-blog__items">
          <div class="rk-blog__item">
            
             <!-- esta parte solo quiero que se cargue cuando vaya a la página de Artistas -->
         
          </div>     
        </div>
      </section>






    <div class="col-md-12">
        <div>
            <?php echo $contenido; ?>
        </div>
    </div>





      
    </section> <!--   -->
    <footer class="ae-container-fluid rk-footer ">
      <div class="ae-grid ae-grid--collapse">
        <div class="ae-grid__item item-lg-4 au-xs-ta-center au-lg-ta-left">
          <ul class="rk-menu rk-footer-menu">
            <li class="rk-menu__item"><a href="http://gestionarlaweb.com" class="rk-menu__link">About</a>
            </li>
            
            <li class="rk-menu__item">
              <a class="rk-menu__link" ><?php echo mailto ( ' gestionarlaweb@gmail.com ' ,  'Contactar' ); ?> </a>
            </li>
          </ul>
          <p class="rk-footer__text rk-footer__copy "> <span class="ae-u-bold">© </span><span class="ae-u-bolder">2018 Gestionarlaweb </span>All Right Reserved.</p>
        </div>
        <div class="ae-grid__item item-lg-4 au-xs-ta-center au-lg-ta-left">
            
        </div>
        <div class="ae-grid__item item-lg-4 au-xs-ta-center au-lg-ta-right">
          <p class="rk-footer__text rk-footer__contact "> 
            <span class="ae-u-bold">Email: </span>
            <span class="ae-u-bolder"> 
              <a href="" class="rk-dark-color ">gestionarlaweb@gmail.com </a>
            </span>
          </p>
          <p class="rk-footer__text rk-footer__by">Creado por <a href="http://gestionarlaweb.com" class="ae-u-bolder">gestionarlaweb.com</a></p>
        </div>
      </div>
    </footer>
    <script src="<?php echo CDN;?>/assets/js/svg4everybody.min.js"></script>
    <script>svg4everybody();</script>
  </body>
</html>