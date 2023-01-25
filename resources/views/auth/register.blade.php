@extends('auth.layout')
@section('title','Registration')
@section('content')
            <div class="nk-split nk-split-page">
            <div class="nk-split-content nk-split-auth-container flex-shrink-0">
              <div class="nk-split-auth-body d-flex flex-column h-100">
                <div class="my-auto">
                  <div class="brand-logo mb-4">
                    <a href="{{route('home')}}" class="logo-link">
                      <div class="logo-wrap">
                      <img src="{{asset('assets/images/WL.png')}}" height="100px" width="100px" alt="" srcset="">
                      </div>
                    </a>
                  </div>
                  <div class="nk-block-head">
                    <div class="nk-block-head-content">
                      <h3 class="nk-block-title mb-1">Create New Account</h3>
                      <p class="small">Use your email continue with Nioboard (it's free)!</p>
                    </div>
                  </div>
                  <form action="#">
                    <div class="row gy-3">
                      <div class="col-12">
                        <div class="form-group">
                          <label for="username" class="form-label">Name</label>
                          <div class="form-control-wrap">
                          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="email" class="form-label">Email</label>
                          <div class="form-control-wrap">
                            <input type="email" class="form-control @error('name') is-invalid @enderror" id="email" placeholder="Enter email address">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="password" class="form-label">Password</label>
                          <div class="form-control-wrap">
                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="password" class="form-label">Password</label>
                          <div class="form-control-wrap">
                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-check form-check-sm">
                          <input class="form-check-input" readdired type="checkbox" value="" id="iAgree">
                          <label class="form-check-label" for="iAgree"> I agree to <a href="#">privacy policy</a> & <a href="#">terms</a>
                          </label>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="d-grid">
                          <button class="btn btn-primary" type="submit">Sign up</button>
                        </div>
                      </div>
                    </div>
                  </form>
                  <div class="my-3 text-center">
                    <h6 class="overline-title overline-title-sep">
                      <span>OR</span>
                    </h6>
                  </div>
                  <div class="row g-2">
                    <div class="col-sm-6">
                      <a href="#" class="btn btn-outline-light w-100">
                        <img src="{{asset('assets/images/icon/d.png')}}" alt="" class="icon">
                        <span class="fw-medium">With Google</span>
                      </a>
                    </div>
                    <div class="col-sm-6">
                      <a href="#" class="btn btn-outline-light w-100">
                        <img src="{{asset('assets/images/icon/b.png')}}" alt="" class="icon">
                        <span class="fw-medium">With Facebook</span>
                      </a>
                    </div>
                  </div>
                  <div class="mt-4">
                    <p class="small">Already have an account? <a href="{{route('login')}}">Login</a>
                    </p>
                  </div>
                </div>
                <div class="nk-split-auth-footer">
                  <ul class="nav nav-sm ms-n2">
                    <li class="nav-item">
                      <a class="nav-link" href="#">Terms &amp; Condition</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Privacy Policy</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Help</a>
                    </li>
                  </ul>
                </div>
              </div>
              </div>
            <div class="nk-split-content d-none d-md-block flex-grow-1 has-bg" data-bg="{{asset('assets/images/thumb/b.jpg')}}"></div>
            </div>
@endsection
          