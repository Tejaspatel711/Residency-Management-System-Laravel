@extends('master')
@section("content")
<link href="{{ asset('/css/style.css') }}" rel="stylesheet">
<body>
    @include('sweet::alert')
  <div  class="mainImg"></div>
  
    <div class="row" style="font-size: 15px">
        <div>
          <form action="{{ route('auth.create') }}" method="POST">
            <div class="text-center">
                @csrf
              <h4 class="text-warning">Register Here!!</h4>
              <hr style="border-top: 3px solid white; border-radius: 2px;">
            </div>
              <div class="mb-2">
                <label for="exampleInputName1" id="exampleInputName1" class="form-label">Full Name</label>
                <input type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp" required>
              </div>
              <div class="mb-2">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
              <div class="mb-2">
                <label for="examplePhoneNumber" id="examplePhoneNumber" class="form-label">Mobile Number</label>
                <input type="text" name="phone" class="form-control" id="exampleInputPhoneNumber" aria-describedby="phoneNumberHelp" required>
              </div>
              <div class="mb-2">
                <label for="exampleHouseNumber" id="exampleHouseNumber" class="form-label">House Number</label>
                <input type="text" name="house" class="form-control" id="exampleInputHouseNumber" aria-describedby="houseNumberHelp" required>
              </div>
              <div class="mb-2">
                <label for="exampleFloorNumber" id="exampleFloorNumber" class="form-label">Floor Number</label>
                <input type="number" name="floor" class="form-control" id="exampleInputFloorNumber" aria-describedby="floorNumberHelp" required>
              </div>
              <div class="mb-2">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
              </div>
              <div class="text-center">
              <button type="submit" class="btn btn-success">Register</button>
              <br><br>
              <a href="login" class="text-warning">Already have an Account!</a>
              </div>
          </form>
        </div>
    </div>
 
</body>
@endsection