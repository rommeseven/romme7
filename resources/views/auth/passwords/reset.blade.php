
@extends("layouts.guest")
@push("title","Reset Password")
@push("content")
<br>
    <div class="row">
        <div class="small-12 medium-6 medium-offset-3 columns">
            <div class="callout" style="-webkit-box-shadow: 7px 7px 7px 2px rgba(0,0,0,0.75);
-moz-box-shadow: 7px 7px 7px 2px rgba(0,0,0,0.75);
box-shadow: 7px 7px 7px 2px rgba(0,0,0,0.75);">
                <h3>
                    @yield("title")
                </h3>
              
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
                    {{ csrf_field() }}

                    <input type="hidden" name="token" value="{{ $token }}">

                    <label for="email">E-Mail Address</label>
                    <input id="email" type="email" name="email" value="{{ $email or old('email') }}" required autofocus>
                    
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" required>

                    <label for="password-confirm">Confirm Password</label>
                    <input id="password-confirm" type="password" name="password_confirmation" required>
                    <button type="submit" class="button alert">
                    Reset Password
                    </button>
                </form>
       
            </div>
        </div>
    </div>
</br>
@endpush


