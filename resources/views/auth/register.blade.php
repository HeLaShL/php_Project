@extends('App')
@section('title')
GS_COMMERCE | create an account
@endsection
@section('content')
    
     <div class="main">
      <div class="shop_top">
         <div class="container">
                            <form class="form" method="POST" action="{{ route('register') }}" lang="en">

                                <div class="register-top-grid">

                                        <h3>PERSONAL INFORMATION</h3>
                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                                  {{ csrf_field() }}

                                           <div class="col-md-6">
                                            <span>Name<label>*</label></span>
                                            <input type="text"  class="form-control" name="name" value="{{ old('name') }}" required autofocus> 
                                            @if ($errors->has('name'))
                                             <span class="help-block">
                                                 <strong>{{ $errors->first('name') }}</strong>
                                             </span>
                                            @endif
                                           </div>
                                        </div>
                                     <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                         <div class= "col-md-6" >
                                         <span>Address<label>*</label></span>
                                              <input type= " text" class=" form-control" name=" address"
                                               value= " {{ old('address') }}" required>
                                          @if ($errors->has('address'))
                                             <span class="help-block">
                                                 <strong>{{ $errors->first('addrress') }}</strong>
                                             </span>
                                            @endif
                                                 </div>
                                    </div>
                                     <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                                        <span>City<label>* </label></span>
                                           <div class= "col-md-6" >
                                              <input type= " text" class=" form-control" name=" city"
                                              value= " {{ old('city') }}" required>
                                          @if ($errors->has('city'))
                                             <span class="help-block">
                                                 <strong>{{ $errors->first('city') }}</strong>
                                             </span>
                                            @endif
                                            </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                                            <span>State<label>*</label></span>
                                          <div class= "col-md-6" >
                                             <input type= " text" class=" form-control" name=" state"
                                             value= " {{ old('state') }}" required>
                                          @if ($errors->has('state'))
                                             <span class="help-block">
                                                 <strong>{{ $errors->first('state') }}</strong>
                                             </span>
                                            @endif
                                          </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('zip') ? ' has-error' : '' }}">
                                           <span>Zip<label>* </label></span>
                                                  <div class= "col-md-6" >
                                                  <input type= " text" class=" form-control" name=" zip"
                                                  value= " {{ old('zip') }}" required>
                                                  @if ($errors->has('zip'))
                                                  <span class="help-block">
                                                  <strong>{{ $errors->first('zip') }}</strong>
                                                  </span>
                                                  @endif
                                                  </div>
                                    </div>
                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <span>Email Address<label>*</label></span>
                                                <div class="col-md-6">
                                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                                
                                                @if ($errors->has('email'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                                @endif
                                                </div>
                                        </div>
                                    
                                </div>
                                <div class="clear"> </div>
                                <div class="register-bottom-grid">
                                    <h3>LOGIN INFORMATION</h3>

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                        
                                            <span>Password<label>*</label></span>
                                            <div class="col-md-6">
                                              <input id="password" type="password" class="form-control" name="password" required>
                                             @if ($errors->has('password'))
                                             <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                             </span>
                                              @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                   
                                            <span>Confirm Password<label>*</label></span>
                                             <div class="col-md-6">

                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                                </div>
                                    </div>
                                        <div class="clear"> </div>
                                            <div class    = " form-submit" >
                                            {!! Form::submit( 'Submit',
                                            array( 'class '=> 'form-submit')) !!}
                                            
                                            </div>
                                        </div>

                                <div class="clear"> </div>

                        </form>
                        
                    </div>
           </div>
      </div>
     
        
@endsection