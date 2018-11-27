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
    <link rel="stylesheet" href="css/loginreg.css" media="screen">
    <link rel="stylesheet" href="css/popup-moreDetails.css" media="screen">
    <link rel="stylesheet" href="css/empleados.css" media="screen">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/solid.css" integrity="sha384-VGP9aw4WtGH/uPAOseYxZ+Vz/vaTb1ehm1bwx92Fm8dTrE+3boLfF1SpAtB1z7HW" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/brands.css" integrity="sha384-rf1bqOAj3+pw6NqYrtaE1/4Se2NBwkIfeYbsFdtiR6TQz0acWiwJbv1IM/Nt/ite" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/fontawesome.css" integrity="sha384-1rquJLNOM3ijoueaaeS5m+McXPJCGdr5HcA03/VHXxcp2kX2sUrQDmFc3jR5i/C7" crossorigin="anonymous">
    
   <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great|Marmelad" rel="stylesheet">
    
    <!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <script type="text/javascript" src="engine1/jquery.js"></script>
    <!-- End WOWSlider.com HEAD section -->
    
      <!-- Flickity -->
    <link rel="stylesheet" href="css/flickity.css" media="screen">
    <script src="js/flickity.pkgd.min.js" defer></script>    
    <!-- End Flickity -->
    
    <!-- SLICK -->
    <link rel="stylesheet" type="text/css" href="css/slick.css"/>
    <script type="text/javascript" src="js/slick.min.js"></script>
    <script type="text/javascript" src="js/slide-description.js" defer></script>
    <!-- END SLICK -->
    
    <script type="text/javascript" src="js/products-cards.js" defer></script>
    <script type="text/javascript" src="js/employees.js" defer></script>
    

@endsection

@section('facebook')

	<div id="fb-root"></div>
    <script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.2';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

@endsection

@section('content')

	 <div class="promotions justify-center">
                <div class="container">
                    <div class="column">
                           <div class="white-space-32"></div>
                           <div class="promotion-title align-start justify-start color-blue">
                            <i class="fas fa-minus"></i>
                            <h1 class="color-blue titles-text">
                                &nbsp; PROVIDER PROFILE
                            </h1>
                        </div>
                            <div class="white-space-32"></div>
                               <div class="row-responsive">
                           <div class="left">
                            <div class="categories wow fadeInLeft" data-wow-delay="0.5s">
                                <div class="column">
                                    <div class="category-head column">
                                 <div class="row justify-center">
                                     <div class="column column-image-profile fadeInLeft ">
                                            <div class="responsive-img ">
                                                <img class="image-profile-provider" src="img/portadas/profile.jpg"/>
                                            </div>
                                    </div>
                                </div>
                                <div class="row justify-center">  
                                    <div class="detail-descrip justify-center align-center column">
                                                <div class="white-space-8"></div>
                                                <h3 class="color-white">
                                                    Name provider
                                                </h3>
                                                <div class="white-space-8"></div>
                                                <div class=" justify-center align-center">
                                                    <div class="star-rating" title="100%" style="width: 48%;">
                                                        <div class="back-stars stars-profile">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>

                                                            <div class="front-stars front-profile" style="width: 50%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </div>  
                                   </div>
                                   </div>
                                        
                                    </div>
                                    <div class="category-item bordered">
                                        <a class="link weight-medium" href="/profileProvider">
                                            About us
                                        </a>
                                    </div>
                                    <div class="category-item bordered">
                                        <a class="link weight-medium" href="/employees">
                                            Employees
                                        </a>
                                    </div>
                                    <div class="category-item bordered">
                                        <a class="link weight-medium" href="/services">
                                            Services
                                        </a>
                                    </div>
                                    <div class="category-item bordered">
                                        <a class="link weight-medium" href="/catalogProvider">
                                            Catalog
                                        </a>
                                    </div>
                                   
                                </div>
                            </div>
                        </div> 
                            <div class="right">                            
                            <div class="promotions justify-center">
                                <div class="container">
                                    <div class="column">
                                      
                                        <div class="promotion-title align-center color-orange">
                                            <i class="fas fa-tags color-blue"></i>
                                            <h2 class="color-blue">
                                                &nbsp; OUR SERVICES
                                            </h2>
                                        </div>
                                        <div class="white-space-8"></div>
                                        <div class="promotions-grid column wow fadeInUp">
                                           
                                               
                                            <div class="item-historial column">
                                                <div class="row header-historial">
                                                    
                                                       <div class="column">
                                                         <div class="row">
                                                           <div class="text-header-historial justify-start">
                                                            <h3>
                                                               Type of service
                                                            </h3>
                                                            </div>
                                                            <div class="text-header-historial justify-start">
                                                            <h3>
                                                               TYPE
                                                            </h3>
                                                            </div>
                                                         </div>
                                                       </div>
                                                       <div class="column">
                                                            <div class="tooltip text-header-historial justify-end">
                                                              <i class="fas fa-ellipsis-v"></i>
                                                              <span class="tooltiptext">Ver detalle</span>
                                                            </div>
                                                           
                                                       </div>
                                                    
                                                </div> 
                                                <div class="row-responsive content-historial" id="break-ipad">
                                                    <div class="column "> 
                                                       <div class="row">
                                                        <div class="historial-image responsive-img">
                                                            <img class="view-list" src="img/different/1.jpg" alt="Producto en Promoción" title="Producto en Promoción">
                                                        </div>
                                                        
                                                            <div class="justify-start column content-column">
                                                            <h3 class="text-content-historial">
                                                                SERVICE NAME
                                                            </h3>
                                                            <h3 class="text-content-historial descripcion-historial">
                                                                Description
                                                            </h3>
                                                            <div class="promotion-price justify-start align-start">
                                                            <h4>
                                                                $500.00 &nbsp;
                                                            </h4>
                                                            <h5 class="color-orange discount">
                                                                $667.00
                                                            </h5>
                                                            </div>
                                                                
                                                            </div>
                                                        
                                                       </div>
                                                    </div>
                                                    <div class="column info-vendedor">
                                                        <div class="justify-start column content-column">
                                                            <h3 class="text-content-historial">
                                                                Nombre Provider
                                                            </h3>
                                                            <h3 class="text-content-historial descripcion-historial">
                                                                Name Employee
                                                            </h3>
                                                          
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="item-historial column">
                                                <div class="row header-historial">
                                                    
                                                       <div class="column">
                                                         <div class="row">
                                                           <div class="text-header-historial justify-start">
                                                            <h3>
                                                               Type of service
                                                            </h3>
                                                            </div>
                                                            <div class="text-header-historial justify-start">
                                                            <h3>
                                                               TYPE
                                                            </h3>
                                                            </div>
                                                         </div>
                                                       </div>
                                                       <div class="column">
                                                            <div class="tooltip text-header-historial justify-end">
                                                              <i class="fas fa-ellipsis-v"></i>
                                                              <span class="tooltiptext">Ver detalle</span>
                                                            </div>
                                                           
                                                       </div>
                                                    
                                                </div> 
                                                <div class="row-responsive content-historial" id="break-ipad">
                                                    <div class="column "> 
                                                       <div class="row">
                                                        <div class="historial-image responsive-img">
                                                            <img class="view-list" src="img/different/3.jpg" alt="Producto en Promoción" title="Producto en Promoción">
                                                        </div>
                                                        
                                                            <div class="justify-start column content-column">
                                                            <h3 class="text-content-historial">
                                                                SERVICE NAME
                                                            </h3>
                                                            <h3 class="text-content-historial descripcion-historial">
                                                                Description
                                                            </h3>
                                                            <div class="promotion-price justify-start align-start">
                                                            <h4>
                                                                $500.00 &nbsp;
                                                            </h4>
                                                            <h5 class="color-orange discount">
                                                                $667.00
                                                            </h5>
                                                            </div>
                                                                
                                                            </div>
                                                        
                                                       </div>
                                                    </div>
                                                    <div class="column info-vendedor">
                                                        <div class="justify-start column content-column">
                                                            <h3 class="text-content-historial">
                                                                Nombre Provider
                                                            </h3>
                                                            <h3 class="text-content-historial descripcion-historial">
                                                                Name Employee
                                                            </h3>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                               
                                            <div class="item-historial column">
                                                <div class="row header-historial">
                                                    
                                                       <div class="column">
                                                         <div class="row">
                                                           <div class="text-header-historial justify-start">
                                                            <h3>
                                                               Type of service
                                                            </h3>
                                                            </div>
                                                            <div class="text-header-historial justify-start">
                                                            <h3>
                                                               TYPE
                                                            </h3>
                                                            </div>
                                                         </div>
                                                       </div>
                                                       <div class="column">
                                                            <div class="tooltip text-header-historial justify-end">
                                                              <i class="fas fa-ellipsis-v"></i>
                                                              <span class="tooltiptext">Ver detalle</span>
                                                            </div>
                                                           
                                                       </div>
                                                    
                                                </div> 
                                                <div class="row-responsive content-historial" id="break-ipad">
                                                    <div class="column "> 
                                                       <div class="row">
                                                        <div class="historial-image responsive-img">
                                                            <img class="view-list" src="img/different/2.jpg" alt="Producto en Promoción" title="Producto en Promoción">
                                                        </div>
                                                        
                                                            <div class="justify-start column content-column">
                                                            <h3 class="text-content-historial">
                                                                SERVICE NAME
                                                            </h3>
                                                            <h3 class="text-content-historial descripcion-historial">
                                                                Description
                                                            </h3>
                                                            <div class="promotion-price justify-start align-start">
                                                            <h4>
                                                                $500.00 &nbsp;
                                                            </h4>
                                                            <h5 class="color-orange discount">
                                                                $667.00
                                                            </h5>
                                                            </div>
                                                                
                                                            </div>
                                                        
                                                       </div>
                                                    </div>
                                                    <div class="column info-vendedor">
                                                        <div class="justify-start column content-column">
                                                            <h3 class="text-content-historial">
                                                                Nombre Provider
                                                            </h3>
                                                            <h3 class="text-content-historial descripcion-historial">
                                                                Name Employee
                                                            </h3>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="white-space-32"></div>
                                   
                                        </div> <!-- End Promotion-Grid -->

                                        <div class="white-space-32"></div>

                                    </div> <!-- End Promotion Column -->
                                </div>
                            </div> <!-- End Promotion -->
                        </div>
                    </div> <!-- End Catalogo Padre -->
                            
                            <div class="white-space-64"></div>
                            <div class="fb-comments" data-href="http://localhost/Makeover/profileProvider.html" data-width="100%" data-numposts="10"></div>
                            <div class="white-space-32"></div>
                    </div>
                </div>
            </div>
            
            

@endsection