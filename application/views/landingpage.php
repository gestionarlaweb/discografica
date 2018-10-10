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

            <?php if($this->session->userdata('logeado')){ ?>
               <li class="rk-menu__item"><a href="<?php echo base_url("/index.php/cont_Login/logout");?>" class="rk-menu__link">Cierra sesión</a>
              </li>
              <?php }else{ ?>          

  
            <li class="rk-menu__item"><a href="<?php echo base_url("/index.php/cont_Login/logeado");?>" class="rk-menu__link">Login</a>
              <nav class="rk-menu__sub">
                <ul class="rk-container">
                  
                    
                  <!-- LOGEARSE -->
                    <div class="col-md-4 text-center">
                        <form action="<?php echo base_url("/index.php/cont_Login/logeado/")?>" method="post">
                          <div class="form-group has-feedback">
                            <input type="email"  name="email" class="form-control" placeholder="Email">
                           
                          </div>
                          <div class="form-group has-feedback">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                            
                          </div>
                          <div class="row">
                            <!-- /.col -->
                            <div class="col-xs-4">
                           
                              <button type="submit" class="btn btn-primary">Logearse</button> 
                            </div>
                            <!-- /.col -->
                          </div>
                        </form>
                    </div>
                 
                 
                </ul>
              </nav>
            </li>

          <?php } ?>
    
 


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