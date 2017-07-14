@if(Session::has('success'))
<div class="row">
  <div class="small-10 small-offset-1 medium-6 medium-offset-3 column flash" data-closable="fade-out" style="margin-top:11px;margin-bottom:11px;">
    <div class="callout success small">
      <h6>Success!</h6>
      <small>{{ Session::get('success')}}</small>
      <button class="close-button" aria-label="Dismiss message" type="button" data-close>
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  </div>
</div>
@endif
@if(Session::has('error'))
<div class="row">
  <div class="small-10 small-offset-1 medium-6 medium-offset-3 column flash" data-closable="fade-out" style="margin-top:11px;margin-bottom:11px;">
    <div class="callout alert small">
      <h6>Error!</h6>
      <small>{{ Session::get('error')}}</small>
      <button class="close-button" aria-label="Dismiss message" type="button" data-close>
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  </div>
</div>
@endif
@if (count($errors) > 0)
<div class="row">
  <div class="small-10 small-offset-1 medium-6 medium-offset-3 column flash" data-closable="fade-out" style="margin-top:11px;margin-bottom:11px;">
    <div class="callout alert small">
      <h6>Error!</h6>
      <small><ul>
        @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach        
      </ul></small>
      <button class="close-button" aria-label="Dismiss message" type="button" data-close>
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  </div>
</div>
@endif