@extends('layouts.home')

@section('title','Makeover')

@section('references')

	<link rel="stylesheet" href="css/core.min.css" media="screen">
    <link rel="stylesheet" href="css/style.css" media="screen">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/stylekath.css" media="screen">
    <link rel="stylesheet" href="css/navflex.css" media="screen">
    <link rel="stylesheet" href="css/product-cards.css" media="screen">
    <link rel="stylesheet" href="css/searchBtn.css" media="screen">
    <link rel="stylesheet" href="css/cardsBestSeller.css" media="screen">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/solid.css" integrity="sha384-VGP9aw4WtGH/uPAOseYxZ+Vz/vaTb1ehm1bwx92Fm8dTrE+3boLfF1SpAtB1z7HW" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/brands.css" integrity="sha384-rf1bqOAj3+pw6NqYrtaE1/4Se2NBwkIfeYbsFdtiR6TQz0acWiwJbv1IM/Nt/ite" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/fontawesome.css" integrity="sha384-1rquJLNOM3ijoueaaeS5m+McXPJCGdr5HcA03/VHXxcp2kX2sUrQDmFc3jR5i/C7" crossorigin="anonymous">
    
   <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great|Marmelad" rel="stylesheet">
    
    <!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <script type="text/javascript" src="engine1/jquery.js"></script>
    <!-- End WOWSlider.com HEAD section -->
    
    <!-- Flickity -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>    
    <!-- End Flickity -->
    
    <script type="text/javascript" src="js/products-cards.js" defer></script>

@endsection

@section('content')
	<div class="row fadeInLeft img-degrad ">
                    <div class="responsive-img ">
                        <img class="principal-images" src="img/portadas/about.jpg"/>
                    </div>
            </div>
            <div class="promotions justify-center">
                <div class="container">
                       <div class="column">
                            <div class="white-space-32"></div>
                          
                           
                             
                          
                           
                            <div class="white-space-16"></div>
                           <div class="logo  align-center wow fadeInLeft"> 
                                                <div class="responsive-img">
                                                    <img class="log" src="img/portadas/Makeoverblue.png" />
                                                </div>
                                           </div>
                            <div class="row justify-center">
                                <h3 style="text-align: center;">MAKEOVER ofrece a las pequeñas y medianas empresas del área de salud y
belleza la oportunidad de promocionar sus servicios, así como
gestionar cada uno de ellos y ofrecerles a otros usuarios la
oportunidad de elegir, personalizar y comprar entre la gran
variedad de servicios que existen para su consumo.</h3>
                            </div>
                          
                           <div class="white-space-32"></div>
                            <div class="promotion-title align-center justify-center color-blue">
                                <i class="fas fa-minus"></i>
                                <h1 class="color-blue titles-text">
                                    &nbsp; CONTACT US
                                </h1>
                                <i class="fas fa-minus skull-icon"></i>
                             </div>
                           <div class="white-space-24"></div>
                            <div class="row-responsive justify-center">
                           <div class="form-contact ">
                            <div class="row-responsive justify-center">
                                <div class="column ">
                                    <div class="">
                                     <form class="about-us">
                                       <!--   con = Container  for items in the form-->
                                       <div class="con">
                                       <!--     Start  header Content  -->
                                       <div class="head-form column">
                                          <h2>CONTACT FORM</h2>
                                          <!--     A welcome message or an explanation of the login form -->
                                          <p>Put  your  message  here  </p>
                                       </div>
                                       <!--     End  header Content  -->
                                       <br>
                                       <div class="field-set column">
                                           
                                           <div class="row">
                                          <!--   user name -->
                                             <span class="input-item">
                                               <i class="fa fa-user-circle icon-textarea"></i>
                                             </span>
                                            <!--   user name Input-->
                                             <input class="form-input" id="txt-input" type="text" placeholder="Your email" required>
                                            </div>
                                          <br>

                                             <div class="row">
                                          <!--   user name -->
                                             <span class="input-item">
                                               <i class="fa fa-user-circle icon-textarea"></i>
                                             </span>
                                            <!--   user name Input-->
                                             <input class="form-input" id="txt-input" type="text" placeholder="Your name" required>
                                            </div>
                                           
                                          <br>
                                           <div class="white-space-16"></div>
                                            <div class="row">
                                          <!--   user name -->
                                             
                                            <!--   user name Input-->
                                             
                                                <textarea class="form-input" id="txt-input" placeholder="Message" rows="4" cols="50" name="comment" form="usrform" required></textarea>
                                            </div>
                                           
                                    <!--        buttons -->
                                    <!--      button LogIn -->
                                          <button class="log-in">SEND MENSSAGE</button>
                                       </div>

                                    

                                    <!--   End Conrainer  -->
                                      </div>

                                      <!-- End Form -->
                                    </form>
                                    </div>
                               </div>
                                 
                                
                                <div class="column"> 
                                    <div class="responsive-img ">
                                        <img class="contact-image" src="img/stylish.jpg"/>
                                    </div>
                                </div>
                                </div>
                            </div>
                           </div>
                           <div class="white-space-32"></div>
                            
                             <div class="promotion-title align-center justify-center color-blue">
                                <i class="fas fa-minus"></i>
                                <h1 class="color-blue titles-text">
                                    &nbsp; MEET OUR TEAM
                                </h1>
                                <i class="fas fa-minus skull-icon"></i>
                             </div>
                           <div class="white-space-32"></div>
                            <div class="row-responsive justify-center" id="break-ipad">
                                <div class="column">
                                    <div class="responsive-img wow fadeInLeft">
                                        <img class="about-images" src="img/girl3.jpg"/>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="responsive-img wow fadeInLeft">
                                        <img class="about-images" src="img/boy5.jpg"/>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="responsive-img wow fadeInLeft">
                                        <img class="about-images" src="img/boy2.jpg"/>
                                    </div>
                                </div>
                            </div>
                           
                           <div class="white-space-32"></div>
@endsection

