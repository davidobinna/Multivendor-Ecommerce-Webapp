@if(Session::has('success'))
<div class="alert alert-success alert-dismissible fade show" id="alert" role="alert">
  <strong>{{Session::get('success')}}</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

@if($errors->any())
<div class="alert alert-danger alert-dismissible fade show" id="alert" role="alert">
     <ul>
     @foreach($errors->all() as $error)
     <li>{{$error}}</li>
      @endforeach
      </ul>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
@endif