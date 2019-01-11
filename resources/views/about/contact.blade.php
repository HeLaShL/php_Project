@extends('app')
@section('content')

     <div class="main">
      <div class="shop_top">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
				  <div class="map">
					<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:12px"></a></small>
				  </div>
				</div>
				<div class="col-md-5">
					<p class="m_8">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat</p>
					<div class="address">
				                <p>500 Lorem Ipsum Dolor Sit,</p>
						   		<p>22-56-2-9 Sit Amet, Lorem,</p>
						   		<p>USA</p>
				   		<p>Phone:(00) 222 666 444</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <span>support[at]snow.com</span></p>
				   		<p>Follow on: <span>Facebook</span>, <span>Twitter</span></p>
				   </div>
				</div>
			</div>
			@if ( count( $errors) > 0 )
			<div class= " alert alert-danger" >
			Please correct the following errors:<br />
			<ul>
			    @foreach ($errors-> all() as $error)
			     <li> {{ $error }} </li >
			    @endforeach
			</ul >
			</div >
			@endif
			@if(Session::has('message'))
			<div class="alert alert-info">
			{{Session::get('message')}}
			</div>
			@endif
			<div class="row">
				<div class="col-md-12 contact">
					{!! Form::open( array( 'route' => 'contact.store', 'class' => 'form',
					'novalidate' => 'novalidate')) !!}
					<div class= " to" >
						{!! Form::text( 'name', null,
						array('required',
						'class'       =>'form-control',
						'placeholder  '=>'Your name')) !!}
						
						{!! Form::text( 'email', null,
						array('required',
						'class'       =>'form-control',
						'placeholder  '=>'Your e-mail address')) !!}
						{!! Form::text( 'subject', null,
						array('required',
						'class'       =>'form-control',
						'placeholder  '=>'Subject')) !!}
				    </div >
						<div class    = "text" >
						{!! Form::textarea( 'message', null,
						array('required',
						'class'       =>'form-control',
						'placeholder  '=>'Your message')) !!}
						</div >
						<div class    = " form-submit" >
						{!! Form::submit( 'Submit',
						array( 'class '=> 'form-submit')) !!}

					    </div>
					    {!! Form::close() !!}
					    


		    </div>
	     </div>
	   </div>
	  <hr>
	 
@endsection