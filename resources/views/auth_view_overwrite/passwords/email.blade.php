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
              
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                    {{ csrf_field() }}

                    <label for="email">E-Mail Address</label>

                    <input id="email" type="email" name="email" value="{{ old('email') }}" required>

                    <button type="submit" class="button warning">
                    Send Password Reset Link
                    </button>
                </form>             
            </div>
        </div>
    </div>
</br>
@endpush