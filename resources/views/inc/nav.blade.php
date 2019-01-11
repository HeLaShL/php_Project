@if(Auth::guest())
<div class="login_button"><a href="{{ url('login') }}">Login</a></div>
@else

<h4>
<a href="{{ url('account') }}">{{Auth ::user() ->name }} </a>
</h4>

<div class="login_button"><a href="{{ url('logout') }}">Logout</a></div>

</li >
@endif