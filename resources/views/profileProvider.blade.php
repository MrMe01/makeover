@extends('layouts.home')

@section('title','Makeover')

@section('references')

	<link rel="stylesheet" href="{{URL::asset('css/core.min.css')}}" media="screen">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}" media="screen">
    <link rel="stylesheet" href="{{URL::asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/stylekath.css')}}" media="screen">
    <link rel="stylesheet" href="{{URL::asset('css/navflex.css')}}" media="screen">
    <link rel="stylesheet" href="{{URL::asset('css/searchBtn.css')}}" media="screen">
    <link rel="stylesheet" href="{{URL::asset('css/loginreg.css')}}" media="screen">
    <link rel="stylesheet" href="{{URL::asset('css/popup-moreDetails.css')}}" media="screen">
    <link rel="stylesheet" href="{{URL::asset('css/empleados.css')}}" media="screen">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/solid.css" integrity="sha384-VGP9aw4WtGH/uPAOseYxZ+Vz/vaTb1ehm1bwx92Fm8dTrE+3boLfF1SpAtB1z7HW" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/brands.css" integrity="sha384-rf1bqOAj3+pw6NqYrtaE1/4Se2NBwkIfeYbsFdtiR6TQz0acWiwJbv1IM/Nt/ite" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/fontawesome.css" integrity="sha384-1rquJLNOM3ijoueaaeS5m+McXPJCGdr5HcA03/VHXxcp2kX2sUrQDmFc3jR5i/C7" crossorigin="anonymous">
    
   <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great|Marmelad" rel="stylesheet">
  

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
                        </div> <!-- End Left-->

                        <div class="right">                            
                            <div class="promotions justify-center">
                                <div class="container conGallery">
                                    <div class="column">
                                       
                                        <div class="promotion-title align-start justify-start color-blue">
                                            <i class="fas fa-minus"></i>
                                            <h1 class="color-blue titles-text">
                                                &nbsp; PROFILE
                                            </h1>
                                            <i class="fas fa-minus skull-icon"></i>
                                         </div>
                                        <div class="white-space-16"></div>
                                        <div class="column align-start justify-start section-about">
                                            <h2 class="color-pink"> Drescription :</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor metus, interdum at scelerisque in, porta at lacus. Maecenas dapibus luctus cursus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat
                                             luctus hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien quis libero interdum porttitor.</p>
                                        </div>
                                        <div class="white-space-16"></div>
                                        <div class="column align-start justify-start section-about">
                                            <h2 class="color-pink"> Services :</h2>
                                            <p>Makeup / stylish / Consulting</p>
                                        </div>
                                        <div class="white-space-16"></div>
                                        <div class="column align-start justify-start section-about">
                                            <h2 class="color-pink"> Experience :</h2>
                                            <div class="white-space-16"></div>
                                            <div class="column section-about-2">
                                             <h3 ><i class="fas fa-chess-queen"></i>  Senior Web Developer/Team Lead / Gear4music / 2016 - 2018 </h3>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor metus, interdum at scelerisque in, porta at lacus. Maecenas dapibus luctus cursus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat
                                             luctus hendrerit.</p>
                                            </div>
                                            
                                        </div>
                                        <div class="white-space-16"></div>
                                        <div class="column align-start justify-start section-about ">
                                            <h2 class="color-pink">Address :</h2>
                                            <p> Calle Av Chilam Balam SM 51 · 01 998 251 4618</p>
                                        </div>
                                        <div class="white-space-16"></div>
                                        <div class="column align-start justify-start section-about">
                                            <h2 class="color-pink">Schedule</h2>
                                            <div class="white-space-8"></div>
                                            <div class="row-responsive">
                                            <div class="column">
                                                <h4>MONDAY</h4>
                                                <p>8:10 AM - 10:00 PM</p>
                                                <hr>    
                                            </div>
                                            <div class="column">
                                                <h4>TUESDAY</h4>
                                                <p>8:10 AM - 10:00 PM</p>
                                                <hr>
                                            </div>
                                            <div class="column">
                                                <h4>WEDNESDAY</h4>
                                                <p>8:10 AM - 10:00 PM</p>
                                                <hr>
                                            </div>
                                            <div class="column">
                                                <h4>THURSDAY</h4>
                                                <p>8:10 AM - 10:00 PM</p>
                                                <hr>
                                            </div>                                            
                                            </div>
                                            <div class="row-responsive">
                                            <div class="column">
                                                <h4>FRIDAY</h4>
                                                <p>8:10 AM - 10:00 PM</p>
                                                <hr>
                                            </div>
                                            <div class="column">
                                                <h4>SATURDAY</h4>
                                                <p>8:10 AM - 10:00 PM</p>
                                                <hr>
                                            </div>
                                            <div class="column">
                                                <h4>SUNDAY</h4>
                                                <p>8:10 AM - 10:00 PM</p>
                                                <hr>
                                            </div>
                                            <div class="column">
                                                <h4></h4>
                                                <p></p>
                                                
                                            </div>
                                            </div>
                                        </div>

                                        

                                    </div> <!-- End Promotion Column -->
                                </div>
                            </div> <!-- End Promotion -->
                        </div> <!-- End Right -->
                                   
                    </div> <!-- End Catalogo Padre -->
                            
                            <div class="white-space-64"></div>
                            <div class="fb-comments" data-href="http://localhost/Makeover/profileProvider.html" data-width="100%" data-numposts="10"></div>
                            <div class="white-space-32"></div>
                    </div>
                </div>
            </div>

@endsection



