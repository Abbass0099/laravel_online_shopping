@extends('adminlte::page')
@section("css")
  <link rel="stylesheet" href="{{asset('assets/css/dashboard.css')}}">
@endsection
@section('content')
{{-- profile --}}
<div class="profile">
  <div class="container">

    <div class="row">
      <form class="" action="" method="post" enctype="multipart/form-data">
        @csrf
      <div class="col-sm-6 left-content">
        <h5>Account details</h5>
          <div class="row one">
            <div class="col-sm-6">
              <label for="">Select New Avatar</label>
              <input type="file" name="" value="">
            </div>
            <div class="col-sm-6">
              <label for="">Email</label>
              <input type="email" name="" value="{{$seller->email}}">
            </div>
          </div>
          <div class="row two">
            <div class="col-sm-6">
              <label for="">Frist Name</label>
              <input type="text" name="" value="{{$seller->first_name}}">
            </div>
            <div class="col-sm-6">
              <label for="">Last Name</label>
              <input type="text" name="" value="{{$seller->last_name}}">
            </div>
          </div>

          <div class="row three">
            <div class="col-sm-6">
              <label for="">Phone</label>
              <input type="text" name="" value="{{$seller->phone}}">
            </div>
            <div class="col-sm-6">
              <label for="">City</label>
              <input type="text" name="" value="{{$seller->city}}">
            </div>
          </div>
          <div class="row three">
            <div class="col-sm-6">
              <label for="">Register Certifaction</label>
              <iframe src="{{$seller->reg_cert}}" style="width: 100%;height: 100%;border: none;"></iframe>
              <input type="hidden" name="" value="">
            </div>
            <div class="col-sm-6">
              <label for="">Commerciel Register</label>
              <iframe src="{{$seller->com_cert}}" style="width: 100%;height: 100%;border: none;"></iframe>
              <input  type="hidden" name="" value="">
            </div>
          </div>

          <input class="col-sm-4 col-sm-offset-4 btn btn-primary" type="submit" value="Update Account">
      </div>
      <div class="col-sm-4 right-content">
        <h5>Change Password</h5>
        <div class="col-sm-12 four">
          <label for="photo">Old Password</label>
          <input type="password" name="" value="" placeholder="You current password">
        </div>
        <div class="col-sm-12 five">
          <label for="photo">New Password</label>
          <input type="password" name="" value="" placeholder="You New password">
        </div>
        <div class="col-sm-12 six">
          <label for="photo">Confirm Password</label>
          <input type="password" name="" value="" placeholder="Confirm New Password">
        </div>

        <input class="col-sm-4 col-sm-offset-4 btn btn-primary" type="submit" value="Change Password">
      </div>
    </form>
    </div>

  </div>
</div>

@endsection
