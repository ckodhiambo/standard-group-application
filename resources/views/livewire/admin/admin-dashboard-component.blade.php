<div xmlns:wire="http://www.w3.org/1999/xhtml">
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>SkyDash | Home</title>
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
              integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
              crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('dashboard-page-assets/vendors/select2/select2.min.css') }}">
        <link rel="stylesheet"
              href="{{ asset('dashboard-page-assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="{{ asset('dashboard-page-assets/css/vertical-layout-light/style.css') }}">
        <!-- endinject -->
        <link rel="shortcut icon" href="{{ asset('dashboard-page-assets/images/favicon.png') }}"/>
        <style>
            .l-bg-cherry {
                background: linear-gradient(to right, #8d188e, #f09) !important;
                color: #fff;
            }
        </style>
    </head>
    <body>
    <div class="content-wrapper">
        <div class="wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="row">
                        <div class="col-12 col-xl-9 mb-4 mb-xl-0">
                            <h3 class="font-weight-bold">Hi {{ auth()->user()->name }}, you can register a student
                                here!</h3>
                            <h6 class="font-weight-normal mb-0">All systems are running smoothly!<span
                                    class="text-primary"></span></h6>
                        </div>
                        <div class="col-12 col-xl-3">
                            <div class="justify-content-end d-flex">
                                <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                                    <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button"
                                            id="dropdownMenuDate2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <i class="mdi mdi-calendar"></i> Today (30 Nov 2022)
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card card-outline-primary">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="card border-primary mb-3" style="border-color: #8d188e !important;">
                                        <div class="card-header l-bg-cherry" style="border-radius: 10px">
                                            <h5>Add new student</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="card-description text-info">
                                Kindly fill in the necessary details inline with your request.
                            </p>
                            <form class="forms-sample" action="{{route('admin.add-student')}}" enctype="multipart/form-data" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <strong><label class="text-primary">Student Name</label></strong>
                                            <input type="text" class="form-control form-control-sm"
                                                   placeholder="e.g. Kennedy Calvins" name="name"
                                                   aria-label="Subject">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group" id="">
                                            <strong><label class="text-primary">Stream</label></strong>
                                            <select class="js-example-basic-single w-100" name="stream_name">
                                                @foreach(App\Models\Stream::all() as $stream)
                                                    <option value="{{$stream->id}}">{{$stream->stream_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <strong><label class="text-primary">Email Address</label></strong>
                                            <input type="text" class="form-control form-control-sm"
                                                   placeholder="e.g ck@gmail.com" name="email"
                                                   aria-label="Subject">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <strong><label class="text-primary">Photo upload</label></strong>
                                            {{--                                            <input type="file" name="attachment" class="file-upload-default">--}}
                                            <div class="input-group col-xs-12">
                                                <input type="file" class="form-control file-upload-info"
                                                       placeholder="Upload Image" name="attachment"><span
                                                    class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                </span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <button type="submit" class="btn l-bg-cherry mr-2 float-right"
                                        style="color: #fff;border: none">Send
                                    Request
                                </button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- plugins:js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js"
            integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js"
            integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
            crossorigin="anonymous"></script>
    {{--<script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>--}}
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('assets/vendors/typeahead.js/typeahead.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/select2/select2.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        $("button[type='submit']").click(function () {
            $("div.spanner").addClass("show");
            $("div.overlay").addClass("show");
        });
    </script>

    <script>
        tinymce.init({
            selector: 'textarea#editor',
            menubar: false
        });
    </script>
    <script>
        $('#category_id').change((event) => {
            $('.assets').hide();
            $(`.category_${event.target.value}`).show();
        });
        $(document).ready(function () {
            $('.assets').hide();
        });
    </script>
    <!-- inject:js -->
    <script src="{{ asset('dashboard-page-assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('dashboard-page-assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('dashboard-page-assets/js/template.js') }}"></script>
    <script src="{{ asset('dashboard-page-assets/js/settings.js') }}"></script>
    <script src="{{ asset('dashboard-page-assets/s/todolist.js') }}j"></script>
    <!-- endinject -->

    <!-- Plugin js for this page -->
    <script src="{{ asset('dashboard-page-assets/vendors/typeahead.js/typeahead.bundle.min.js') }}"></script>
    <script src="{{ asset('dashboard-page-assets/vendors/select2/select2.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="{{ asset('dashboard-page-assets/js/file-upload.js') }}"></script>
    <script src="{{ asset('dashboard-page-assets/js/typeahead.js') }}"></script>
    <script src="{{ asset('dashboard-page-assets/js/select2.js') }}"></script>
    <!-- End custom js for this page-->


    </body>
    </html>
</div>

