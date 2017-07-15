@extends("layouts.guest")
@push("title","Login")
@push("content")


<br>
    <div class="row">
        <div class="small-12 medium-6 medium-offset-3 columns">
            <div class="callout" style="-webkit-box-shadow: 7px 7px 7px 2px rgba(0,0,0,0.75);
-moz-box-shadow: 7px 7px 7px 2px rgba(0,0,0,0.75);
box-shadow: 7px 7px 7px 2px rgba(0,0,0,0.75);">
                <h3>@yield("title")
                </h3>
              
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}

                    <label for="email">E-Mail Address</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>

                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" required>
                    
                    <label>
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Remember Me
                    </label>
                    
                    <button type="submit" class="button">
                    Login
                    </button>
                    
                    <a href="{{ url('/password/reset') }}">
                    <small>Forgot Your Password?</small>
                    </a>
                </form>              
            </div>
        </div>
    </div>
</br>
@endpush