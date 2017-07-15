@extends("layouts.guest")
@push("title","Registration")
@push("content")
<br>
    <div class="row">
        <div class="small-12 medium-6 medium-offset-3 columns">
            <div class="callout" style="-webkit-box-shadow: 7px 7px 7px 2px rgba(0,0,0,0.75);
-moz-box-shadow: 7px 7px 7px 2px rgba(0,0,0,0.75);
box-shadow: 7px 7px 7px 2px rgba(0,0,0,0.75);">
                <h3>
                    Creating an Account
                </h3>
                
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}

                    <label for="name">Name</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>

                    <label for="email">E-Mail Address</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required>

                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" required>

                    <label for="password-confirm">Confirm Password</label>
                    <input id="password-confirm" type="password" name="password_confirmation" required>

                    <button type="submit" class="button">
                        Register
                    </button>
                </form>                
            </div>
        </div>
    </div>
</br>
@endpush
