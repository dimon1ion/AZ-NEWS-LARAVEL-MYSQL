@extends('admin.template.template')

@section('style')
    <link rel="stylesheet" href="{{ asset("admin/vendors/select2/select2.min.css") }}">
    <link rel="stylesheet" href="{{ asset("admin/vendors/select2-bootstrap-theme/select2-bootstrap.min.css") }}">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    
@endsection

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Add Post </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route("adminka", ["locale" => App::getLocale()]) }}">News</a></li>
          <li class="breadcrumb-item active" aria-current="page">Add Post</li>
        </ol>
      </nav>
    </div>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Add Post</h4>
                <p class="card-description"> Enter data </p>
                <form class="forms-sample">
                  <div class="form-group">
                    <label for="exampleInputName1">Title</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <label for="summernote1">Textarea</label>
                    <textarea id="summernote" name="editordata"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleSelectGender">Categories</label>
                    <select class="js-example-basic-multiple" name="category" multiple="multiple" style="width:100%">
                        <option value="AL">Alabama</option>
                        <option value="WY">Wyoming</option>
                        <option value="AM">America</option>
                        <option value="CA">Canada</option>
                        <option value="RU">Russia</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label>File upload</label>
                    <input type="file" name="img[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                      <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                      <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                      </span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputCity1">City</label>
                    <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
                  </div>
                  
                  <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  <button class="btn btn-dark">Cancel</button>
                </form>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection

@section('script')
    <script src="{{ asset("admin/js/file-upload.js") }}"></script>
    <script src="{{ asset("admin/js/typeahead.js") }}"></script>
    <script src="{{ asset("admin/js/select2.js") }}"></script>
    <script src="{{ asset("admin/vendors/typeahead.js/typeahead.bundle.min.js") }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="{{ asset("admin/vendors/select2/select2.min.js") }}"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                minHeight: 100,
                maxHeight: null,
                focus: true,
                styleWithSpan: false,
                toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['para', ['ul', 'ol']]
            ]
            });
        });
    </script>
@endsection