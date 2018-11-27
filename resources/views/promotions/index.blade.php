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
    <script type="text/javascript" src="js/price.js" defer></script>
    
@endsection

@section('content')

	       <div class="row fadeInLeft img-degrad ">
                    <div class="responsive-img ">
                        <img class="principal-images" src="img/portadas/cool.jpg"/>
                    </div>
            </div>
            <div class="justify-center">
            <div class="container">
                <div class="column">
                
                 <div class="white-space-32"></div>
                <div class="row-responsive">
                <div class="column filters-catalog">
                    <div class="promotion-name justify-start">
                                <span class="product_name color-blue">FILTER SELECTION</span>
                                </div>  
                </div>
                
                <div class="images-catalog"> 
                    <div class="row">
                        <div class="column">
                            <div class="row">
                        <div class="promotion-name justify-start">
                        <span class="product_name color-blue">SHORT BY:</span>
                        <select class="select-options">
                          <option value="volvo">DEFAULT</option>
                          <option value="saab">NAME (A-Z)</option>
                          <option value="opel">NAME (Z-A)</option>
                          <option value="audi">RATING (HIGHEST)</option>
                          <option value="audi">RATING (LOWEST)</option>
                        </select>
                         </div>
                        <div class="promotion-name justify-start">
                        <span class="product_name color-blue">SHOW:</span>
                        <select class="select-options" style="width: 80px">
                          <option value="volvo">12</option>
                          <option value="saab">24</option>
                          <option value="opel">50</option>
                        </select>
                        </div>
                        </div>
                       </div>
                        <div class="column">
                         <div class="row">
                        <div class="promotion-name justify-end">
                         <i class="fas fa-th-list icon-option-catalog color-blue"></i>
                         <i class="fas fa-th-large icon-option-catalog margin color-blue" ></i>
                        </div>
                         </div>
                        </div>
                    </div>
                    
                </div>
                </div>
                    <div class="row-responsive">
                        <div class="column filters-catalog">
                                <div class="white-space-32"></div>
                                <div class="promotion-name justify-start">
                                <div class="row">

                                <span class="product_name color-blue">MAX-PRICE: </span>
                                <span id="demo" style="margin-left: 5px"></span>
                                </div>
                                </div> 

                                <div class="slidecontainer">
                                  <input type="range" min="1" max="2000" value="50" class="slider" id="myRange">
                                </div>
                                
                                <div class="white-space-16"></div>
                            
                                <div class="promotion-name justify-start">
                                <span class="product_name color-blue">PROVIDERS</span>
                                </div>
                            
                                <div class="white-space-16"></div>
                                <div class="column justify-start">
                                    <span class=" color-darkGray">NAME PROVIDER</span>
                                    <div class="white-space-8"></div>
                                    <span class=" color-darkGray">NAME PROVIDER</span>
                                    <div class="white-space-8"></div>
                                    <span class=" color-darkGray">NAME PROVIDER</span>
                                    <div class="white-space-8"></div>
                                    <span class=" color-darkGray">NAME PROVIDER</span>
                                    <div class="white-space-8"></div>
                                    <span class=" color-darkGray">NAME PROVIDER</span>
                                </div>
                            <div class="white-space-16"></div>
                                                <div class="responsive-img justify-start">
                                                    <img class="publicity-promotion" src="img/publicity/sport.jpg" />
                                                </div>
                                
                               
                        </div>
                        
                        <div class="column catalogo">
                            <div class="white-space-32"></div>
                           <div class="column wow fadeInUp">
                                <div class="box">
                                    
                                    
                                    
                                    <!-- START PROMOTION ITEM -->
                                    <div class="promotion-item conteiner-item-catalog">
                                        <div class="column">
                                            <div class="promotion-image responsive-img">
                                                <img class="img-catalog" src="img/promotions/1.jpg">
                                            </div>
                                            <div class="white-space-8"></div>
                                            <div class="promotion-name justify-center">
                                                <h3>
                                                    NOMBRE SERVICIO
                                                </h3>
                                            </div>
                                            <div class=" justify-center align-center">
                                                        <div class="star-rating" title="100%" style="width: 46%;">
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
                                            <div class="white-space-8"></div>
                                               <div class="promotion-price justify-center align-center">
                                                <h4>
                                                    $500.00 &nbsp;
                                                </h4>
                                                <h5 class="color-orange discount">
                                                    $667.00
                                                </h5>
                                            </div>
                                            <div class="white-space-8"></div>
                                            <div class="div justify-center color-lightGray">
                                                <a class="btn btn-cart btn2 " href="#">
                                                    VIEW DETAILS
                                                </a>
                                            </div>
                                            <div class="white-space-24"></div>
                                        </div>
                                    </div> 
                                    <!-- End Promotion-item-->

                                    <div class="promotion-item conteiner-item-catalog">
                                        <div class="column">
                                            <div class="promotion-image responsive-img">
                                                <img class="img-catalog" src="img/promotions/8.jpg">
                                            </div>
                                            <div class="white-space-8"></div>
                                            <div class="promotion-name justify-center">
                                                <h3>
                                                    NOMBRE SERVICIO
                                                </h3>
                                            </div>
                                            
                                           <div class=" justify-center align-center">
                                                        <div class="star-rating" title="100%" style="width: 46%;">
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
                                            <div class="white-space-8"></div>
                                               <div class="promotion-price justify-center align-center">
                                                <h4>
                                                    $500.00 &nbsp;
                                                </h4>
                                                <h5 class="color-orange discount">
                                                    $667.00
                                                </h5>
                                            </div>
                                            <div class="white-space-8"></div>
                                            <div class="div justify-center color-lightGray">
                                                <a class="btn btn-cart btn2 " href="#">
                                                    VIEW DETAILS
                                                </a>
                                            </div>
                                            <div class="white-space-24"></div>
                                        </div>
                                    </div> <!-- End Promotion-item-->

                                    <div class="promotion-item conteiner-item-catalog">
                                        <div class="column">
                                            <div class="promotion-image responsive-img">
                                                <img class="img-catalog" src="img/promotions/3.jpg">
                                            </div>
                                            <div class="white-space-8"></div>
                                            <div class="promotion-name justify-center">
                                                <h3>
                                                    NOMBRE SERVICIO
                                                </h3>
                                            </div>
                                            <div class=" justify-center align-center">
                                                        <div class="star-rating" title="100%" style="width: 46%;">
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
                                            <div class="white-space-8"></div>
                                               <div class="promotion-price justify-center align-center">
                                                <h4>
                                                    $500.00 &nbsp;
                                                </h4>
                                                <h5 class="color-orange discount">
                                                    $667.00
                                                </h5>
                                            </div>
                                            <div class="white-space-8"></div>
                                            <div class="div justify-center color-lightGray">
                                                <a class="btn btn-cart btn2 " href="#">
                                                    VIEW DETAILS
                                                </a>
                                            </div>
                                            <div class="white-space-24"></div>
                                        </div>
                                    </div> <!-- End Promotion-item-->
                                    
                                     <div class="promotion-item conteiner-item-catalog">
                                        <div class="column">
                                            <div class="promotion-image responsive-img">
                                                <img class="img-catalog" src="img/promotions/4.jpg">
                                            </div>
                                            <div class="white-space-8"></div>
                                            <div class="promotion-name justify-center">
                                                <h3>
                                                    NOMBRE SERVICIO
                                                </h3>
                                            </div>
                                            <div class=" justify-center align-center">
                                                        <div class="star-rating" title="100%" style="width: 46%;">
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
                                            <div class="white-space-8"></div>
                                               <div class="promotion-price justify-center align-center">
                                                <h4>
                                                    $500.00 &nbsp;
                                                </h4>
                                                <h5 class="color-orange discount">
                                                    $667.00
                                                </h5>
                                            </div>
                                            <div class="white-space-8"></div>
                                            <div class="div justify-center color-lightGray">
                                                <a class="btn btn-cart btn2 " href="#">
                                                    VIEW DETAILS
                                                </a>
                                            </div>
                                            <div class="white-space-24"></div>
                                        </div>
                                    </div> <!-- End Promotion-item-->
                                    
                                     <div class="promotion-item conteiner-item-catalog">
                                        <div class="column">
                                            <div class="promotion-image responsive-img">
                                                <img class="img-catalog" src="img/promotions/5.jpg">
                                            </div>
                                            <div class="white-space-8"></div>
                                            <div class="promotion-name justify-center">
                                                <h3>
                                                    NOMBRE SERVICIO
                                                </h3>
                                            </div>
                                            <div class=" justify-center align-center">
                                                        <div class="star-rating" title="100%" style="width: 46%;">
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
                                            <div class="white-space-8"></div>
                                               <div class="promotion-price justify-center align-center">
                                                <h4>
                                                    $500.00 &nbsp;
                                                </h4>
                                                <h5 class="color-orange discount">
                                                    $667.00
                                                </h5>
                                            </div>
                                            <div class="white-space-8"></div>
                                            <div class="div justify-center color-lightGray">
                                                <a class="btn btn-cart btn2 " href="#">
                                                    VIEW DETAILS
                                                </a>
                                            </div>
                                            <div class="white-space-24"></div>
                                        </div>
                                    </div> <!-- End Promotion-item-->
                                    
                                     <div class="promotion-item conteiner-item-catalog">
                                        <div class="column">
                                            <div class="promotion-image responsive-img">
                                                <img class="img-catalog" src="img/promotions/6.jpg">
                                            </div>
                                            <div class="white-space-8"></div>
                                            <div class="promotion-name justify-center">
                                                <h3>
                                                    NOMBRE SERVICIO
                                                </h3>
                                            </div>
                                           <div class=" justify-center align-center">
                                                        <div class="star-rating" title="100%" style="width: 46%;">
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
                                            <div class="white-space-8"></div>
                                               <div class="promotion-price justify-center align-center">
                                                <h4>
                                                    $500.00 &nbsp;
                                                </h4>
                                                <h5 class="color-orange discount">
                                                    $667.00
                                                </h5>
                                            </div>
                                            <div class="white-space-8"></div>
                                            <div class="div justify-center color-lightGray">
                                                <a class="btn btn-cart btn2 " href="#">
                                                    VIEW DETAILS
                                                </a>
                                            </div>
                                            <div class="white-space-24"></div>
                                        </div>
                                    </div> <!-- End Promotion-item-->
                                    
                                     <div class="promotion-item conteiner-item-catalog">
                                        <div class="column">
                                            <div class="promotion-image responsive-img">
                                                <img class="img-catalog" src="img/promotions/7.jpg">
                                            </div>
                                            <div class="white-space-8"></div>
                                            <div class="promotion-name justify-center">
                                                <h3>
                                                    NOMBRE SERVICIO
                                                </h3>
                                            </div>
                                           <div class=" justify-center align-center">
                                                        <div class="star-rating" title="100%" style="width: 46%;">
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
                                            <div class="white-space-8"></div>
                                               <div class="promotion-price justify-center align-center">
                                                <h4>
                                                    $500.00 &nbsp;
                                                </h4>
                                                <h5 class="color-orange discount">
                                                    $667.00
                                                </h5>
                                            </div>
                                            <div class="white-space-8"></div>
                                            <div class="div justify-center color-lightGray">
                                                <a class="btn btn-cart btn2 " href="#">
                                                    VIEW DETAILS
                                                </a>
                                            </div>
                                            <div class="white-space-24"></div>
                                        </div>
                                    </div> <!-- End Promotion-item-->
                               </div>
                        
                            </div>
                        </div>
                         
                    </div>
                    
                    
                    
                </div>

            </div>
            </div>
            
             <div class="white-space-64"></div>

@endsection