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
    <link rel="stylesheet" href="css/agenda.css" media="screen">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/solid.css" integrity="sha384-VGP9aw4WtGH/uPAOseYxZ+Vz/vaTb1ehm1bwx92Fm8dTrE+3boLfF1SpAtB1z7HW" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/brands.css" integrity="sha384-rf1bqOAj3+pw6NqYrtaE1/4Se2NBwkIfeYbsFdtiR6TQz0acWiwJbv1IM/Nt/ite" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/fontawesome.css" integrity="sha384-1rquJLNOM3ijoueaaeS5m+McXPJCGdr5HcA03/VHXxcp2kX2sUrQDmFc3jR5i/C7" crossorigin="anonymous">
    
   <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great|Marmelad" rel="stylesheet">
   
@endsection

@section('content')
	  
            <div class="promotions justify-center">
                
                <div class="">
                    <div class="column">
                           <div class="white-space-32"></div>
                        <div class="agenda-title">
                           <div class="promotion-title align-start justify-start color-blue">
                            <i class="fas fa-minus"></i>
                            <h1 class="color-blue titles-text">
                                &nbsp; PERSONAL SCHEDULE
                            </h1>
                        </div>
                        </div>
                          
                           <!-- End Catalogo Padre -->
                            
<div class="cd-schedule loading">
	<div class="timeline">
		<ul>
			<li><span>09:00</span></li>
			<li><span>09:30</span></li>
			<li><span>10:00</span></li>
			<li><span>10:30</span></li>
			<li><span>11:00</span></li>
			<li><span>11:30</span></li>
			<li><span>12:00</span></li>
			<li><span>12:30</span></li>
			<li><span>13:00</span></li>
			<li><span>13:30</span></li>
			<li><span>14:00</span></li>
			<li><span>14:30</span></li>
			<li><span>15:00</span></li>
			<li><span>15:30</span></li>
			<li><span>16:00</span></li>
			<li><span>16:30</span></li>
			<li><span>17:00</span></li>
			<li><span>17:30</span></li>
			<li><span>18:00</span></li>
		</ul>
	</div> <!-- .timeline -->

	<div class="events">
		<ul style="width: 100%">
			<li class="events-group">
				<div class="top-info"><span>Monday</span></div>

				<ul>
					<li class="single-event" data-start="09:30" data-end="10:30" data-content="event-hair-cut" data-event="event-1">
						<a href="#0">
							<em class="event-name">NAME SERVICE</em>
						</a>
					</li>

					<li class="single-event" data-start="11:00" data-end="12:30" data-content="event-rowing-workout" data-event="event-2">
						<a href="#0">
							<em class="event-name">NAME SERVICE</em>
						</a>
					</li>

					<li class="single-event" data-start="14:00" data-end="15:15"  data-content="event-hair-cut" data-event="event-3">
						<a href="#0">
							<em class="event-name">NAME SERVICE</em>
						</a>
					</li>
				</ul>
			</li>

			<li class="events-group">
				<div class="top-info"><span>Tuesday</span></div>

				<ul>
					<li class="single-event" data-start="10:00" data-end="11:00"  data-content="event-rowing-workout" data-event="event-2">
						<a href="#0">
							<em class="event-name">NAME SERVICE</em>
						</a>
					</li>

					<li class="single-event" data-start="11:30" data-end="13:00"  data-content="event-hair-cut" data-event="event-4">
						<a href="#0">
							<em class="event-name">NAME SERVICE</em>
						</a>
					</li>

					<li class="single-event" data-start="13:30" data-end="15:00" data-content="event-abs-circuit" data-event="event-1">
						<a href="#0">
							<em class="event-name">NAME SERVICE</em>
						</a>
					</li>

					<li class="single-event" data-start="15:45" data-end="16:45"  data-content="event-hair-cut" data-event="event-3">
						<a href="#0">
							<em class="event-name">NAME SERVICE</em>
						</a>
					</li>
				</ul>
			</li>

			<li class="events-group">
				<div class="top-info"><span>Wednesday</span></div>

				<ul>
					<li class="single-event" data-start="09:00" data-end="10:15" data-content="event-barber-cut" data-event="event-4">
						<a href="#0">
							<em class="event-name">NAME SERVICE</em>
						</a>
					</li>

					<li class="single-event" data-start="10:45" data-end="11:45" data-content="event-hair-cut" data-event="event-3">
						<a href="#0">
							<em class="event-name">NAME SERVICE</em>
						</a>
					</li>

					<li class="single-event" data-start="12:00" data-end="13:45"  data-content="event-rowing-workout" data-event="event-2">
						<a href="#0">
							<em class="event-name">NAME SERVICE</em>
						</a>
					</li>

					<li class="single-event" data-start="13:45" data-end="15:00" data-content="event-barber-cut" data-event="event-3">
						<a href="#0">
							<em class="event-name">NAME SERVICE</em>
						</a>
					</li>
				</ul>
			</li>

			<li class="events-group">
				<div class="top-info"><span>Thursday</span></div>

				<ul>
					<li class="single-event" data-start="09:30" data-end="10:30" data-content="event-abs-circuit" data-event="event-1">
						<a href="#0">
							<em class="event-name">NAME SERVICE</em>
						</a>
					</li>

					<li class="single-event" data-start="12:00" data-end="13:45" data-content="event-restorative-yoga" data-event="event-4">
						<a href="#0">
							<em class="event-name">NAME SERVICE</em>
						</a>
					</li>

					<li class="single-event" data-start="15:30" data-end="16:30" data-content="event-hair-cut" data-event="event-1">
						<a href="#0">
							<em class="event-name">NAME SERVICE</em>
						</a>
					</li>

					<li class="single-event" data-start="17:00" data-end="18:30"  data-content="event-barber-cut" data-event="event-2">
						<a href="#0">
							<em class="event-name">NAME SERVICE</em>
						</a>
					</li>
				</ul>
			</li>

			<li class="events-group">
				<div class="top-info"><span>Friday</span></div>

				<ul>
					<li class="single-event" data-start="10:00" data-end="11:00"  data-content="event-barber-cut" data-event="event-2">
						<a href="#0">
							<em class="event-name">NAME SERVICE</em>
						</a>
					</li>

					<li class="single-event" data-start="12:30" data-end="14:00" data-content="event-hair-cut" data-event="event-1">
						<a href="#0">
							<em class="event-name">NAME SERVICE</em>
						</a>
					</li>

					<li class="single-event" data-start="15:45" data-end="16:45"  data-content="event-yoga-1" data-event="event-3">
						<a href="#0">
							<em class="event-name">NAME SERVICE</em>
						</a>
					</li>
				</ul>
			</li>
            <li class="events-group">
				<div class="top-info"><span>Saturday</span></div>

				<ul>
					<li class="single-event" data-start="09:00" data-end="10:15" data-content="event-barber-cut" data-event="event-4">
						<a href="#0">
							<em class="event-name">NAME SERVICE</em>
						</a>
					</li>

					<li class="single-event" data-start="10:45" data-end="11:45" data-content="event-hair-cut" data-event="event-3">
						<a href="#0">
							<em class="event-name">NAME SERVICE</em>
						</a>
					</li>

					<li class="single-event" data-start="12:00" data-end="13:45"  data-content="event-rowing-workout" data-event="event-2">
						<a href="#0">
							<em class="event-name">NAME SERVICE</em>
						</a>
					</li>

					<li class="single-event" data-start="13:45" data-end="15:00" data-content="event-barber-cut" data-event="event-3">
						<a href="#0">
							<em class="event-name">NAME SERVICE</em>
						</a>
					</li>
				</ul>
			</li>
            <li class="events-group">
				<div class="top-info"><span>Sunday</span></div>

				<ul>
					<li class="single-event" data-start="09:30" data-end="10:30" data-content="event-hair-cut" data-event="event-1">
						<a href="#0">
							<em class="event-name">NAME SERVICE</em>
						</a>
					</li>

					<li class="single-event" data-start="11:00" data-end="12:30" data-content="event-rowing-workout" data-event="event-2">
						<a href="#0">
							<em class="event-name">NAME SERVICE</em>
						</a>
					</li>

					<li class="single-event" data-start="14:00" data-end="15:15"  data-content="event-hair-cut" data-event="event-3">
						<a href="#0">
							<em class="event-name">NAME SERVICE</em>
						</a>
					</li>
				</ul>
			</li>
          
		</ul>
	</div>

	<div class="event-modal">
		<header class="header">
			<div class="content">
				<span class="event-date"></span>
				<h3 class="event-name"></h3>
			</div>

			<div class="header-bg"></div>
		</header>

		<div class="body">
			<div class="event-info"></div>
			<div class="body-bg"></div>
		</div>

		<a href="#0" class="close">Close</a>
	</div>

	<div class="cover-layer"></div>
</div> <!-- .cd-schedule -->   
                        
                        <script src="js/modernizr.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script>
	if( !window.jQuery ) document.write('<script src="js/jquery-3.0.0.min.js"><\/script>');
</script>
<script src="js/agenda.js"></script> <!-- Resource jQuery -->
                        
                        <div class="white-space-64"></div>
                           
                    </div>
                </div>
            </div>
          
@endsection