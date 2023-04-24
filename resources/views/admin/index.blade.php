@extends('admin.template.template')

@section('style')
    <link rel="stylesheet" href="{{ asset("admin/vendors/select2/select2.min.css") }}">
    <link rel="stylesheet" href="{{ asset("admin/vendors/select2-bootstrap-theme/select2-bootstrap.min.css") }}">
@endsection

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> News </h3>
      {{-- <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Forms</a></li>
          <li class="breadcrumb-item active" aria-current="page">Form elements</li>
        </ol>
      </nav> --}}
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">{{ __("index.news") }}</h4>
              </p>
              <div class="table-responsive">
                <a type="button" href="{{ route("addPostPage", ["locale" => App::getLocale()]) }}" class="nav-link btn btn-outline-success btn-fw my-2 p-3">{{ __("index.addPost") }}</a>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>{{ __("index.id") }}</th>
                      <th>{{ __("index.title") }}</th>
                      <th>{{ __("index.category")}}</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>
                                @foreach ($post->categories as $category)
                                    {{ $category->name." " }}
                                @endforeach
                            </td>
                            <td><a type="button" class="nav-link btn btn-warning btn-fw">{{  __("index.edit") }}</a></td>
                            <td><a type="button" class="nav-link btn btn-danger btn-fw">{{ __("index.delete") }}</a></td>
                        </tr>
                    @endforeach                
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
@endsection

@section('script')
    <script src="{{ asset("admin/vendors/select2/select2.min.js") }}"></script>
@endsection