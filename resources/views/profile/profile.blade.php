@extends('app')
@section('content')

 
     <div class="main">
      <div class="shop_top">
         <div class="container">
                           
                             <form class="form" method="POST" action="account.update" lang="en">
                               {{ csrf_field() }}
                                  @if(Session::has('message'))
                                <div class="alert alert-info">
                                {{Session::get('message')}}
                                </div>
                                @endif

                                <div class="register-top-grid">
                             
                                        <h3>PERSONAL INFORMATION</h3>
                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                                                 <div class="col-md-6">
                                                    <span>Name<label>*</label></span>
                                                    <input type="text"  class="form-control" name="name" value="{{ Auth::user()->name }}" required autofocus> 
                                                    @if ($errors->has('name'))
                                                    <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                    @endif
                                                 </div>
                                        </div>
                                     <div class="form-group">
                                        <div class= "col-md-6" >
                                         <span>Address<label>*</label></span>
                                              <input type= " text" class=" form-control" name=" address"
                                               value= "{{ Auth::user()->address }}" >
                                        </div >
                                     </div>
                                     <div class="form-group">

                                        <div class= "col-md-6" >
                                        <span>City<label>* </label></span>
                                              <input type= " text" class=" form-control" name=" city"
                                              value= "{{ Auth::user()->city }}" >
                                        </div >
                                    </div>
                                    <div class="form-group">
                                        <div class= "col-md-6" >
                                            <span>State<label>*</label></span>
                                             <input type= " text" class=" form-control" name=" state"
                                             value= "{{ Auth::user()->state }}" >
                                        </div >
                                    </div>
                                    <div class="form-group">
                                        <div class= "col-md-6" >
                                           <span>Zip<label>* </label></span>
                                                <input type= " text" class=" form-control" name=" zip"
                                                  value= "{{ Auth::user()->zip }}" >
                                        </div >
                                    </div>
                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <span>Email Address<label>*</label></span>
                                                <div class="col-md-6">
                                                <input id="email" type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" required disabled>
                                                
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

                                    <div class="form-group{{ $errors->has('old_password') ? ' has-error' : '' }}">

                                        
                                            <span>Current Password<label>*</label></span>
                                            <div class="col-md-6">
                                              <input id="old_password" type="password" class="form-control" name="old_password" >
                                             @if ($errors->has('old_password'))
                                             <span class="help-block">
                                                <strong>{{ $errors->first('old_password') }}</strong>
                                             </span>
                                              @endif
                                        </div>
                                    </div>



                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                        
                                            <span>NEW Password<label>*</label></span>
                                            <div class="col-md-6">
                                              <input id="password" type="password" class="form-control" name="password" >
                                             @if ($errors->has('password'))
                                             <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                             </span>
                                              @endif
                                               @if ($errors->has('empty'))
                                             <span class="help-block">
                                                <strong>{{ $errors->first('empty') }}</strong>
                                             </span>
                                              @endif
                                        </div>
                                    </div>


                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                   
                                            <span>Confirm New Password<label>*</label></span>
                                             <div class="col-md-6">

                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" >
                                              @if ($errors->has('password'))
                                              <span class="help-block">
                                                  <strong>{{ $errors->first('password') }}</strong>
                                              </span>
                                              @endif
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