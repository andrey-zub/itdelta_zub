@include('inc.header')

<div class="container mt-5">
    @include('inc.messages')

  <div class="row">
    <div class="col-8">
      @yield('content')
    </div>
    <div class="col-4">
      @yield('backPanel')
    </div>

  </div>
</div>

@include('inc.footer')
