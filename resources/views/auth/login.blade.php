@extends('App')
@section('content')

    
     <div class="main">
      <div class="shop_top">
        <div class="container">
            <div class="col-md-6">
                 <div class="login-page">
                    <h4 class="title">New Customers</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
                    <div class="button1">
                       <a href="register"><input type="submit" name="Submit" value="Create an Account"></a>
                     </div>
                     <div class="clear"></div>
                  </div>
                </div>
                <div class="col-md-6">
                 <div class="login-title">
                    <h4 class="title">Registered Customers</h4>
                    <div id="loginbox" class="loginbox">
                        <form action="{{ route('login') }}" method="post" name="login" id="login-form" lang="en">
                                                  {{ csrf_field() }}
                          <fieldset class="input">
                          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <p id="login-form-username">
                              <label for="modlgn_username">Email</label>
                               <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                  @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </p>
                          </div>
                         <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <p id="login-form-password">
                              <label for="modlgn_passwd">Password</label>
                              <input id="modlgn_passwd" type="password" name="password" class="inputbox" size="18" autocomplete="off">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </p>
                        
                         </div>
                           <div class="form-group">
                            <div class="col-md-6 ">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                            </div>
                        </div>

                          <br>
                            <div class="remember">
                                <p id="login-form-remember">
                                  <label for="modlgn_remember"><a href="{{ route('password.request') }}">Forget Your Password ? </a></label>
                               </p>
                             <div class    = " form-submit" >
                                <input type="submit" name="Submit" class="button" value="Login">
                                <div class="clear"></div>
                             </div>
                            </div>
                          </fieldset>
                         </form>
                    </div>
                  </div>
                 <div class="clear"></div>
              </div>

            </div>
          </div>
      </div>

    

@endsection