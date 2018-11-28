@extends('layouts.home')

@section('title','Makeover')

@section('references')
       
     <link rel="stylesheet" href="{{ asset('css/core.min.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/stylekath.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/navflex.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/product-cards.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/searchBtn.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/cardsBestSeller.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/loginreg.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/popup-moreDetails.css') }}" media="screen">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/solid.css" integrity="sha384-VGP9aw4WtGH/uPAOseYxZ+Vz/vaTb1ehm1bwx92Fm8dTrE+3boLfF1SpAtB1z7HW" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/brands.css" integrity="sha384-rf1bqOAj3+pw6NqYrtaE1/4Se2NBwkIfeYbsFdtiR6TQz0acWiwJbv1IM/Nt/ite" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/fontawesome.css" integrity="sha384-1rquJLNOM3ijoueaaeS5m+McXPJCGdr5HcA03/VHXxcp2kX2sUrQDmFc3jR5i/C7" crossorigin="anonymous">
    
   <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great|Marmelad" rel="stylesheet">
    
    <!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="{{ asset('engine1/style.css') }}" />
    <script type="text/javascript" src="{{ asset('engine1/jquery.js') }}"></script>
    <!-- End WOWSlider.com HEAD section -->
    
      <!-- Flickity -->
    <link rel="stylesheet" href="{{asset('css/flickity.css')}}" media="screen">
    <script src="{{asset('js/flickity.pkgd.min.js')}}" defer></script>    
    <!-- End Flickity -->
    
    <!-- SLICK -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick.css')}}"/>
    <script type="text/javascript" src="{{asset('js/slick.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/slide-description.js')}}" defer></script>
    <!-- END SLICK -->
    
    <script type="text/javascript" src="{{asset('js/products-cards.js')}}" defer></script>
    

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
                                &nbsp; SERVICE DETAILS
                            </h1>
                        </div>
                            <div class="white-space-32"></div>
                          
                             <div class="row-responsive  " id="break-ipad">
                                 
                                 <div class="column view-detail">
                                <div class=" column">
                                <div class="slider-for image-big-container">
                                    <div class="item responsive-img image-big-container">
                                            <img class="principal-images image-big" src="{{ asset('img/services/'.$serv->image) }}"/>
                                    </div>
                                    <div class="item responsive-img image-big-container">
                                            <img class="principal-images image-big" src="{{ asset('img/services/'.$serv->image) }}"/>
                                    </div>
                                    <div class="item responsive-img image-big-container">
                                            <img class="principal-images image-big" src="{{ asset('img/services/'.$serv->image) }}"/>
                                    </div>
                                    <div class="item responsive-img image-big-container">
                                            <img class="principal-images image-big" src="{{ asset('img/services/'.$serv->image) }}"/>
                                    </div>
                                    <div class="item responsive-img image-big-container">
                                            <img class="principal-images image-big" src="{{ asset('img/services/'.$serv->image) }}"/>
                                    </div>
                                </div>
                                <div class="slider-nav row row-small slick-track2">
                                    <div class="item space-small slick-slide2 " >
                                        <div class="responsive-img image-small-container">
                                            <img class="principal-images image-small" src="{{ asset('img/services/'.$serv->image) }}"/>
                                        </div>
                                    </div>
                                    <div class="item space-small slick-slide2 ">
                                        <div class="responsive-img image-small-container">
                                            <img class="principal-images image-small" src="{{ asset('img/services/'.$serv->image) }}"/>
                                        </div>
                                    </div>
                                    <div class="item space-small slick-slide2 ">
                                        <div class="responsive-img image-small-container">
                                            <img class="principal-images image-small" src="{{ asset('img/services/'.$serv->image) }}"/>
                                        </div>
                                    </div>
                                    <div class="item space-small slick-slide2">
                                        <div class="responsive-img image-small-container">
                                            <img class="principal-images image-small" src="{{ asset('img/services/'.$serv->image) }}"/>
                                        </div>
                                    </div>
                                    <div class="item space-small slick-slide2">
                                        <div class="responsive-img image-small-container">
                                            <img class="principal-images image-small" src="{{ asset('img/services/'.$serv->image) }}"/>
                                        </div>
                                    </div>
                                    
                                </div>
                                </div>  
                                     

                                 </div>
                                 <div class="column">
                                   <div class="detail-name justify-start">
                                                <h3>
                                                    {{ $serv->name }}
                                                </h3>
                                   </div>
                                     <div class="white-space-8"></div>
                                    <div class=" justify-start align-start">
                                        <div class="star-rating" title="100%" style="width: 24%;">
                                            <div class="back-stars stars-detail">
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
                                     <div class="white-space-16"></div>
                                     <div class="promotion-price price-detail justify-start align-start">
                                        <h4 class="price">
                                            {{ $serv->price }} &nbsp;
                                        </h4>
                                        <h5 class=" discount">
                                            $667.00
                                        </h5>
                                    </div>
                                     <div class="white-space-32"></div>
                                     <div class="detail-descrip justify-start column">
                                                <h3>
                                                    Description
                                                </h3>
                                                <div class="white-space-8"></div>
                                                <p>{{ $serv->description }}</p>
                                   </div>
                                   <div class="white-space-24"></div>

                                   <div class="row row-profile">
                                     <div class="column column-image-profile fadeInLeft ">
                                            <div class="responsive-img ">
                                                <img class="image-profile-detal" src="{{ asset('img/branch/branch'.$proveedor->id.".jpg") }}"/>
                                            </div>
                                    </div>
                                       
                                    <div class="detail-descrip justify-start column">
                                                <div class="white-space-8"></div>
                                                <h3>
                                                    {{ $proveedor->name }}
                                                </h3>
                                                <div class="white-space-8"></div>
                                                <div class=" justify-start align-start">
                                                    <div class="star-rating" title="100%" style="width: 80%;">
                                                        <div class="back-stars stars-profile">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>

                                                            <div class="front-stars front-profile" style="width: 90%">
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
                                     <div class="white-space-24"></div>
                                    <div class="detail-descrip justify-start column">
                                               <div class="row">
                                                <h3>
                                                    Services specifications
                                                </h3>
                                                <a class="modal-details-link" href="#popup2">View More</a>
                                                </div>
                                                <div class="white-space-8"></div>          
                                   </div>
                                    <div class="white-space-32"></div>

                                  <div class="row justify-center">
                                    <div class="row" style="width: 59%;">
                                     <div class="div justify-center color-lightGray">
                                                <a class="btn btn-cart btn-carrito color-white " href="#">
                                                    ADD TO CART
                                                </a>
                                     </div>
                                     <div class="div justify-center color-lightGray">
                                                <a class="btn btn-cart btn-buy color-white " href="/payment">
                                                    BUY NOW
                                                </a>
                                     </div>
                                    </div>
                                 </div>
                                     
                                </div>
                                 
                             </div>
                            <div class="white-space-64"></div>
                            <div class="fb-comments" data-href="http://localhost/Makeover/index.html" data-width="100%" data-numposts="10"></div>
                            <div class="white-space-32"></div>
                    </div>
                </div>
            </div>

@endsection

@section('pops')

	 <div id="popup2" class="overlay">
            <div class="popup-details">
                
                <a class="close-details" href="#">&times;</a>
                <form class="form-detail">
                   <!--   con = Container  for items in the form-->
                   <div class="con">
                    <div class="row title-modal"> 
                        <div class="detail-descrip justify-start column">
                                                <h3>
                                                    Service Name
                                                </h3>
                        </div>
                        <div class="detail-descrip price-modal justify-end column">
                                   
                            
                                    <div class="promotion-price justify-start align-start">
                                        <h3>
                                                    Price :
                                    </h3>
                                        <h4 class="price2">
                                            $500.00 &nbsp;
                                        </h4>
                                        <h5 class=" discount-modal">
                                            $667.00
                                        </h5>
                                    </div>
                        </div>
                    </div>
        
                        <div class="">
                            <div class="column">
                            <div class="white-space-8"></div>
                             <div class="row row-profile-modal">
                                     <div class="column column-image-profile fadeInLeft ">
                                            <div class="responsive-img ">
                                                <img class="image-profile-detal" src="img/portadas/profile.jpg"/>
                                            </div>
                                    </div>
                                       
                                    <div class="detail-descrip justify-start column">
                                                <div class="white-space-8"></div>
                                                <h3 class="color-white">
                                                    Name provider
                                                </h3>
                                                <div class="white-space-8"></div>
                                                <div class=" justify-start align-start">
                                                    <div class="star-rating" title="100%" style="width: 62%;">
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
                                   <div class="column justify-center align-center">
                                           <div class="div justify-center color-lightGray">
                                                <a class="btn btn-cart btn3 color-white " href="/profileProvider">
                                                    VIEW PROFILE
                                                </a>
                                            </div>
                                       </div>
                                   </div>
                             <div class="white-space-16"></div>
                                    <div class="detail-descrip descrip-modal justify-start column">
                                               <div class="row">
                                                <h3 class="padding-10">
                                                    Services specifications
                                                </h3>
                                                
                                                </div>
                                                <div class="white-space-8"></div>
                                                <p class=" padding-10 bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, harum inventore a sit quis eum nemo expedita reprehenderit laborum tempora modi neque praesentium totam cum omnis excepturi, sequi vero alias.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur.</p>
                                        
                                                <div class="white-space-16"></div>
                                        
                                               <div class="row">
                                                <h3 class="padding-10">
                                                    The services includes
                                                </h3>
                                                
                                                </div>
                                                <div class="white-space-8"></div>
                                                <h4 class="padding-10 bold"> Detail 1</h4>
                                                <h4 class="padding-10 bold"> Detail 2</h4>
                                                <h4 class="padding-10 bold"> Detail 3</h4>
                                   </div>
                                
                            <div class="white-space-16"></div>
                                      
                            </div>
                        </div>
                <!--   End Conrainer  -->
                    </div>

                  <!-- End Form -->
                </form>
            </div>
        </div>

@endsection