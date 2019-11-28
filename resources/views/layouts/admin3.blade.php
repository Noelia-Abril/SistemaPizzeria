  <!DOCTYPE html>
  <html lang="zxx" class="no-js">
  <head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('img/fav.png')}}">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Divino Sapori</title>

    <link href="{{asset('https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet')}}"> 
      <!--
      CSS
      ============================================= -->
      <link rel="stylesheet" href="{{asset('css/linearicons.css')}}">
      <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
      <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
      <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">        
      <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">              
      <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
      <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">       
      <link rel="stylesheet" href="{{asset('css/main.css')}}">
    </head>
    <body>  
      <header id="header">  
        @if(Auth::user())
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
                  <span class="hidden-xs">Administracion de Cuenta</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-center">
                      <a href="{{url('/logout')}}" class="btn btn-default btn-flat" >Cerrar Sesion</a>

                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>
          @endif
        <div class="header-top">
          <div class="container">
              <div class="row justify-content-center">
                  <div id="logo">
                    <a href="{{asset('index.html')}}"><img src="{{asset('pizzeria/logoDS.jpeg')}}" alt="" title="" style="width: 90px"/></a>
                  </div>
              </div>                  
          </div>
        </div>
        <div class="container main-menu">
          <div class="row align-items-center justify-content-center d-flex">      
              <nav id="nav-menu-container">
                <ul class="nav-menu">
                  @if (Auth::user())
                  <li class="menu-has-children')}}"><a href="">Administracion</a>
                    <ul>
                        <li><a href="{{asset('almacen/cliente')}}">Clientes</a></li>
                        <li><a href="{{asset('almacen/pizza')}}">Pizzas</a></li>
                        <li><a href="{{asset('almacen/ingrediente')}}">Ingredientes</a></li>
                        <li><a href="{{asset('almacen/empleado')}}">Empleados</a></li>
                    </ul>
                  </li>
                      @endif

                  <li><a href="{{asset('pantalla/acercaDe')}}">Acerca De</a></li>
                  <li class="menu-has-children"><a href="">Menu</a>
                    <ul>
                        <li><a href="{{asset('pantalla/menu')}}">Menu Pizzeria</a></li>
                  <li><a href="{{asset('pantalla/galeria')}}">Galeria Menu</a></li>                     
                    </ul>
                  </li>
                  <li><a href="{{asset('almacen/inicio/create')}}">Inicio</a></li>
                  <li><a href="{{asset('pantalla/HazloTu')}}">¡Hazlo Tu Mismo!</a></li> 
                  <li><a href="{{asset('pantalla/contacto')}}">Contacto</a></li>
                </ul>
              </nav><!-- #nav-menu-container -->                      
          </div>
        </div>
      </header><!-- #header -->
      
      <!-- start banner Area -->
      <section class="about-banner relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">       
          <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
              <h1 class="text-white">
                PIZZERIA DIVINO SAPORI      
              </h1> 
            </div>  
          </div>
        </div>
      </section>
      <!-- End banner Area -->  

      <!-- Start home-about Area -->
      <section class="home-about-area section-gap">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 home-about-left">  
              @yield('contenido3')
            </div>
              <div class="col-lg-6 home-about-right">
                <div class="col-lg-12 text-center ">
                    <h3>
                      Menu de la Pizzeria: Elige entre nuestra variada 
                      selección de Pizzas.
                    </h3>
                    <br>
                     <a href="{{asset('pantalla/menu')}}" class="primary-btn">MENU PREDETERMINADO</a>
                </div>
                <br>
               <div class="col-lg-12 text-center">
             
                     <h3>
                         Menu Interactivo: Crea tu propia pizza con la ayuda
                         de nuestra deliciosa gamma de 
                         coberturas y sabores.
                    </h3>
                    <br>
                    <a href="{{asset('pantalla/HazloTu')}}" class="primary-btn">¡HAZLO TU MISMO!</a>
           
              </div>
            </div>
          </div>
        </div>  
      </section>
      
      <!-- End review Area -->    


      <!-- start footer Area -->    
      <footer class="footer-area">
        <div class="footer-widget-wrap">
          <div class="container">
            <div class="row section-gap">
              <div class="col-lg-4  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                  <h4>Horarios de Apertura</h4>
                  <ul class="hr-list">
                    <li class="d-flex justify-content-between">
                      <span>Lunes - Viernes</span> <span>06.00 pm - 10.00 pm</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <span>Sabado</span> <span>05.00 pm - 11.00 pm</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <span>Domingo</span> <span>06.00 pm - 09.00 pm</span>
                    </li>                                       
                  </ul>
                </div>
              </div>
              <div class="col-lg-4  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                  <h4>Contactanos</h4>
                  <p>
                    Calle Bolivar y Pagador,Oruro,Bolivia - 4605
                  </p>
                  <p class="number">
                    591-6182667<br>
                    591-7456230
                  </p>
                </div>
              </div>            
              <div class="col-lg-4  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                  <h4>Envianos tu correo</h4>
                  <p>Puedes confiar en nosotros no hacemos spam.</p>
                  <div class="d-flex flex-row" id="mc_embed_signup">


                      <form class="navbar-form" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
                        <div class="input-group add-on align-items-center d-flex">
                            <input class="form-control" name="EMAIL" placeholder="Tu Direccion Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tu Direccion Email'" required="" type="email">
                        <div style="position: absolute; left: -5000px;">
                          <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                        </div>
                          <div class="input-group-btn">
                            <button class="genric-btn"><span class="lnr lnr-arrow-right"></span></button>
                          </div>
                        </div>
                          <div class="info mt-20"></div>
                      </form>
                  </div>
                </div>
              </div>            
            </div>          
          </div>          
        </div>
        <div class="footer-bottom-wrap">
          <div class="container">
            <div class="row footer-bottom d-flex justify-content-between align-items-center">
              <p class="col-lg-8 col-mdcol-sm-6 -6 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | Este trabajo esta hecho con <i class="fa fa-heart-o" aria-hidden="true"></i>Amor</a>
</p>
              <ul class="col-lg-4 col-mdcol-sm-6 -6 social-icons text-right">
                              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                              <li><a href="#"><i class="fa fa-behance"></i></a></li>           
                          </ul>
            </div>            
          </div>
        </div>
      </footer>
      <!-- End footer Area -->  

      <script src="{{asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
      <script src="{{asset('js/popper.min.js')}}"></script>
      <script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>      
      <script src="{{asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA')}}"></script>   
      <script src="{{asset('js/jquery-ui.js')}}"></script>         
        <script src="{{asset('js/easing.min.js')}}"></script>      
      <script src="{{asset('js/hoverIntent.js')}}"></script>
      <script src="{{asset('js/superfish.min.js')}}"></script> 
      <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
      <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>           
      <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>          
      <script src="{{asset('js/owl.carousel.min.js')}}"></script>      
            <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>                
      <script src="{{asset('js/mail-script.js')}}"></script> 
      <script src="{{asset('js/main.js')}}"></script>  
    </body>
  </html>