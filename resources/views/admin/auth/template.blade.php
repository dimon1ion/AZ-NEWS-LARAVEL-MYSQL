<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    @section('styleDefault')
    <link rel="stylesheet" href="{{ asset("admin/vendors/mdi/css/materialdesignicons.min.css") }}">

    <link rel="stylesheet" href="{{ asset("admin/vendors/css/vendor.bundle.base.css") }}">
    <link rel="stylesheet" href="{{ asset("admin/css/style.css") }}">
    <link rel="shortcut icon" href="{{ asset("admin/images/favicon.png") }}">

    @show
    @section('style')

    @show
</head>

<body>

    @section('content')

    @show


    <!-- plugins:js -->
    <script src="{{ asset("admin/vendors/js/vendor.bundle.base.js") }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset("admin/js/off-canvas.js") }}"></script>
    <script src="{{ asset("admin/js/hoverable-collapse.js") }}"></script>
    <script src="{{ asset("admin/js/misc.js") }}"></script>
    <script src="{{ asset("admin/js/settings.js") }}"></script>
    <script src="{{ asset("admin/js/todolist.js") }}"></script>
    <!-- End custom js for this page -->
    @show

</body>
</html>