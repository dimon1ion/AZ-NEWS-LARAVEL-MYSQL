@extends('admin.auth.template')

@section('content')
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="row w-100 m-0">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-left mb-3">{{ __("index.login") }}</h3>
              <form method="POST" action="{{ route('login', ["locale" => App::getLocale()]) }}">
                @csrf
                @if ($errors->has('name'))
                    <span class="text-danger">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
                <div class="form-group">
                  <label>{{ __("index.username") }} *</label>
                  <input type="text" class="form-control p_input" name="name" value="{{ old("name") }}" required autofocus autocomplete="username">
                </div>
                <div class="form-group">
                  <label>{{ __("index.password") }} *</label>
                  <input type="password" name="password" class="form-control p_input" required autocomplete="current-password">
                </div>
                <div class="form-group d-flex align-items-center justify-content-between">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" name="remember" class="form-check-input"> {{ __("index.remember") }} </label>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block enter-btn">{{ __("index.login") }}</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
@endsection
