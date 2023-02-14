@extends('app')
@section('title','Edit Profile')
@section('content')
<div class="nk-content">
            <div class="container">
              <div class="nk-content-inner">
                <div class="nk-content-body">
                  <div class="nk-block-head">
                    <div class="nk-block-head-between flex-wrap gap g-2">
                      <div class="nk-block-head-content">
                        <h2 class="nk-block-title">Profile </h1>
                          <nav>
                            <ol class="breadcrumb breadcrumb-arrow mb-0">
                              <li class="breadcrumb-item">
                                <a href="{{route('home')}}">Home</a>
                              </li>
                              <li class="breadcrumb-item active" aria-current="page">Profile</li>
                            </ol>
                          </nav>
                      </div>
                    </div>
                  </div>
                  <div class="nk-block">
                    <form action="{{route('profile.update')}}" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="row g-gs">
                        <div class="col-xxl-9">
                          <div class="gap gy-4">
                            <div class="gap-col">
                              <div class="card card-gutter-md">
                                <div class="card-body">
                                  <div class="row g-gs">
                                    <div class="col-lg-6">
                                      <div class="form-group">
                                        <label for="name" class="form-label"> Name</label>
                                        <div class="form-control-wrap">
                                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ Auth::user()->name }}" name="name" placeholder="Name">
                                          @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                         @enderror
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-6">
                                      <div class="form-group">
                                        <label for="email" class="form-label"> Email</label>
                                        <div class="form-control-wrap">
                                          <input type="email" class="form-control" id="email" name="email" value="{{Auth::user()->email}}" readonly>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-6">
                                      <div class="form-group">
                                        <label for="phone" class="form-label">Phone</label>
                                        <div class="form-control-wrap">
                                          <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ Auth::user()->number }}" readonly>
                                          @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                         @enderror
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-6">
                                      <div class="form-group">
                                        <label for="password" class="form-label">Password</label>
                                        <div class="form-control-wrap">
                                          <input type="password" class="form-control @error('password') is-invalid @enderror"  id="password" name="password" placeholder="Password">
                                          @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                         @enderror
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="gap-col">
                            <div class="card card-gutter-md">
                            <div class="card-body">
                              <div class="row g-gs">
                                <div class="col-12">
                                  <div class="form-group">
                                    <label class="form-label">Profile Image</label>
                                    <div class="form-control-wrap">
                                      <div class="image-upload-wrap d-flex flex-column align-items-center">
                                        <div class="media media-huge border">
                                          @if (Auth::user()->image!=null)
                                          <img id="image-result" class="w-100 h-100" src="{{asset(Auth::user()->image)}}" alt="avatar">
                                          @else
                                          <img id="image-result" class="w-100 h-100" src="{{asset('assets/images/avatar/avatar-placeholder.jpg')}}" alt="avatar">
                                          @endif
                                        </div>
                                        <div class="pt-3">
                                        
                                          <input class="upload-image" data-target="image-result" id="change-avatar" type="file"  name="image" max="1" hidden>
                                          <label for="change-avatar" class="btn btn-md btn-primary">Change</label>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-note mt-3">Set the product thumbnail image. Only *.png, *.jpg and *.jpeg image files are accepted.</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                            </div>
                            <div class="gap-col">
                              <ul class="d-flex align-items-center gap g-3">
                                <li>
                                  <button type="submit" class="btn btn-primary">Save Changes</button>
                                </li>
                                <li>
                                  <a href="products.html" class="btn border-0">Cancel</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
@push('custom-script')

@if(Session::has('message'))
<script>
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.success("{{ session('message') }}");
      </script>
  @endif
  
@endpush
         
@endsection