@extends('app')
@section('content')

@push('scripts')

 <link rel="stylesheet" href="{{ URL::asset('css/etalage.css') }}">
                    <script src="{{ URL::asset('js/jquery.etalage.min.js') }}"></script>
                <!-- Include the Etalage files -->
                <script>
                        jQuery(document).ready(function($){
            
                            $('#etalage').etalage({
                                thumb_image_width: 300,
                                thumb_image_height: 400,
                                
                                show_hint: true,
                                click_callback: function(image_anchor, instance_id){
                                    alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
                                }
                            });
                            // This is for the dropdown list example:
                            $('.dropdownlist').change(function(){
                                etalage_show( $(this).find('option:selected').attr('class') );
                            });

                    });
                </script>

                <script>
                        jQuery(document).ready(function($){
                        $('#cart_add').click(function(){ 
                          $.ajax({
                          url: '/addProduct/{{$product->id}},'.concat($("select[name=Quantity]").val()),
                          method: 'get',
                          success: function () {
                          console.log("done");
                          //do something
                          },error: function(xhr, ajaxOptions, thrownError){
                          console.log(xhr.status+" ,"+" "+ajaxOptions+", "+thrownError);
                          }
                      });
                    });
                    });
                </script>




@endpush


     <div class="main">
      <div class="shop_top">
        <div class="container">
            <div class="row">
                <div class="col-md-9 single_left">
                   <div class="single_image">
                         <ul id="etalage" class="etalage" style="display: block; width: 314px; height: 552px;">
                            <li>
                                <a href="optionallink.html">
                                    <img class="etalage_thumb_image" src="/images/{{$product->imageurl}}" />
                                    <img class="etalage_source_image" src="/images/{{$product->imageurl}}" />
                                </a>
                            </li>
                        
                        </ul>
                        </div>
                        <!-- end product_slider -->
                        <div class="single_right">
                            <h3>{{$product->name}}</h3>
                            <p class="m_10">{{$product->description}}</p>
                            <ul class="options">
                                <h4 class="m_12">Select a Size(cm)</h4>
                                <li><a href="#">151</a></li>
                                <li><a href="#">148</a></li>
                                <li><a href="#">156</a></li>
                                <li><a href="#">145</a></li>
                                <li><a href="#">162(w)</a></li>
                                <li><a href="#">163</a></li>
                            </ul>
                            <ul class="product-colors">
                                <h3>available Colors</h3>
                                <li><a class="color1" href="#"><span> </span></a></li>
                                <li><a class="color2" href="#"><span> </span></a></li>
                                <li><a class="color3" href="#"><span> </span></a></li>
                                <li><a class="color4" href="#"><span> </span></a></li>
                                <li><a class="color5" href="#"><span> </span></a></li>
                                <li><a class="color6" href="#"><span> </span></a></li>
                                <div class="clear"> </div>
                            </ul>
                            <div class="btn_form">
                               <form method="get" action="/payment/{{$product->id}}" >
                                 <input type="submit" value="buy now" title="">
                              </form>
                            </div>
                        
                            <form action="#" method="post" id="contact_form" class="contact-form" accept-charset="UTF-8">
                            {{csrf_field()}}
                            <input type="text" name="user_id" value="{{Auth::user()->id}}" hidden>
                            <input type="text" name="product_id" value="{{$product->id}}" hidden>

                                <ul class="add-to-links">
                              <li><img src="/images/wish.png" alt="">Add to wishlist</li>
                            </ul>
                          </form>
                       
                        </div>
                        <div class="clear"> </div>
                </div>
                <div class="col-md-3">
                  <div class="box-info-product">
                    <p class="price2">{{$product->price}} DT</p>
                           <ul class="prosuct-qty">
                                <span>Quantity:</span>

                                <select name="Quantity" onfocus='this.size=6;' onblur='this.size=1;'onchange='this.size=1; this.blur();' >
                                @for($i=1; $i<= $product->quantity ; $i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </ul>
                            <button id ="cart_add" type="submit" name="Submit" class="exclusive">
                               <span>Add to cart</span>
                            </button>


                   </div>
               </div>
            </div>      
     
            <div class="row">
                <h4 class="m_11">Related Products in the same Category</h4>
                @foreach ($sameProducts as $same)
                <div class="col-md-4 product1">
                    <img src="/images/{{$same->imageurl}}" class="img-responsive" alt=""/> 
                    <div class="shop_desc"><a href="Single/{{$same->id}}">
                        </a><h3><a href="single.html"></a><a href="#">{{$same->name}}</a></h3>
                        <p>{{$same->price}} DT</p>
                        <ul class="buttons">
                            <li class="cart"><a href="#" id="cart_add">Add To Cart</a></li>
                            <li class="shop_btn"><a href="Single/{{$same->id}}">Read More</a></li>
                            <div class="clear"> </div>
                        </ul>
                    </div>
                </div>
                @endforeach
           
            </div>  
         </div>
       </div>
      </div>

@endsection