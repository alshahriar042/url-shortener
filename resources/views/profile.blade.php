@extends('layouts.main')

@section('title', 'Profile')

@section('content')
<div class="row">
      <div class="col-6 col-md-6 col-lg-6">
        <div class="card author-box">
          <div class="card-body">
            <div class="author-box-center">
              <img alt="image" src="assets/img/users/user-1.png" class="rounded-circle author-box-picture">
              <div class="clearfix"></div>
              <div class="author-box-name">
                <a href="#">{{ Auth::user()->name }}</a>
              </div>
              <div>
                    <p class="clearfix">
                      <span class="float-left">Birthday</span>
                      <span class="float-right text-muted">30-05-1998</span>
                    </p>
                    <p class="clearfix">
                      <span class="float-left">Phone</span>
                      <span class="float-right text-muted">(0123)123456789</span>
                    </p>
                    <p class="clearfix">
                      <span class="float-left">Mail</span>
                      <span class="float-right text-muted">{{ Auth::user()->email }}</span>
                    </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-6 col-md-6 col-lg-6">
        <div class="card">
            <form method="post" class="needs-validation">
                <div class="card-header">
                  <h4>Edit Profile</h4>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="form-group col-md-6 col-12">
                      <label>Name</label>
                      <input type="text" class="form-control" value="{{ Auth::user()->name }}">
                      <div class="invalid-feedback">
                        Please fill in the first name
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-7 col-12">
                      <label>Email</label>
                      <input type="email" class="form-control" value="{{ Auth::user()->email }}">
                      <div class="invalid-feedback">
                        Please fill in the email
                      </div>
                    </div>
                    <div class="form-group col-md-5 col-12">
                      <label>Phone</label>
                      <input type="tel" class="form-control" value="">
                    </div>
                  </div>
                </div>
                <div class="card-footer text-left">
                  <button class="btn btn-primary">Save Changes</button>
                </div>
              </form>
        </div>

      </div>
</div>



@endsection
