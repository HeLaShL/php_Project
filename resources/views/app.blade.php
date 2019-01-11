<!DOCTYPE html>
<html lang= "en" >
<head>
<title>GS_COMMERCE</title>
<link rel="icon" href="{!! asset('images/logo.png') !!}"/>
<link href="{{ URL::asset('css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
<link href="{{ URL::asset('css/style.css') }}" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<!--<script src="js/jquery.easydropdown.js"></script>-->
<!--start slider -->
<link rel="stylesheet" href="{{ URL::asset('css/fwslider.css') }}" media="all">
<script src="{{ URL::asset('js/jquery-ui.min.js') }}"></script>
<script src="{{ URL::asset('js/fwslider.js') }}"></script>

<!--end slider -->
<script type="text/javascript">
        $(document).ready(function() {

        	
        	
      

            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script>
<meta name="csrf-token" content="{{ csrf_token() }}">


         @stack('scripts')


                     <script>
                        jQuery(document).ready(function($){
           

					$('#cart_content').mouseenter(function () {

                    $('.controlelist').remove();

					const responseContainer = document.querySelector('#list');
					$.ajax({
					type: "get",
					url: "{{url('/cart')}}",
					dataType: 'json',
					success: function(data){
					data.forEach(element => {
					movie = 
					`
					<div class="controlelist" id ="${element.id}">

					<div class="product_control_buttons">
				<input type="image" id ="${element.id}" class="remove" align="right" src="/images/close_edit.png"   / > 

				    </div>
	     				<div class="clear"></div>
	     	          <li class="list_img"><img src="/images/${element.imageurl}"style="width:50px;height:50;"/></li>
			          <li class="list_desc"><h6><a href="{{url('Single/${element.product_id}')}}">${element.name}</a></h6><span class="actual">${element.quantity} x
                          ${element.price} DT</span></li>
                          <hr>
                    </div>

					`
					responseContainer.insertAdjacentHTML('afterbegin',movie);        
				});
				}
			});
				});
				});
                    
                </script>
                  
           
            </head>

                 


<body>
		<div class="header">
		<div class="container">
			<div class="row">
			  <div class="col-md-12">
				 <div class="header-left">
					 <div class="logo">
						<a href="{{ url('home') }}"><img src="/images/logo.png" alt=""/></a>
					 </div>
					 <div class="menu">
						  <a class="toggleMenu" href="#"><img src="/images/nav.png" alt="" /></a>
						    <ul class="nav" id="nav">
						    	<li><a href="{{ url('MensProduct')}}">Men</a></li>
						    	<li><a href="{{ url('WomensProduct')}}">Women</a></li>
						    	<li><a href="#">Experiance</a></li>
						    	<li><a href="{{ url('about') }}">Company</a></li>
								<li><a href="{{ url('contact') }}">Contact</a></li>								
								<div class="clear"></div>
							</ul>
							<script type="text/javascript" src="{{ URL::asset('js/responsive-nav.js') }}"></script>
				    </div>							
	    		    <div class="clear"></div>
	    	    </div>
	            <div class="header_right">
	    		  <!-- start search-->
				      <div class="search-box">
							<div id="sb-search" class="sb-search">
								<form>
									<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
									<input class="sb-search-submit" type="submit" value="">
									<span class="sb-icon-search"> </span>
								</form>
							</div>
						</div>
						<!----search-scripts---->
						<script src="{{ URL::asset('js/classie.js') }}"></script>
						<script src="{{ URL::asset('js/uisearch.js') }}"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
						<!----//search-scripts---->
				    <ul class="icon1 sub-icon1 profile_img">
					 <li><a class="active-icon c1" href="#" id="cart_content"> </a>
						<ul class="sub-icon1 list" id="list" >
		<!-- 
									<div class="product_control_buttons">
									<a href="#"><img src="/images/edit.png" alt=""/></a>
									<a href="#"><img src="/images/close_edit.png" alt=""/></a>
									</div>
									<div class="clear"></div>
									<li class="list_img"><img src="/images/" alt=""/></li>
									<li class="list_desc"><h4><a href="#"></a></h4><span class="actual">Z</span></li>
									 -->


						
						 
                          <br>
						  <div class="login_buttons">
						  	  @include( 'inc.nav')

							 <div class="check_button"><a href="checkout.html">Check out</a></div>

							 <div class="clear"></div>
						  </div>


						  <div class="clear"></div>
						</ul>
					 </li>
				   </ul>
		           <div class="clear"></div>
	       </div>
	      </div>
		 </div>
	    </div>

	</div>
@yield('content')

		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<ul class="footer_box">
							<h4>Products</h4>
							<li><a href="{{url('MensProduct')}}">Mens</a></li>
							<li><a href="{{url('WomensProduct')}}">Womens</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<ul class="footer_box">
							<h4>About</h4>
							<li><a href="{{ url('about') }}">Company History</a></li>
							</ul>
					</div>
					<div class="col-md-3">
						<ul class="footer_box">
							<h4>Customer Support</h4>
							<li><a href="{{ url('contact') }}">Contact Us</a></li>
							</ul>
					</div>
					<div class="col-md-3">
						<ul class="footer_box">
							<h4>Newsletter</h4>
							<div class="footer_search">
				    		   <form>
				    			<input type="text" value="Enter your email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your email';}">
				    			<input type="submit" value="Go">
				    		   </form>
					        </div>
							
		   					
						</ul>
					</div>
				</div>
				<div class="row footer_bottom">
				    <div class="copy">
			           <p>© 2017-2018 Template by GS_COMMERCE</a></p>
		            </div>
					
   				</div>
			</div>
		</div>


</body>

</html>