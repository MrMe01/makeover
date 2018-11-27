@extends('layouts.home')

@section('title','Makeover')

@section('references')

    <link rel="stylesheet" href="{{URL::asset('css/core.min.css')}}" media="screen">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}" media="screen">
    <link rel="stylesheet" href="{{URL::asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/stylekath.css')}}" media="screen">
    <link rel="stylesheet" href="{{URL::asset('css/navflex.css')}}" media="screen">
    <link rel="stylesheet" href="{{URL::asset('css/product-cards.css')}}" media="screen">
    <link rel="stylesheet" href="{{URL::asset('css/searchBtn.css')}}" media="screen">
    <link rel="stylesheet" href="{{URL::asset('css/cardsBestSeller.css')}}" media="screen">
    <link rel="stylesheet" href="{{URL::asset('css/loginreg.css')}}" media="screen">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/solid.css" integrity="sha384-VGP9aw4WtGH/uPAOseYxZ+Vz/vaTb1ehm1bwx92Fm8dTrE+3boLfF1SpAtB1z7HW" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/brands.css" integrity="sha384-rf1bqOAj3+pw6NqYrtaE1/4Se2NBwkIfeYbsFdtiR6TQz0acWiwJbv1IM/Nt/ite" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/fontawesome.css" integrity="sha384-1rquJLNOM3ijoueaaeS5m+McXPJCGdr5HcA03/VHXxcp2kX2sUrQDmFc3jR5i/C7" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great|Marmelad" rel="stylesheet">
    
    <!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <script type="text/javascript" src="engine1/jquery.js"></script>
    <!-- End WOWSlider.com HEAD section -->
    
    <!-- Flickity -->
    <link rel="stylesheet" href="{{URL::asset('css/flickity.css')}}" media="screen">
    <script src="{{URL::asset('js/flickity.pkgd.min.js')}}" defer></script>    
    <!-- End Flickity -->
    
    <!-- SLICK -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- END SLICK -->
    
    <script type="text/javascript" src="{{URL::asset('js/products-cards.js')}}" defer></script>
    <script type="text/javascript" src="{{URL::asset('js/seepassword.js')}}" defer></script>
    
    <title>MAKEOVER</title>

@endsection

@section('content')

      <iframe class="Home-slider" src="/homes" style="width:100%;overflow:hidden;border:none;padding:0;margin:0 auto;display:block;" marginheight="0" marginwidth="0"></iframe>
            
            <!-- END SLIDER -->
            
            <!-- PUBLICITY 1ST PART -->
          <div class="white-space-8"></div>
            <div class="white-space-16"></div>
            <div class="row justify-center">
                    <div class="container">
                        <div class="row-responsive align-center">
                        
                        
                         <div class="column img-hotpromotion hot-card">    
                                <div class="responsive-img ">
                                        <img class="card-slim" src="img/publicity/New%20arrivals.png" alt="New Arrivals" title="New Arrivals"/>
                                </div>
                         </div>
                        
                            
                         <div class="column img-central ">    
                                <div class="responsive-img ">
                                        <img class="central-img-Card" src="img/publicity/Hot%20promotions.png" alt="Hot Promotions" title="Hot Promotions"/>
                                </div>
                         </div>
                         <div class="column img-hotpromotion hot-card">    
                                <div class="responsive-img">
                                        <img class="card-slim" src="img/publicity/New%20services.png" alt="New Services" title="New Services"/>
                                </div>
                         </div>
                    </div>
               </div>
            </div>
            <!-- END PUBLICITY 1ST PART -->

            <div class="white-space-32"></div>

            <div class="promotions justify-center">
                <div class="container">
                       <div class="column">
                        <div class="white-space-32"></div>
                        <div class="promotion-title align-center justify-center color-blue">
                            <i class="fas fa-minus"></i>
                            <h1 class="color-blue titles-text">
                                &nbsp; PROMOTIONS FOR SPECIAL DAYS
                            </h1>
                            <i class="fas fa-minus skull-icon"></i>
                        </div>
                        <div class="white-space-32"></div>
                           <div class="white-space-16"></div>
                           
                        <!-- SLIDE CARDS -->
                        <div class="column">
                            <div class="row">
                                <div class="carousel" data-flickity='{ "groupCells": true }' style="height: 430px ; width: ">
                                  <div class="carousel-cell" style="width: 390px; height: 430px">
                                    <div id="make-3D-space">
                                        <div class="product-card" id="product-card">
                                            <div id="product-front">
                                                <div class="shadow"></div>
                                                <img src="img/weedingHairjpg.jpg" alt="" />
                                                <div class="image_overlay"></div>
                                                <div class="justify-center align-center" id="view_details">View details</div>
                                                <div class="stats ">        	
                                                    <div class="stats-container column">
                                                        <div class="promotion-name justify-center">
                                                        <span class="product_name">Wedding hairstyle</span>
                                                        </div>
                                                        <div class="promotion-price justify-center align-center">
                                                        <span class="product_price">$540</span>
                                                        </div>
                                                        
                                                         <div class="promotion-description justify-center align-center">
                                                        <div class="star-rating" title="100%" style="width: 52%;">
                                                            <div class="back-stars">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                                <div class="front-stars" style="width: 50%">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                        <div class=" justify-center align-center">
                                                        <span>Name Provider</span>
                                                       </div>                       
                                                    </div>                         
                                                </div>
                                            </div>
                                        </div>
                                       </div>
                                  </div>
                                 
                                  <div class="carousel-cell" style="width: 390px; height: 430px">
                                    <div id="make-3D-space">
                                        <div class="product-card" id="product-card">
                                            <div id="product-front">
                                                <div class="shadow"></div>
                                                <img src="img/graduacion.jpg" alt="" />
                                                <div class="image_overlay"></div>
                                                <div class="justify-center align-center" id="view_details">View details</div>
                                                <div class="stats ">        	
                                                    <div class="stats-container column">
                                                        <div class="promotion-name justify-center">
                                                        <span class="product_name">Graduation hairstyle</span>
                                                        </div>
                                                        <div class="promotion-price justify-center align-center">
                                                        <span class="product_price">$390</span>
                                                        </div>
                                                         <div class="promotion-description justify-center align-center">
                                                        <div class="star-rating" title="100%" style="width: 52%;">
                                                            <div class="back-stars">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                                <div class="front-stars" style="width: 70%">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                        <div class=" justify-center align-center">
                                                        <span>Name Provider</span>
                                                       </div>                        
                                                    </div>                         
                                                </div>
                                            </div>
                                        </div>
                                       </div>
                                  </div>
                                  
                                  <div class="carousel-cell" style="width: 390px;height: 430px">
                                    <div id="make-3D-space">
                                        <div class="product-card" id="product-card">
                                            <div id="product-front">
                                                <div class="shadow"></div>
                                                <img src="img/artistic.jpg" alt="" />
                                                <div class="image_overlay"></div>
                                                <div class="justify-center align-center" id="view_details">View details</div>
                                                <div class="stats ">        	
                                                    <div class="stats-container column">
                                                        <div class="promotion-name justify-center">
                                                        <span class="product_name">Artistic makeup</span>
                                                        </div>
                                                        <div class="promotion-price justify-center align-center">
                                                        <span class="product_price">$670</span>
                                                        </div>
                                                       
                                                          <div class="promotion-description justify-center align-center">
                                                        <div class="star-rating" title="100%" style="width: 52%;">
                                                            <div class="back-stars">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                                <div class="front-stars" style="width: 90%">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                        <div class=" justify-center align-center">
                                                        <span>Name Provider</span>
                                                       </div>
                                                        
                                                    </div>                         
                                                </div>
                                            </div>
                                        </div>
                                       </div>
                                  </div>
                                    
                                 <div class="carousel-cell" style="width: 390px; height: 430px">
                                    <div id="make-3D-space">
                                        <div class="product-card" id="product-card">
                                            <div id="product-front">
                                                <div class="shadow"></div>
                                                <img src="img/nails.jpg" alt="" />
                                                <div class="image_overlay"></div>
                                                <div class="justify-center align-center" id="view_details">View details</div>
                                                <div class="stats ">        	
                                                    <div class="stats-container column">
                                                        <div class="promotion-name justify-center">
                                                        <span class="product_name">Minimalist nails</span>
                                                        </div>
                                                        <div class="promotion-price justify-center align-center">
                                                        <span class="product_price">$59</span>
                                                        </div>
                                                        
                                                          <div class="promotion-description justify-center align-center">
                                                        <div class="star-rating" title="100%" style="width: 52%;">
                                                            <div class="back-stars">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                                <div class="front-stars" style="width: 25%">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                        <div class=" justify-center align-center">
                                                        <span>Name Provider</span>
                                                       </div>
                                                        
                                                    </div>                         
                                                </div>
                                            </div>
                                        </div>
                                       </div>
                                  </div>
                                 
                                  <div class="carousel-cell" style="width: 390px; height: 430px">
                                    <div id="make-3D-space">
                                        <div class="product-card" id="product-card">
                                            <div id="product-front">
                                                <div class="shadow"></div>
                                                <img src="img/tattoColor.jpg" alt="" />
                                                <div class="image_overlay"></div>
                                                <div class="justify-center align-center" id="view_details">View details</div>
                                                <div class="stats ">        	
                                                    <div class="stats-container column">
                                                        <div class="promotion-name justify-center">
                                                        <span class="product_name">Colorful tattoo</span>
                                                        </div>
                                                        <div class="promotion-price justify-center align-center">
                                                        <span class="product_price">$1290</span>
                                                        </div>
                                                          
                                                          <div class="promotion-description justify-center align-center">
                                                        <div class="star-rating" title="100%" style="width: 52%;">
                                                            <div class="back-stars">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                                <div class="front-stars" style="width: 50%">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                        <div class=" justify-center align-center">
                                                        <span>Name Provider</span>
                                                       </div>
                                                        
                                                    </div>                         
                                                </div>
                                            </div>
                                        </div>
                                       </div>
                                  </div>
                                  
                                  <div class="carousel-cell" style="width: 390px;height: 430px">
                                    <div id="make-3D-space">
                                        <div class="product-card" id="product-card">
                                            <div id="product-front">
                                                <div class="shadow"></div>
                                                <img src="img/barber2.jpg" alt="" />
                                                <div class="image_overlay"></div>
                                                <div class="justify-center align-center" id="view_details">View details</div>
                                                <div class="stats ">        	
                                                    <div class="stats-container column">
                                                        <div class="promotion-name justify-center">
                                                        <span class="product_name">Beard profiling</span>
                                                        </div>
                                                        <div class="promotion-price justify-center align-center">
                                                        <span class="product_price">$120</span>
                                                        </div>
                                                        
                                                    <div class="promotion-description justify-center align-center">
                                                        <div class="star-rating" title="100%" style="width: 52%;">
                                                            <div class="back-stars">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                                <div class="front-stars" style="width: 50%">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                        <div class=" justify-center align-center">
                                                        <span>Name Provider</span>
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
                         <!-- END SLIDE CARDS -->
                           
                        <div class="white-space-64"></div>
                           
                        <!-- PUBLICITY FULL-->
                           <div class="row justify-center align-center">
                                <a href="#">
                                    <div class="responsive-img">
                                        <img src="img/publicity/GirlsWeekend2.png" alt="Dwit México Logo" title="Dwit México Logo"/>
                                    </div>
                                </a>
                           </div>
                        
                        <!-- END PUBLICITY FULL-->
                           
                            <div class="white-space-64"></div>
                        <div class="promotion-title align-center justify-center color-blue">
                            <i class="fas fa-minus"></i>
                            <h1 class="color-blue titles-text">
                                &nbsp; SOMETHING DIFFERENT
                            </h1>
                            <i class="fas fa-minus skull-icon"></i>
                        </div>
                        <div class="white-space-32"></div>
                           
                        <!-- SLIDE CARDS SOMETHING DIFFERENT -->
                        <div class="column">
                            <div class="row">
                                <div class="carousel" data-flickity='{ "groupCells": true }' style="height: 430px ; width: ">
                                  <div class="carousel-cell" style="width: 390px; height: 430px">
                                    <div id="make-3D-space">
                                        <div class="product-card" id="product-card">
                                            <div id="product-front">
                                                <div class="shadow"></div>
                                                <img src="img/different/1.jpg" alt="" />
                                                <div class="image_overlay"></div>
                                                <div class="justify-center align-center" id="view_details">View details</div>
                                                <div class="stats ">        	
                                                    <div class="stats-container column">
                                                        <div class="promotion-name justify-center">
                                                        <span class="product_name">Wedding hairstyle</span>
                                                        </div>
                                                        <div class="promotion-price justify-center align-center">
                                                        <span class="product_price">$540</span>
                                                        </div>
                                                        
                                                         <div class="promotion-description justify-center align-center">
                                                        <div class="star-rating" title="100%" style="width: 52%;">
                                                            <div class="back-stars">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                                <div class="front-stars" style="width: 50%">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                        <div class=" justify-center align-center">
                                                        <span>Name Provider</span>
                                                       </div>                       
                                                    </div>                         
                                                </div>
                                            </div>
                                        </div>
                                       </div>
                                  </div>
                                 
                                  <div class="carousel-cell" style="width: 390px; height: 430px">
                                    <div id="make-3D-space">
                                        <div class="product-card product-card2" id="product-card">
                                            <div id="product-front">
                                                <div class="shadow"></div>
                                                <img src="img/different/2.jpg" alt="" />
                                                <div class="image_overlay"></div>
                                                <div class="justify-center align-center" id="view_details">View details</div>
                                                <div class="stats ">        	
                                                    <div class="stats-container column">
                                                        <div class="promotion-name justify-center">
                                                        <span class="product_name">Golden braids</span>
                                                        </div>
                                                        <div class="promotion-price justify-center align-center">
                                                        <span class="product_price">$140</span>
                                                        </div>
                                                         <div class="promotion-description justify-center align-center">
                                                        <div class="star-rating" title="100%" style="width: 52%;">
                                                            <div class="back-stars">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                                <div class="front-stars" style="width: 95%">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                        <div class=" justify-center align-center">
                                                        <span>Name Provider</span>
                                                       </div>                        
                                                    </div>                         
                                                </div>
                                            </div>
                                        </div>
                                       </div>
                                  </div>
                                  
                                  <div class="carousel-cell" style="width: 390px;height: 430px">
                                    <div id="make-3D-space">
                                        <div class="product-card" id="product-card">
                                            <div id="product-front">
                                                <div class="shadow"></div>
                                                <img src="img/different/3.jpg" alt="" />
                                                <div class="image_overlay"></div>
                                                <div class="justify-center align-center" id="view_details">View details</div>
                                                <div class="stats ">        	
                                                    <div class="stats-container column">
                                                        <div class="promotion-name justify-center">
                                                        <span class="product_name">Artistic makeup</span>
                                                        </div>
                                                        <div class="promotion-price justify-center align-center">
                                                        <span class="product_price">$670</span>
                                                        </div>
                                                       
                                                          <div class="promotion-description justify-center align-center">
                                                        <div class="star-rating" title="100%" style="width: 52%;">
                                                            <div class="back-stars">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                                <div class="front-stars" style="width: 40%">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                        <div class=" justify-center align-center">
                                                        <span>Name Provider</span>
                                                       </div>
                                                        
                                                    </div>                         
                                                </div>
                                            </div>
                                        </div>
                                       </div>
                                  </div>
                                    
                                 <div class="carousel-cell" style="width: 390px; height: 430px">
                                    <div id="make-3D-space">
                                        <div class="product-card" id="product-card">
                                            <div id="product-front">
                                                <div class="shadow"></div>
                                                <img src="img/different/4.jpg" alt="" />
                                                <div class="image_overlay"></div>
                                                <div class="justify-center align-center" id="view_details">View details</div>
                                                <div class="stats ">        	
                                                    <div class="stats-container column">
                                                        <div class="promotion-name justify-center">
                                                        <span class="product_name">Minimalist nails</span>
                                                        </div>
                                                        <div class="promotion-price justify-center align-center">
                                                        <span class="product_price">$59</span>
                                                        </div>
                                                        
                                                          <div class="promotion-description justify-center align-center">
                                                        <div class="star-rating" title="100%" style="width: 52%;">
                                                            <div class="back-stars">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                                <div class="front-stars" style="width: 25%">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                        <div class=" justify-center align-center">
                                                        <span>Name Provider</span>
                                                       </div>
                                                        
                                                    </div>                         
                                                </div>
                                            </div>
                                        </div>
                                       </div>
                                  </div>
                                 
                                  <div class="carousel-cell" style="width: 390px; height: 430px">
                                    <div id="make-3D-space">
                                        <div class="product-card" id="product-card">
                                            <div id="product-front">
                                                <div class="shadow"></div>
                                                <img src="img/different/5.jpg" alt="" />
                                                <div class="image_overlay"></div>
                                                <div class="justify-center align-center" id="view_details">View details</div>
                                                <div class="stats ">        	
                                                    <div class="stats-container column">
                                                        <div class="promotion-name justify-center">
                                                        <span class="product_name">Colorful tattoo</span>
                                                        </div>
                                                        <div class="promotion-price justify-center align-center">
                                                        <span class="product_price">$1290</span>
                                                        </div>
                                                          
                                                          <div class="promotion-description justify-center align-center">
                                                        <div class="star-rating" title="100%" style="width: 52%;">
                                                            <div class="back-stars">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                                <div class="front-stars" style="width: 63%">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                        <div class=" justify-center align-center">
                                                        <span>Name Provider</span>
                                                       </div>
                                                        
                                                    </div>                         
                                                </div>
                                            </div>
                                        </div>
                                       </div>
                                  </div>
                                  
                                  <div class="carousel-cell" style="width: 390px;height: 430px">
                                    <div id="make-3D-space">
                                        <div class="product-card" id="product-card">
                                            <div id="product-front">
                                                <div class="shadow"></div>
                                                <img src="img/different/6.jpg" alt="" />
                                                <div class="image_overlay"></div>
                                                <div class="justify-center align-center" id="view_details">View details</div>
                                                <div class="stats ">        	
                                                    <div class="stats-container column">
                                                        <div class="promotion-name justify-center">
                                                        <span class="product_name">Beard profiling</span>
                                                        </div>
                                                        <div class="promotion-price justify-center align-center">
                                                        <span class="product_price">$120</span>
                                                        </div>
                                                        
                                                          <div class="promotion-description justify-center align-center">
                                                        <div class="star-rating" title="100%" style="width: 52%;">
                                                            <div class="back-stars">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                                <div class="front-stars" style="width: 50%">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                        <div class=" justify-center align-center">
                                                        <span>Name Provider</span>
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
                         <!-- END SLIDE CARDS SOMETHING DIFFERENT -->

                           <div class="white-space-64"></div>
                           <div class="white-space-8"></div>
                        <div class="promotion-title align-center justify-center color-blue">
                            <i class="fas fa-minus"></i>
                            <h1 class="color-blue titles-text">
                                &nbsp; REFRESH YOUR STYLE
                            </h1>
                            <i class="fas fa-minus skull-icon"></i>
                        </div>
                        <div class="white-space-32"></div>
                           <div class="white-space-16"></div>
                           
                        <!-- SLIDE CARDS REFRESH YOUR STYLE -->
                        <div class="column">
                            <div class="row">
                                <div class="carousel" data-flickity='{ "groupCells": true }' style="height: 430px ; width: ">
                                  <div class="carousel-cell" style="width: 390px; height: 430px">
                                    <div id="make-3D-space">
                                        <div class="product-card" id="product-card">
                                            <div id="product-front">
                                                <div class="shadow"></div>
                                                <img src="img/Refresh/1.jpg" alt="" />
                                                <div class="image_overlay"></div>
                                                <div class="justify-center align-center" id="view_details">View details</div>
                                                <div class="stats ">        	
                                                    <div class="stats-container column">
                                                        <div class="promotion-name justify-center">
                                                        <span class="product_name">Wedding hairstyle</span>
                                                        </div>
                                                        <div class="promotion-price justify-center align-center">
                                                        <span class="product_price">$540</span>
                                                        </div>
                                                        
                                                         <div class="promotion-description justify-center align-center">
                                                        <div class="star-rating" title="100%" style="width: 52%;">
                                                            <div class="back-stars">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                                <div class="front-stars" style="width: 50%">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                        <div class=" justify-center align-center">
                                                        <span>Name Provider</span>
                                                       </div>                       
                                                    </div>                         
                                                </div>
                                            </div>
                                        </div>
                                       </div>
                                  </div>
                                 
                                  <div class="carousel-cell" style="width: 390px; height: 430px">
                                    <div id="make-3D-space">
                                        <div class="product-card" id="product-card">
                                            <div id="product-front">
                                                <div class="shadow"></div>
                                                <img src="img/Refresh/2.jpg" alt="" />
                                                <div class="image_overlay"></div>
                                                <div class="justify-center align-center" id="view_details">View details</div>
                                                <div class="stats ">        	
                                                    <div class="stats-container column">
                                                        <div class="promotion-name justify-center">
                                                        <span class="product_name">Golden braids</span>
                                                        </div>
                                                        <div class="promotion-price justify-center align-center">
                                                        <span class="product_price">$140</span>
                                                        </div>
                                                         <div class="promotion-description justify-center align-center">
                                                        <div class="star-rating" title="100%" style="width: 52%;">
                                                            <div class="back-stars">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                                <div class="front-stars" style="width: 85%">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                        <div class=" justify-center align-center">
                                                        <span>Name Provider</span>
                                                       </div>                        
                                                    </div>                         
                                                </div>
                                            </div>
                                        </div>
                                       </div>
                                  </div>
                                  
                                  <div class="carousel-cell" style="width: 390px;height: 430px">
                                    <div id="make-3D-space">
                                        <div class="product-card" id="product-card">
                                            <div id="product-front">
                                                <div class="shadow"></div>
                                                <img src="img/Refresh/4.jpg" alt="" />
                                                <div class="image_overlay"></div>
                                                <div class="justify-center align-center" id="view_details">View details</div>
                                                <div class="stats ">        	
                                                    <div class="stats-container column">
                                                        <div class="promotion-name justify-center">
                                                        <span class="product_name">Artistic makeup</span>
                                                        </div>
                                                        <div class="promotion-price justify-center align-center">
                                                        <span class="product_price">$670</span>
                                                        </div>
                                                       
                                                          <div class="promotion-description justify-center align-center">
                                                        <div class="star-rating" title="100%" style="width: 52%;">
                                                            <div class="back-stars">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                                <div class="front-stars" style="width: 90%">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                        <div class=" justify-center align-center">
                                                        <span>Name Provider</span>
                                                       </div>
                                                        
                                                    </div>                         
                                                </div>
                                            </div>
                                        </div>
                                       </div>
                                  </div>
                                    
                                 <div class="carousel-cell" style="width: 390px; height: 430px">
                                    <div id="make-3D-space">
                                        <div class="product-card" id="product-card">
                                            <div id="product-front">
                                                <div class="shadow"></div>
                                                <img src="img/Refresh/5.jpg" alt="" />
                                                <div class="image_overlay"></div>
                                                <div class="justify-center align-center" id="view_details">View details</div>
                                                <div class="stats ">        	
                                                    <div class="stats-container column">
                                                        <div class="promotion-name justify-center">
                                                        <span class="product_name">Minimalist nails</span>
                                                        </div>
                                                        <div class="promotion-price justify-center align-center">
                                                        <span class="product_price">$59</span>
                                                        </div>
                                                        
                                                          <div class="promotion-description justify-center align-center">
                                                        <div class="star-rating" title="100%" style="width: 52%;">
                                                            <div class="back-stars">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                                <div class="front-stars" style="width: 25%">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                        <div class=" justify-center align-center">
                                                        <span>Name Provider</span>
                                                       </div>
                                                        
                                                    </div>                         
                                                </div>
                                            </div>
                                        </div>
                                       </div>
                                  </div>
                                 
                                  <div class="carousel-cell" style="width: 390px; height: 430px">
                                    <div id="make-3D-space">
                                        <div class="product-card" id="product-card">
                                            <div id="product-front">
                                                <div class="shadow"></div>
                                                <img src="img/Refresh/6.jpg" alt="" />
                                                <div class="image_overlay"></div>
                                                <div class="justify-center align-center" id="view_details">View details</div>
                                                <div class="stats ">        	
                                                    <div class="stats-container column">
                                                        <div class="promotion-name justify-center">
                                                        <span class="product_name">Colorful tattoo</span>
                                                        </div>
                                                        <div class="promotion-price justify-center align-center">
                                                        <span class="product_price">$1290</span>
                                                        </div>
                                                          
                                                          <div class="promotion-description justify-center align-center">
                                                        <div class="star-rating" title="100%" style="width: 52%;">
                                                            <div class="back-stars">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                                <div class="front-stars" style="width: 50%">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                        <div class=" justify-center align-center">
                                                        <span>Name Provider</span>
                                                       </div>
                                                        
                                                    </div>                         
                                                </div>
                                            </div>
                                        </div>
                                       </div>
                                  </div>
                                  
                                  <div class="carousel-cell" style="width: 390px;height: 430px">
                                    <div id="make-3D-space">
                                        <div class="product-card" id="product-card">
                                            <div id="product-front">
                                                <div class="shadow"></div>
                                                <img src="img/Refresh/7.jpg" alt="" />
                                                <div class="image_overlay"></div>
                                                <div class="justify-center align-center" id="view_details">View details</div>
                                                <div class="stats ">        	
                                                    <div class="stats-container column">
                                                        <div class="promotion-name justify-center">
                                                        <span class="product_name">Beard profiling</span>
                                                        </div>
                                                        <div class="promotion-price justify-center align-center">
                                                        <span class="product_price">$120</span>
                                                        </div>
                                                        
                                                          <div class="promotion-description justify-center align-center">
                                                        <div class="star-rating" title="100%" style="width: 52%;">
                                                            <div class="back-stars">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                                <div class="front-stars" style="width: 50%">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                        <div class=" justify-center align-center">
                                                        <span>Name Provider</span>
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
                         <!-- END SLIDE CARDS REFRESH YOUR STYLE -->
                           
                        <div class="white-space-64"></div>
                      
                        <div class="row">
                            <div class="column">
                                <div class="promotion-title align-center justify-center color-blue">
                                    <i class="fas fa-minus"></i>
                                    <h1 class="color-blue titles-text">
                                        &nbsp;  BESTSELLERS
                                    </h1>
                                    <i class="fas fa-minus skull-icon"></i>
                                </div>
                            </div>
                            <div class="column">
                                <div class="promotion-title align-center justify-center color-blue">
                                    <i class="fas fa-minus"></i>
                                    <h1 class="color-blue titles-text">
                                        &nbsp; MOST WANTED
                                    </h1>
                                    <i class="fas fa-minus skull-icon"></i>
                                </div>
                            </div>
                       
                        </div>
                        <div class="white-space-32"></div>
                           
                        <!-- CARDS SLIDER BEST SELLER - MOST WANTED -->
         
                        <div class="carousel" data-flickity='{ "wrapAround": false }'>
                          <div class="carousel-cell">
                             <div class="column">
                                <div class="row">
                                    <div class="column">
                                        <div id="container-card">	
                                        <!-- Start	Product details -->     
                                            <div class="product-details">

                                                <!-- 	Product Name -->
                                            <div class="column">
                                            <h1 class="best">Profesional Haircut</h1>

                                        <!-- 		<span class="hint new">New</span> -->
                                        <!-- 		<span class="hint free-shipping">Free Shipping</span> -->
                                        <!-- 		the Product rating -->

                                           <div class="promotion-description justify-start align-center" style="height: 20px; margin-bottom: 20px;">
                                                                <div class="star-rating" title="50%" style="width: 58%;">
                                                                    <div class="back-stars">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>

                                                                        <div class="front-stars" style="width: 50%">
                                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                                        </div>
                                                                    </div>
                                                                </div> 
                                                            </div>


                                        <!-- The most important information about the product -->
                                                <p class="information">" Especially good for container gardening, the Angelonia will keep blooming all summer even if old flowers are removed."</p>
                                         </div>  

                                        <!-- 		Control -->
                                        <div class="control">

                                        <!-- Start Button buying -->
                                            <button class="btnx">
                                        <!-- 		the Price -->
                                             <span class="price">67 $</span>
                                        <!-- 		shopping cart icon-->
                                           <span class="shopping-cart"><i class="fas fa-heart" aria-hidden="true"></i></span>
                                        <!-- 		Buy Now / ADD to Cart-->
                                           <span class="buy">View Details</span>
                                         </button>
                                            <!-- End Button buying -->

                                        </div>

                                        </div>

                                        <!-- 	End	Product details   -->
                                        <!-- 	Start product image & Information -->

                                        <div class="product-image">
                                            <img src="img/most-best-sellers/cutHair.jpg">
                                        </div>
                                        <!--  End product image  -->

                                        </div>            
                                    </div>
                                    <div class="column">
                                        <div id="container-card">	
                                        <!-- Start	Product details -->     
                                            <div class="product-details">

                                                <!-- 	Product Name -->
                                            <div class="column">
                                            <h1>Profesional Mackeup</h1>

                                        <!-- 		<span class="hint new">New</span> -->
                                        <!-- 		<span class="hint free-shipping">Free Shipping</span> -->
                                        <!-- 		the Product rating -->

                                           <div class="promotion-description justify-start align-center" style="height: 20px; margin-bottom: 20px;">
                                                                <div class="star-rating" title="80%" style="width: 58%;">
                                                                    <div class="back-stars">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>

                                                                        <div class="front-stars" style="width: 80%">
                                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                                        </div>
                                                                    </div>
                                                                </div> 
                                                            </div>


                                        <!-- The most important information about the product -->
                                                <p class="information">" Especially good for container gardening, the Angelonia will keep blooming all summer even if old flowers are removed."</p>
                                         </div>  

                                        <!-- 		Control -->
                                        <div class="control">

                                        <!-- Start Button buying -->
                                            <button class="btnx">
                                        <!-- 		the Price -->
                                             <span class="price">49 $</span>
                                        <!-- 		shopping cart icon-->
                                           <span class="shopping-cart"><i class="fas fa-heart" aria-hidden="true"></i></span>
                                        <!-- 		Buy Now / ADD to Cart-->
                                           <span class="buy">View Details</span>
                                         </button>
                                            <!-- End Button buying -->

                                        </div>

                                        </div>

                                        <!-- 	End	Product details   -->
                                        <!-- 	Start product image & Information -->

                                        <div class="product-image">
                                            <img src="img/most-best-sellers/15ker_smink.jpg">
                                        </div>
                                        <!--  End product image  -->

                                        </div>            
                                    </div>
 </div>
                                <div class="row">
                                    <div class="column">
                                        <div id="container-card">	
                                        <!-- Start	Product details -->     
                                            <div class="product-details">

                                                <!-- 	Product Name -->
                                            <div class="column">
                                            <h1 class="best">Profesional tatto</h1>

                                        <!-- 		<span class="hint new">New</span> -->
                                        <!-- 		<span class="hint free-shipping">Free Shipping</span> -->
                                        <!-- 		the Product rating -->

                                           <div class="promotion-description justify-start align-center" style="height: 20px; margin-bottom: 20px;">
                                                                <div class="star-rating" title="50%" style="width: 58%;">
                                                                    <div class="back-stars">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>

                                                                        <div class="front-stars" style="width: 90%">
                                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                                        </div>
                                                                    </div>
                                                                </div> 
                                                            </div>


                                        <!-- The most important information about the product -->
                                                <p class="information">" Especially good for container gardening, the Angelonia will keep blooming all summer even if old flowers are removed."</p>
                                         </div>  

                                        <!-- 		Control -->
                                        <div class="control">

                                        <!-- Start Button buying -->
                                            <button class="btnx">
                                        <!-- 		the Price -->
                                             <span class="price">99 $</span>
                                        <!-- 		shopping cart icon-->
                                           <span class="shopping-cart"><i class="fas fa-heart" aria-hidden="true"></i></span>
                                        <!-- 		Buy Now / ADD to Cart-->
                                           <span class="buy">View Details</span>
                                         </button>
                                            <!-- End Button buying -->

                                        </div>

                                        </div>

                                        <!-- 	End	Product details   -->
                                        <!-- 	Start product image & Information -->

                                        <div class="product-image">
                                            <img src="img/most-best-sellers/tatto.jpg">
                                        </div>
                                        <!--  End product image  -->

                                        </div>            
                                    </div>
                                    <div class="column">
                                        <div id="container-card">	
                                        <!-- Start	Product details -->     
                                            <div class="product-details">

                                                <!-- 	Product Name -->
                                            <div class="column">
                                            <h1>Profesional Barbercut</h1>

                                        <!-- 		<span class="hint new">New</span> -->
                                        <!-- 		<span class="hint free-shipping">Free Shipping</span> -->
                                        <!-- 		the Product rating -->

                                           <div class="promotion-description justify-start align-center" style="height: 20px; margin-bottom: 20px;">
                                                                <div class="star-rating" title="80%" style="width: 58%;">
                                                                    <div class="back-stars">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>

                                                                        <div class="front-stars" style="width: 67%">
                                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                                        </div>
                                                                    </div>
                                                                </div> 
                                                            </div>


                                        <!-- The most important information about the product -->
                                                <p class="information">" Especially good for container gardening, the Angelonia will keep blooming all summer even if old flowers are removed."</p>
                                         </div>  

                                        <!-- 		Control -->
                                        <div class="control">

                                        <!-- Start Button buying -->
                                            <button class="btnx">
                                        <!-- 		the Price -->
                                             <span class="price">79 $</span>
                                        <!-- 		shopping cart icon-->
                                           <span class="shopping-cart"><i class="fas fa-heart" aria-hidden="true"></i></span>
                                        <!-- 		Buy Now / ADD to Cart-->
                                           <span class="buy">View Details</span>
                                         </button>
                                            <!-- End Button buying -->

                                        </div>

                                        </div>

                                        <!-- 	End	Product details   -->
                                        <!-- 	Start product image & Information -->

                                        <div class="product-image">
                                            <img src="img/most-best-sellers/barbercut.jpg">
                                        </div>
                                        <!--  End product image  -->

                                        </div>            
                                    </div>
                                </div>
                             </div>
                          </div>
                          <div class="carousel-cell">
                              <div class="column">
                                <div class="row">
                                    <div class="column">
                                        <div id="container-card">	
                                        <!-- Start	Product details -->     
                                            <div class="product-details">

                                                <!-- 	Product Name -->
                                            <div class="column">
                                            <h1 class="best">Profesional colorhair</h1>

                                        <!-- 		<span class="hint new">New</span> -->
                                        <!-- 		<span class="hint free-shipping">Free Shipping</span> -->
                                        <!-- 		the Product rating -->

                                           <div class="promotion-description justify-start align-center" style="height: 20px; margin-bottom: 20px;">
                                                                <div class="star-rating" title="86%" style="width: 58%;">
                                                                    <div class="back-stars">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>

                                                                        <div class="front-stars" style="width: 86%">
                                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                                        </div>
                                                                    </div>
                                                                </div> 
                                                            </div>


                                        <!-- The most important information about the product -->
                                                <p class="information">" Especially good for container gardening, the Angelonia will keep blooming all summer even if old flowers are removed."</p>
                                         </div>  

                                        <!-- 		Control -->
                                        <div class="control">

                                        <!-- Start Button buying -->
                                            <button class="btnx">
                                        <!-- 		the Price -->
                                             <span class="price">67 $</span>
                                        <!-- 		shopping cart icon-->
                                           <span class="shopping-cart"><i class="fas fa-heart" aria-hidden="true"></i></span>
                                        <!-- 		Buy Now / ADD to Cart-->
                                           <span class="buy">View Details</span>
                                         </button>
                                            <!-- End Button buying -->

                                        </div>

                                        </div>

                                        <!-- 	End	Product details   -->
                                        <!-- 	Start product image & Information -->

                                        <div class="product-image">
                                            <img src="img/most-best-sellers/color.jpg">
                                        </div>
                                        <!--  End product image  -->

                                        </div>            
                                    </div>
                                    <div class="column">
                                        <div id="container-card">	
                                        <!-- Start	Product details -->     
                                            <div class="product-details">

                                                <!-- 	Product Name -->
                                            <div class="column">
                                            <h1>Profesional Stylist</h1>

                                        <!-- 		<span class="hint new">New</span> -->
                                        <!-- 		<span class="hint free-shipping">Free Shipping</span> -->
                                        <!-- 		the Product rating -->

                                           <div class="promotion-description justify-start align-center" style="height: 20px; margin-bottom: 20px;">
                                                                <div class="star-rating" title="64%" style="width: 58%;">
                                                                    <div class="back-stars">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>

                                                                        <div class="front-stars" style="width: 64%">
                                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                                        </div>
                                                                    </div>
                                                                </div> 
                                                            </div>


                                        <!-- The most important information about the product -->
                                                <p class="information">" Especially good for container gardening, the Angelonia will keep blooming all summer even if old flowers are removed."</p>
                                         </div>  

                                        <!-- 		Control -->
                                        <div class="control">

                                        <!-- Start Button buying -->
                                            <button class="btnx">
                                        <!-- 		the Price -->
                                             <span class="price">49 $</span>
                                        <!-- 		shopping cart icon-->
                                           <span class="shopping-cart"><i class="fas fa-heart" aria-hidden="true"></i></span>
                                        <!-- 		Buy Now / ADD to Cart-->
                                           <span class="buy">View Details</span>
                                         </button>
                                            <!-- End Button buying -->

                                        </div>

                                        </div>

                                        <!-- 	End	Product details   -->
                                        <!-- 	Start product image & Information -->

                                        <div class="product-image">
                                            <img src="img/most-best-sellers/stylist.jpg">
                                        </div>
                                        <!--  End product image  -->

                                        </div>            
                                    </div>
 </div>
                                <div class="row">
                                    <div class="column">
                                        <div id="container-card">	
                                        <!-- Start	Product details -->     
                                            <div class="product-details">

                                                <!-- 	Product Name -->
                                            <div class="column">
                                            <h1 class="best">Profesional barber</h1>

                                        <!-- 		<span class="hint new">New</span> -->
                                        <!-- 		<span class="hint free-shipping">Free Shipping</span> -->
                                        <!-- 		the Product rating -->

                                           <div class="promotion-description justify-start align-center" style="height: 20px; margin-bottom: 20px;">
                                                                <div class="star-rating" title="50%" style="width: 58%;">
                                                                    <div class="back-stars">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>

                                                                        <div class="front-stars" style="width: 90%">
                                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                                        </div>
                                                                    </div>
                                                                </div> 
                                                            </div>


                                        <!-- The most important information about the product -->
                                                <p class="information">" Especially good for container gardening, the Angelonia will keep blooming all summer even if old flowers are removed."</p>
                                         </div>  

                                        <!-- 		Control -->
                                        <div class="control">

                                        <!-- Start Button buying -->
                                            <button class="btnx">
                                        <!-- 		the Price -->
                                             <span class="price">99 $</span>
                                        <!-- 		shopping cart icon-->
                                           <span class="shopping-cart"><i class="fas fa-heart" aria-hidden="true"></i></span>
                                        <!-- 		Buy Now / ADD to Cart-->
                                           <span class="buy">View Details</span>
                                         </button>
                                            <!-- End Button buying -->

                                        </div>

                                        </div>

                                        <!-- 	End	Product details   -->
                                        <!-- 	Start product image & Information -->

                                        <div class="product-image">
                                            <img src="img/most-best-sellers/barber.png">
                                        </div>
                                        <!--  End product image  -->

                                        </div>            
                                    </div>
                                    <div class="column">
                                        <div id="container-card">	
                                        <!-- Start	Product details -->     
                                            <div class="product-details">

                                                <!-- 	Product Name -->
                                            <div class="column">
                                            <h1>Profesional Nails</h1>

                                        <!-- 		<span class="hint new">New</span> -->
                                        <!-- 		<span class="hint free-shipping">Free Shipping</span> -->
                                        <!-- 		the Product rating -->

                                           <div class="promotion-description justify-start align-center" style="height: 20px; margin-bottom: 20px;">
                                                                <div class="star-rating" title="80%" style="width: 58%;">
                                                                    <div class="back-stars">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>

                                                                        <div class="front-stars" style="width: 97%">
                                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                                        </div>
                                                                    </div>
                                                                </div> 
                                                            </div>


                                        <!-- The most important information about the product -->
                                                <p class="information">" Especially good for container gardening, the Angelonia will keep blooming all summer even if old flowers are removed."</p>
                                         </div>  

                                        <!-- 		Control -->
                                        <div class="control">

                                        <!-- Start Button buying -->
                                            <button class="btnx">
                                        <!-- 		the Price -->
                                             <span class="price">29 $</span>
                                        <!-- 		shopping cart icon-->
                                           <span class="shopping-cart"><i class="fas fa-heart" aria-hidden="true"></i></span>
                                        <!-- 		Buy Now / ADD to Cart-->
                                           <span class="buy">View Details</span>
                                         </button>
                                            <!-- End Button buying -->

                                        </div>

                                        </div>

                                        <!-- 	End	Product details   -->
                                        <!-- 	Start product image & Information -->

                                        <div class="product-image">
                                            <img src="img/most-best-sellers/nails.jpg">
                                        </div>
                                        <!--  End product image  -->

                                        </div>            
                                    </div>
 </div>
                             </div>
                            
                          </div>
                        </div>
                           
                        <!-- END CARDS SLIDER BEST SELLER - MOST WANTED -->
                           
                        <div class="white-space-64"></div>
                           
                            <div class="promotion-title align-center justify-center color-blue">
                            <i class="fas fa-minus"></i>
                            <h1 class="color-blue titles-text">
                                &nbsp; VIEW ALL SERVICES
                            </h1>
                            <i class="fas fa-minus skull-icon"></i>
                           </div>

                          <div class="white-space-32"></div>
                          <div class="row-responsive row-categories" id="break-ipad">
                              <div class="column align-center wow fadeInLeft categories-hov">
                                <a href="#">
                                    <div class="colum-categories">
                                        <img src="img/categories/1.png" alt="Stylist" title="Stylist"/>
                                    </div>
                                </a>
                              </div>
                            <div class="column categories align-center wow fadeInLeft">
                                <a href="#">
                                    <div class="colum-categories">
                                        <img src="img/categories/2.png" alt="Tattooist" title="Tattooist"/>
                                    </div>
                                </a>
                            </div>
                             <div class="column categories align-center wow fadeInLeft">
                                <a href="#">
                                    <div class="colum-categories">
                                        <img src="img/categories/3.png" alt="Makeup Artist" title="Makeup Artist"/>
                                    </div>
                                </a>
                            </div>
                        </div>
                           
                          <div class="row-responsive row-categories" id="break-ipad">
                              <div class="column align-center wow fadeInLeft">
                                <a href="#">
                                    <div class="colum-categories">
                                        <img src="img/categories/4.png" alt="Barber" title="Barber"/>
                                    </div>
                                </a>
                            </div>
                            <div class="column categories align-center wow fadeInLeft">
                                <a href="#">
                                    <div class="colum-categories">
                                        <img src="img/categories/5.png" alt="Manicurist" title="Manicurist"/>
                                    </div>
                                </a>
                            </div>
                             <div class="column categories align-center wow fadeInLeft">
                                <a href="#">
                                    <div class="colum-categories">
                                        <img src="img/categories/6.png" alt="Beautician" title="Beautician"/>
                                    </div>
                                </a>
                            </div>
                        
                        </div>
                           
                           
                        <div class="white-space-64"></div>
                    </div> <!-- End Promotion Column -->
                </div>
            </div> <!-- End Promotion -->


            <div class="white-space-64"></div>


@endsection

@section('pops')

	 <div id="popup1" class="overlay">
            <div class="popup">
                <a class="close" href="#">&times;</a>
                <form class="login-form">
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
                                            <!--   user name Input-->
                                             <input class="form-input2" id="txt-input2" type="text" placeholder="@UserName" required>
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


                                          <br>
                                    <!--        buttons -->
                                    <!--      button LogIn -->
                                          <button class="log-in2"> Log In </button>
                                       </div>

                                    <!--   other buttons -->
                                       <div class="other">
                                    <!--      Forgot Password button-->
                                          <button class="btn submits frgt-pass">Forgot Password</button>
                                    <!--     Sign Up button -->
                                          <button class="btn submits sign-up">Sign Up 
                                    <!--         Sign Up font icon -->
                                          <i class="fa fa-user-plus" aria-hidden="true"></i>
                                          </button>
                                    <!--      End Other the Division -->
                                       </div>

                                    <!--   End Conrainer  -->
                                      </div>

                                      <!-- End Form -->
                                    </form>
            </div>
        </div>
            

@endsection