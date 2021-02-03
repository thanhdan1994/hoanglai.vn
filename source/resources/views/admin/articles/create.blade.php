@extends('layouts.admin')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>THÊM BÀI VIẾT MỚI</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('article_type.articles.index', ARTICLE_NEWS) }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">THÊM BÀI VIẾT MỚI</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">THÊM BÀI VIẾT MỚI</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="POST" action="{{ route('articles.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    @if ($errors->any())
                                        @foreach ($errors->all() as $error)
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <strong>{{$error}}</strong>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        @endforeach
                                    @elseif(session()->has('message'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>{{session()->get('message')}}</strong>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @elseif(session()->has('error'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong>{{session()->get('error')}}</strong>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <label for="inputArticleName">Tên bài viết <span style="color: red;"><i>(*)</i></span></label>
                                        <input type="text" class="form-control" name="name" id="inputArticleName" placeholder="Nhập vào tên sản phẩm" value="{{old('name')}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Chọn loại bài viết <span style="color: red;"><i>(*)</i></span></label>
                                        <select name="article_type_id" class="form-control select2" style="width: 100%;">
                                            @foreach($articleTypes as $articleType)
                                                <option value={{$articleType->id}}>{{$articleType->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Mô tả <span style="color: red;"><i>(*)</i></span></label>
                                        <textarea class="form-control" rows="3" name="description" placeholder="Vui lòng nhập thông tin mô tả dưới 500 kí tự">{{ old('description') }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <textarea id="summernote" name="content">{{old('content')}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Ảnh bài viết</label>
                                        <input type="file" name="featured_image" id="featured_image" class="file-upload-default" style="display: none">
                                        <div class="input-group col-xs-12">
                                            <span data-thumbnail="{{ env('APP_URL') . DIRECTORY_SEPARATOR . 'default.jpg' }}" class="input-group-append file-upload-browse" style="background: url({{ env('APP_URL') . DIRECTORY_SEPARATOR . 'default.jpg' }})">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" name="favorite_flg" checked data-bootstrap-switch>
                                        <label class="form-check-label">Đánh dấu nổi bật</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" name="status" checked data-bootstrap-switch>
                                        <label class="form-check-label">Cho phép hoạt động</label>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">LƯU LẠI</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

@section('js')
    @parent
    <script src="/AdminLTE/plugins/bs-custom-file-input/bs-custom-file-input.js"></script>
    <script src="/AdminLTE/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <script src="/AdminLTE/plugins/summernote/summernote-bs4.min.js"></script>
    <script>
        $(document).ready(function()  {
            // Summernote
            $('#summernote').summernote({
                width: 760,
                callbacks: {
                    onImageUpload: function (image) {
                        uploadImage(image[0]);
                    }
                }
            });

            bsCustomFileInput.init();

            $("input[data-bootstrap-switch]").each(function(){
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            });

            function uploadImage(image) {
                let data = new FormData();
                data.append("image", image);
                $.ajax({
                    data: data,
                    type: "POST",
                    url: '/api/upload-image-editor',
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(url) {
                        var image = $('<img>').attr('src', url);
                        $('#summernote').summernote("insertNode", image[0]);
                    },
                    error: function(data) {
                        console.log(data);
                    }
                });
            }
        })


        $('.file-upload-browse').on('click', function() {
            var file = $(this).parent().parent().find('.file-upload-default');
            file.trigger('click');
        });

        $('.file-upload-default').on('change', function() {
            $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
        });

        function handleFileSelect(evt) {
            var files = evt.target.files; // FileList object
            // Loop through the FileList and render image files as thumbnails.
            for (var i = 0, f; f = files[i]; i++) {
                // Only process image files.
                if (!f.type.match('image.*')) {
                    continue;
                }
                var reader = new FileReader();
                // Closure to capture the file information.
                reader.onload = (function(theFile) {
                    console.log(theFile)
                    return function(e) {
                        let previewElement = document.querySelector('span.file-upload-browse');
                        previewElement.style.background = "url("+ e.target.result +")";
                        // let closeElement = document.createElement('label'), icon = document.createElement('i');
                        // icon.className = "fas fa-window-close";
                        // closeElement.className = 'js-close-image-preview';
                        // closeElement.append(icon);
                        previewElement.parentNode.append(closeElement);
                    };
                })(f);
                // Read in the image file as a data URL.
                reader.readAsDataURL(f);
            }
        }

        document.getElementById('featured_image').addEventListener('change', handleFileSelect, false);
    </script>
@endsection
