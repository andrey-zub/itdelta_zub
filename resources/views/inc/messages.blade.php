@if($errors->any())
<p>----------[ ERORR: ]----------</p>
<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

@if(session('success'))
<p>----------[ SUCCESS: ]----------</p>
<div class="alert alert-success text-center">
  {{ session('success') }}
</div>
@endif
