@extends('auth.layout')
@section('title','Login')
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
                      <h3 class="nk-block-title mb-1">Login to Account</h3>
                      <p class="small">Please sign-in to your account and start the adventure.</p>
                    </div>
                  </div>
                  <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row gy-3">
                      <div class="col-12">
                        <div class="form-group">
                          <label for="username" class="form-label">Email Address</label>
                          <div class="form-control-wrap">
                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
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
                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="d-flex flex-wrap justify-content-between">
                          <div class="form-check form-check-sm">
                          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                            <label class="form-check-label" for="rememberMe"> Remember Me </label>
                          </div>
                          @if (Route::has('password.request'))
                          <a href="{{ route('password.request') }}" class="small">Forgot Password?</a>
                          @endif
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="d-grid">
                          <button class="btn btn-primary" type="submit">Login to account</button>
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
                    <p class="small">Don't have an account? <a href="{{ route('register') }}">Register</a>
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
