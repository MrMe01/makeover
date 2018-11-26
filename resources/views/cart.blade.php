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
    <link rel="stylesheet" href="css/cart.css" media="screen">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/solid.css" integrity="sha384-VGP9aw4WtGH/uPAOseYxZ+Vz/vaTb1ehm1bwx92Fm8dTrE+3boLfF1SpAtB1z7HW" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/brands.css" integrity="sha384-rf1bqOAj3+pw6NqYrtaE1/4Se2NBwkIfeYbsFdtiR6TQz0acWiwJbv1IM/Nt/ite" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/fontawesome.css" integrity="sha384-1rquJLNOM3ijoueaaeS5m+McXPJCGdr5HcA03/VHXxcp2kX2sUrQDmFc3jR5i/C7" crossorigin="anonymous">
    
   <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great|Marmelad" rel="stylesheet">
    
   
   
    <script type="text/javascript" src="js/cart.js" ></script>

@endsection


@section('content')
	
	  <div class="promotions justify-center">
                <div class="container">
                    <div class="column">
                          
                              <div class="content column">
                              <h1>Shopping Cart</h1>
                              <p>Update quantities or remove items from your cart. When you are ready to checkout, click the &ldquo;Checkout Now&rdquo; button.</p>

                              <p class="removeAlert">
                                Item has been removed. Made a mistake? <a href="#">Undo removal</a>
                              </p>

                              <table class="items">
                                <thead>
                                  <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>
                                      <div class="item">
                                        <div class="item-front">
                                          <img src="img/artistic.jpg" />
                                        </div>
                                        <div class="item-back">
                                          <img src="img/description/artistic2.jpg" />
                                        </div>
                                      </div>
                                      <p>
                                        Six Cup Chemex<sup>&reg;</sup><br />
                                        <span class="itemNum">CM-6A</span>
                                      </p>
                                      <p class="description">Simple function and visual elegance combine for the optimum extraction of full
                                            rich&ndash;bodied coffee.</p>
                                    </td>
                                    <td>$38.90</td>
                                    <td>
                                      <input type="number" class="quantity" value="1" min="1" />
                                      <a href="#" class="remove">Remove</a>
                                    </td>
                                    <td class="itemTotal">$38.90</td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="item">
                                        <div class="item-front">
                                          <img src="img/barber.jpg" />
                                        </div>
                                        <div class="item-back">
                                          <img src="img/barber2.jpg" />
                                        </div>
                                      </div>
                                      <p>
                                        Hario Skerton Grinder<br />
                                        <span class="itemNum">MSCS-2TB</span>
                                      </p>
                                      <p class="description">Small, lightweight, and portable, the Skerton is the ideal hand grinder for the traveling coffee 
                                            enthusiast, or the home enthusiast on a limited budget.</p>
                                    </td>
                                    <td>$40.08</td>
                                    <td>
                                      <input type="number" class="quantity" value="1" min="1" />
                                      <a href="#" class="remove">Remove</a>
                                    </td>
                                    <td class="itemTotal">$40.08</td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="item">
                                        <div class="item-front">
                                          <img src="img/makeup.jpg" />
                                        </div>
                                        <div class="item-back">
                                          <img src="img/makeupgirl.jpg" />
                                        </div>
                                      </div>
                                      <p>
                                        Hario V60 Kettle<br />
                                        <span class="itemNum">VKB-120HSV</span>
                                      </p>
                                      <p class="description">
                                        Shaped like a beehive, this stylish stainless steel kettle is perfect for coffee dripping.
                                      </p>
                                    </td>
                                    <td>$50.25</td>
                                    <td>
                                      <input type="number" class="quantity" value="1" min="1" />
                                      <a href="#" class="remove">Remove</a>
                                    </td>
                                    <td class="itemTotal">$50.25</td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="item">
                                        <div class="item-front">
                                          <img src="img/girl3.jpg" />
                                        </div>
                                        <div class="item-back">
                                          <img src="img/girl.jpg" />
                                        </div>
                                      </div>
                                      <p>
                                        Zingerman&rsquo;s Brazil Sweet Yellow<br />
                                        <span class="itemNum">P-COF-SYB</span>
                                      </p>
                                      <p class="description">Zingerman&rsquo;s Roastmaster Allen treats it gently, so the brewed cup is amazingly sweet, very nutty,
                                            and super smooth, almost buttery, with lots of happy high notes.</p>
                                    </td>
                                    <td>$22.00</td>
                                    <td>
                                      <input type="number" class="quantity" value="1" min="1" />
                                      <a href="#" class="remove">Remove</a>
                                    </td>
                                    <td class="itemTotal">$22.00</td>
                                  </tr>
                                </tbody>
                              </table>

                              <div class="cost column">
                                <h2>Order Overview</h2>

                                <table class="pricing">
                                  <tbody>
                                    <tr>
                                      <td>Subtotal</td>
                                      <td class="subtotal"></td>
                                    </tr>
                                    <tr>
                                      <td>Tax (5%)</td>
                                      <td class="tax"></td>
                                    </tr>
                                    <tr>
                                      <td>Shipping</td>
                                      <td class="shipping">$10.00</td>
                                    </tr>
                                    <tr>
                                      <td><strong>Total:</strong></td>
                                      <td class="orderTotal"></td>
                                    </tr>
                                  </tbody>
                                </table>

                                <a class="cta" href="#">Checkout Now &raquo;</a>
                              </div>
                            </div> <!-- End Content -->
                              <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
                              <script src='https://code.jquery.com/ui/1.10.3/jquery-ui.js'></script>
                              <script  src="js/cart.js"></script>

                             <div class="white-space-64"></div>

                    </div>
                </div>
            </div>
            
	
@endsection