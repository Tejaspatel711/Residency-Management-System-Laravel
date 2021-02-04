@extends('master')
@section("content")

<link href="{{ asset('/css/style.css') }}" rel="stylesheet"> 
<body>
  <div  class="mainImg"></div>
  
    @include('sweet::alert')
    <div class="row">
        <div>
          <form action="login" method="POST">
            <div class="text-center">
              <h4 class="text-warning">Login Here!!</h4>
              <hr style="border-top: 5px solid white; border-radius: 2px;">
            </div>
              <div class="mb-3">
                  @csrf
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="text-center">
              <button type="submit" class="btn btn-success">Login</button>
              <br>
              <a href="register" class="text-warning">Create an new Account now!</a>
              </div>
          </form>
        </div>
    </div>
  
</body>
@endsection