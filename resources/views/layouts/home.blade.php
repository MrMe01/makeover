<!DOCTYPE html>
<html>
<head>
	<title> @yield('title') </title>
	
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{URL::asset('css/loginreg.css')}}" media="screen">
    @yield('references')

</head>
<body>

    @yield('facebook')
    
   <div class="main flex">
        <div class="column">
             <header>
                <div class="row justify-center">
                    <div class="container">
                        <div class="row-responsive" id="break-ipad">
                            <div class="logo auto align-center wow fadeInLeft div-Logo">
                                <a href="#">
                                    <div class="responsive-img">
                                        <img src="img/publicity/LogoMakeover.png" alt="Dwit México Logo" title="Dwit México Logo"/>
                                    </div>
                                </a>
                            </div>
                            <div class="cart-user auto align-center wow fadeInRight " data-wow-delay="0.7s">
                                <div class="row rowIcon justify-end">
                                    <div class="row justify-end">                                        
                                            <div class="row-responsive" id="break-ipad">
                                                
                                        <!-- SEARCH ANIMATION-->
                                            <div class="column">
                                                <div class="row justify-end">
                                                    <div class="icon align-center justify-end">
                                                    <div id="wrap">
                                                      <form action="" autocomplete="on">
                                                      <input class="search-text" id="search" name="search" type="text" placeholder="What're we looking for ?">
                                                      <button class="search-btn" id="search_submit" ><i class="fas fa-search"></i></button>
                                                      </form>
                                                    </div>
                                                </div>
                                             </div>
                                            </div>
                                        <!-- END SEARCH ANIMATION-->
                                                
                                        <div class="column icons-main" >
                                            <div class="row rowIcon justify-end">
                                                <div class="icon align-center justify-center">
                                          <a href="/cart"> <i class="fas fa-shopping-cart iconItem"></i> </a>
                                            <a class="weight-medium iconItem" href="#popup1">
                                                LOGIN
                                            </a>
                                            <a class="weight-medium iconItem" href="/register">
                                                REGISTER
                                            </a>
                                            <a class="weight-medium iconItem" href="/register">
                                                EXIT
                                            </a>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>  
                <!-- NAV -->
                <div class="white-space-8"></div>
                <input type="checkbox" id="checkbox1" />
                <label for="checkbox1" class="wow fadeInUp">
                        <span class="toggle"><i class="fas fa-bars"></i></span>
              <ul class="menu first">
                <li class="home-item"><a href="/">HOME</a></li>
                <li><a href="/promotions">PROMOTIONS</a></li>  
                <li><a href="/catalog">CATALOG</a></li>  
                <li><a href="/about">ABOUT US</a></li>  
              </ul>
                </label>
                <!-- END NAV -->
         

             @yield('content');


            <footer class="flex">
                <div class="justify-center">
                    <div class="container">
                        <div class="column">
                            <div class="row-responsive">
                                <div class="contact wow fadeInLeft" data-wow-delay="0.3s">
                                    <div class="column">
                                        <h3>
                                            CONTACTO
                                        </h3>
                                        <div class="white-space-16"></div> 
                                        <p>
                                            <i class="fas fa-home"></i>
                                            Av. Arco Bincentenario, Mza. 11, Lote 1119-33, SM 255, 77500 Cancún, Q.R.
                                        </p>
                                        <div class="white-space-16"></div>
                                        <p>
                                            <i class="fas fa-envelope"></i>
                                            <a href="mailto:soportecliente@ecommerce.com">
                                                soportecliente@ecommerce.com
                                            </a>                                            
                                        </p>
                                        <div class="white-space-16"></div>
                                        <p>
                                            <i class="fas fa-phone"></i>
                                            <a href="tel:(888) 123 4567">
                                                (888) 123 4567
                                            </a>                                            
                                        </p>
                                        <div class="white-space-16"></div>
                                        <div class="row footer-icons">
                                            <div class="footer-icon bordered auto text-center">
                                                <a rel="follow" target="_blank" href="#">
                                                    <i class="fab fa-facebook"></i>
                                                </a>            
                                            </div>
                                            <div class="footer-icon bordered auto text-center">
                                                <a rel="follow" target="_blank" href="#">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </div>
                                            <div class="footer-icon bordered auto">
                                                <a rel="follow" target="_blank" href="#">
                                                    <i class="fab fa-whatsapp"></i>
                                                </a>
                                            </div>
                                            <div class="footer-icon bordered auto">
                                                <a rel="follow" target="_blank" href="#">
                                                    <i class="fab fa-skype"></i>
                                                </a>
                                            </div>                                            
                                        </div>                                        
                                    </div>                                    
                                </div>
                                <div class="help wow fadeInDown" data-wow-delay="0.5s">
                                    <div class="column">
                                        <h3>
                                            AYUDA
                                        </h3>
                                        <div class="white-space-16"></div>
                                        <a class="link" href="#">
                                            Contacto
                                        </a>
                                        <div class="white-space-16"></div>
                                        <a class="link" href="#">
                                            Atención al Cliente
                                        </a>
                                        <div class="white-space-16"></div>
                                        <a class="link" href="#">
                                            Mapa del sitio
                                        </a>
                                        <div class="white-space-16"></div>
                                        <a class="link" href="#">
                                            Soporte
                                        </a>
                                    </div>
                                </div>
                                <div class="account wow fadeInRight" data-wow-delay="0.7s">
                                    <div class="column">
                                        <h3>
                                            MI CUENTA
                                        </h3>
                                        <div class="white-space-16"></div>
                                        <a class="link" href="#">
                                            Mis datos
                                        </a>
                                        <div class="white-space-16"></div>
                                        <a class="link" href="#">
                                            Pedidos
                                        </a>
                                        <div class="white-space-16"></div>
                                        <a class="link" href="#">
                                            Carrito
                                        </a>
                                        <div class="white-space-16"></div>
                                        <a class="link" href="#">
                                            Tarjeta de regalos
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="white-space-64"></div>

                            <div class="payment wow fadeInDown">
                                <div class="responsive-img">
                                    <img src="{{  URL::asset('img/tarjetas/tarjetas.jpeg') }}" alt="Tarjetas de Crédito" alt="Tarjetas de Crédito">
                                </div>
                            </div>
                            <div class="white-space-64"></div>
                        </div>                        
                    </div> 
                </div>                               
            </footer>
{{-- START LOGIN --}}
             <div id="popup1" class="overlay">
            <div class="popup">
                <a class="close" href="#">&times;</a>
                <form class="login-form" method="POST" action="/login">
                  @csrf
                  
                                       <!--   con = Container  for items in the form-->
                                       <div class="con">
                                       <!--     Start  header Content  -->
                                       <div class="head-form2 column">
                                             <div class="logo  align-center wow fadeInLeft"> 
                                                <div class="responsive-img">
                                                    <img class="login-log" src="img/portadas/Makeoverblancopng.png" />
                                                </div>
                                           </div>
                                          <h2>Log In</h2>
                                          <!--     A welcome message or an explanation of the login form -->
                                          <p>login here using your username and password</p>
                                           
                                         
                                       </div>
                                       <!--     End  header Content  -->
                                       <br>
                                       <div class="field-set column">
                                           
                                           <div class="row justify-center">
                                          <!--   user name -->
                                             <span class="input-item2">
                                               <i class="fa fa-user-circle"></i>
                                             </span>
                                            <!--   user email Input-->
                                             <input class="form-input2" name="email" id="email" type="email" placeholder="@email" required>
                                            </div>
                                          <br>

                                               <!--   Password -->
                                            <div class="row justify-center">
                                          <span class="input-item2">
                                            <i class="fa fa-key"></i>
                                           </span>
                                          <!--   Password Input-->
                                          <input class="form-input2" type="password" placeholder="Password" id="pwd"  name="password" required>

                                    <!--      Show/hide password  -->
                                         <span>
                                            <i class="fa fa-eye" aria-hidden="true"  type="button" id="eye"></i>
                                         </span>
                                           </div>
                                         <div id="errors" class="errors row justify-center">
                                            {!! $errors->first('email','<span class="">:message</span>') !!}
                                         </div>
                                          <br>
                                    <!--        buttons -->
                                    <!--      button LogIn -->
                                          <button type="submit" class="log-in2"> Log In </button>
                                       </div>

                                    <!--   other buttons -->
                                       {{-- <div class="other">
                                    <!--      Forgot Password button-->
                                          <button class="btn submits frgt-pass">Forgot Password</button>
                                    <!--     Sign Up button -->
                                          <button class="btn submits sign-up">Sign Up 
                                    <!--         Sign Up font icon -->
                                          <i class="fa fa-user-plus" aria-hidden="true"></i>
                                          </button>
                                    <!--      End Other the Division -->
                                       </div> --}}

                                    <!--   End Conrainer  -->
                                      </div>

                                      <!-- End Form -->
                                    </form>
            </div>
        </div>
            {{-- END LOGIN --}}
            
            @yield('pops');

    	</div>
    </div>
   
</body>
</html>