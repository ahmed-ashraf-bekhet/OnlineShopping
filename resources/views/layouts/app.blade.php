

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>OnlineShooping</title>
  <base href="/">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <meta name="keywords" content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
  Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
  function hideURLbar(){ window.scrollTo(0,1); } </script>
  <!-- //for-mobile-apps -->
  <link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
  <!-- Custom Theme files -->
  <link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
  <link href="{{asset('css/autoComplete.css')}}" rel='stylesheet' type='text/css' />
  <!-- js -->
  <script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
  <!-- //js -->
  <!-- start-smoth-scrolling -->
  <script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
  <script type="text/javascript">
    jQuery(document).ready(function ($) {
      $(".scroll").click(function (event) {
        event.preventDefault();
        $('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
      });
    });
  </script>
  <!-- start-smoth-scrolling -->
  <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
  <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
  <!--- start-rate---->
<link rel="stylesheet" href="{{asset('css/jstarbox.css')}}" type="text/css" media="screen" charset="utf-8" />
  <script type="text/javascript"></script>
  <!---//End-rate---->

</head>
</head>

<body>

    <a href="offer.html"><img src="{{asset('images/download.png')}}" class="img-head" alt=""></a>
    <div class="header">
    
        <div class="container">
    
            <div class="logo">
                <h1><a href="index.html"><b>T<br>H<br>E</b>Big Store<span>The Best e_shop</span></a></h1>
            </div>
    
            <div class="header-ri">
                <ul class="social-top">
                    <li><a href="#" class="icon facebook"><i class="fa fa-facebook"
                                aria-hidden="true"></i><span></span></a></li>
                    <li><a href="#" class="icon twitter"><i class="fa fa-twitter"
                                aria-hidden="true"></i><span></span></a></li>
                    <li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p"
                                aria-hidden="true"></i><span></span></a></li>
                    <li><a href="#" class="icon dribbble"><i class="fa fa-dribbble"
                                aria-hidden="true"></i><span></span></a></li>
                </ul>
            </div>
    
    
            <div class="nav-top">
                <nav class="navbar navbar-default">
                    
                    <div class="navbar-header nav_2">
                        <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse"
                            data-target="#bs-megadropdown-tabs">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
    
    
                    </div>
                    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <ul class="nav navbar-nav">
                            <li class=" active"><a href="index.html" class="hyper "><span>Home</span></a></li>
                            @guest
                            @else
                            <li class="dropdown ">
                                <a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown"><span>Activities<b
                                            class="caret"></b></span></a>
                                <ul class="dropdown-menu multi">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <ul class="multi-column-dropdown">
                                                @if (Auth::user()->isadmin == false)
                                                
                                                    <li><a href="{{route('create') }}"><i class="fa fa-angle-right"
                                                        aria-hidden="true"></i>Add Product</a></li>
                                                @else
                                                    
                                                @endif

                                                

                                                <li><a href="kitchen.html"><i class="fa fa-angle-right"
                                                    aria-hidden="true"></i>Logout</a></li>
    
                                            </ul>
    
                                        </div>
                                        
                                        
                                        <div class="clearfix"></div>
                                    </div>
                                </ul>
                            </li>
                            @endguest
                            @if (Route::has('register'))
                                <li>
                                    <a class="hyper" href="{{ route('register') }}"><span>Register</span></a>
                                </li>
                            @endif
                            <li><a href="{{ route('login') }}" class="hyper"> <span>Login</span></a></li>
                            <li><a href="contact.html" class="hyper"><span>Contact Us</span></a></li>
                        </ul>
                    </div>
                </nav>
                <div class="cart">
                    <div class="cart" >
						<span class="fa fa-shopping-cart my-cart-icon">
                            <span class="badge badge-notify my-cart-badge" id="selected_num">
                                8
                            </span>
                        </span>
					</div>
                    <div class="clearfix"></div>
                    @guest
                        
                    @else
                        <p style="display: none" id="user_id">
                            {{ Auth::user()->id }}
                        </p>
                    @endguest
                                       
                    <script>
                        localStorage.user_id = $("#user_id").text()
                    </script> 
                </div>
                <div class="clearfix"></div>
                
        </div>
    </div>
    
    

    @yield('content')

  
<!--footer-->

<!-- Carousel
================================================== -->
<br>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <a href="kitchen.html"> <img class="first-slide" src="{{asset('images/ba.jpg')}}"
                    alt="First slide"></a>

        </div>
        <div class="item">
            <a href="care.html"> <img class="second-slide " src="{{asset('images/ba1.jpg')}}"
                    alt="Second slide"></a>

        </div>
        <div class="item">
            <a href="hold.html"><img class="third-slide " src="{{asset('images/ba2.jpg')}}"
                    alt="Third slide"></a>

        </div>
    </div>

</div>


<!-- /.carousel -->



<div class="footer">
    <div class="container">

        <div class="clearfix"></div>
        <div class="footer-bottom">
            <h2><a href="index.html"><b>T<br>H<br>E</b>Big Store<span>The Best Supermarket</span></a></h2>
            <p class="fo-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                ullamco laboris</p>
            <ul class="social-fo">
                <li><a href="#" class=" face"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#" class=" twi"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#" class=" pin"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                <li><a href="#" class=" dri"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
            </ul>
            <div class=" address">
                <div class="col-md-4 fo-grid1">
                    <p><i class="fa fa-home" aria-hidden="true"></i>12K Street , 45 Building Road Canada.</p>
                </div>
                <div class="col-md-4 fo-grid1">
                    <p><i class="fa fa-phone" aria-hidden="true"></i>+1234 758 839 , +1273 748 730</p>
                </div>
                <div class="col-md-4 fo-grid1">
                    <p><a href="mailto:info@example.com"><i class="fa fa-envelope-o"
                                aria-hidden="true"></i>info@example1.com</a></p>
                </div>
                <div class="clearfix"></div>

            </div>
        </div>
    </div>
</div>

<!-- //footer-->


<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
            </div>
            <div id="modalBody" class="modal-body modal-spa">
                    
            </div>
        </div>
    </div>    
</div>
<script>
    var images = document.querySelectorAll("#image")
    var modalBody = document.querySelector("#modalBody")
    images.forEach(element => {
        element.addEventListener('click',function(){
            console.log('touched')
            console.log(this.getAttribute('data-name'))
            $("#modalBody").html(
            	'<div class="col-md-5 span-2">'+
						'<div class="item">'+
                            '<img src="'+this.getAttribute('src')+'" class="img-responsive" alt="">'+
                        '</div>'+
				'</div>'+
				'<div class="col-md-7 span-1 ">'+
					'<h3>'+this.getAttribute('data-name')+'</h3>'+
					'<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>'+
					'<div class="price_single">'+
					'<span class="reducedfrom ">'+this.getAttribute('data-price')+'$</span>'+
					
					'<div class="clearfix"></div>'+
					'</div>'+
					'<h4 class="quick">Quick Overview:</h4>'+
					'<p class="quick_desc">'+this.getAttribute('data-summary')+'</p>'+
                    '<div class="form-group row">'+
                    '<label for="inputPassword" class="col-sm-12 col-form-label">Quantity</label>'+
                    '<div class="col-sm-3"></div>'+
                    '<div class="col-sm-6">'+
                    '<input id="quantity" type="number" class="form-control" id="quantity">'+
                    '</div>'+
                    '</div>'+
                    '<div class="add-to">'+
						'<button id="modal_image" class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="'+this.getAttribute('data-id')+'" data-name="'+this.getAttribute('data-name')+'" data-summary="'+this.getAttribute('data-summary')+'" data-price="'+this.getAttribute('data-price')+'" data-quantity="1" data-image="'+this.getAttribute('src')+'">Add to Cart</button>'+
					'</div>'+
				'</div>'+
                '<div class="clearfix"> </div>'
            )
        })
    });
    
    $(document).on('click', '#modal_image', function() {
        var Arr = ["ds","sda"]
        Arr.push("ads")
        var prodArr = []
        if(localStorage.products.length != 0){
            prodArr = JSON.parse(localStorage.products)
        }
        console.log(this)
        console.log(prodArr)
        prodArr.push({
            id: this.getAttribute('data-id'),
            name: this.getAttribute('data-name'),
            summary: this.getAttribute('data-summary'),
            price: this.getAttribute('data-price'),
            quantity: $('#quantity').val(),
            image: this.getAttribute('data-image')
        });
        localStorage.products = JSON.stringify(prodArr)
        $("#my-cart-modal").modal("hide")
        alert("You Added This Product To Your Cart Successfully")
        location.reload()
    });
</script>

{{-- <script>
    var modal_image = document.querySelector("#modal_image")
    modal_image.addEventListener('click',function(){
        console.log("das")
        console.log(this.getAttribute('data-name'))
    })
</script> --}}

<!-- smooth scrolling -->
<script type="text/javascript">
    $(document).ready(function() {
    /*
        var defaults = {
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear' 
        };
    */								
    $().UItoTop({ easingType: 'easeOutQuart' });
    });
    
</script>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
<!-- //for bootstrap working -->
{{-- <script type='text/javascript' src="js/jquery.mycart.js"></script> --}}

<script type='text/javascript' src="{{ asset('js/jquery.mycart.js') }}"></script>
<script type="text/javascript">
$(function () {

  var goToCartIcon = function($addTocartBtn){
    var $cartIcon = $(".my-cart-icon");
    console.log($cartIcon)
    var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
    $addTocartBtn.prepend($image);
    var position = $cartIcon.position();
    $image.animate({
      top: position.top,
      left: position.left
    }, 500 , "linear", function() {
      $image.remove();
    });
  }

  $('.my-cart-btn').myCart({
    classCartIcon: 'my-cart-icon',
    classCartBadge: 'my-cart-badge',
    affixCartIcon: true,
    checkoutCart: function(products) {
      $.each(products, function(){
        console.log(this);
        console.log("sad");
      });
    },
    clickOnAddToCart: function($addTocart){
        console.log("hello")
      goToCartIcon($addTocart);
    },
    getDiscountPrice: function(products) {
      var total = 0;
      $.each(products, function(){
        total += this.quantity * this.price;
      });
      return total * 1;
    }
  });

});
</script>


<script src="{{asset('js/autoComplete.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/popper.js')}}"></script>


    
</body>

</html>