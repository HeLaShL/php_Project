@extends('app')
@section('content')
     <div class="main">
      <div class="shop_top">
		<div class="container">
			<div class="row shop_box-top">
			@foreach ($products as $product)
				<div class="col-md-3 shop_box"><a href="Single/{{$product->id}}">
					<img src="/images/{{$product->imageurl}}" class="img-responsive" alt=""/>
					<span class="new-box">
						<span class="new-label">New</span>
					</span>
					<span class="sale-box">
						<span class="sale-label">Sale!</span>
					</span>
					<div class="shop_desc">
						<h3><a href="Single/{{$product->id}}">{{$product->name}}</a></h3>
						<span class="actual">{{$product->price}} DT</span><br>
						<ul class="buttons">
							<li class="cart"><a href="#">Add To Cart</a></li>
							<li class="shop_btn"><a href="Single/{{$product->id}}">Read More</a></li>
							<div class="clear"> </div>
					    </ul>
				    </div>
				</a></div>
				@endforeach
				
			</div>
		 </div>
	   </div>
	  </div>
	  @endsection