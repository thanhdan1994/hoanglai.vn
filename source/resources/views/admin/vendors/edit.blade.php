@extends('layouts.admin')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Thêm nhà cung cấp mới</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('vendors.index') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Thêm nhà cung cấp mới mới</li>
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
                                <h3 class="card-title">Thêm nhà cung cấp mới</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="POST" action="{{ route('vendors.update', $vendor->id) }}" enctype="multipart/form-data">
                                @method('PUT')
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
                                        <label>Tên sản phẩm <span style="color: red;"><i>(*)</i></span></label>
                                        <input type="text" class="form-control" name="name" placeholder="Nhập vào tên nhà cung cấp" value="{{ old('name', $vendor->name) }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Logo nhà cung cấp (kích thước 220x48 hoặc tỉ lệ tương đương)</label>
                                        <input type="file" name="featured_image" id="featured_image" class="file-upload-default" style="display: none">
                                        <div class="input-group col-xs-12">
                                            <span data-thumbnail="{!! $vendor->logo !!}" class="input-group-append file-upload-browse logo" style="background: url({!! $vendor->logo !!})">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" name="printer_flg" {{ $vendor->printer_flg ? 'checked' : '' }} data-bootstrap-switch>
                                        <label class="form-check-label">Hiển thị tại mục máy in</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" name="photocopy_flg" {{ $vendor->photocopy_flg ? 'checked' : '' }} data-bootstrap-switch>
                                        <label class="form-check-label">Hiển thị tại mục photocopy</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" name="cartridge_flg" {{ $vendor->cartridge_flg ? 'checked' : '' }} data-bootstrap-switch>
                                        <label class="form-check-label">Hiển thị tại mục hộp mực in</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" name="status" {{ $vendor->status ? 'checked' : '' }} data-bootstrap-switch>
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
        $("input[data-bootstrap-switch]").each(function(){
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        });

        $('.file-upload-browse').on('click', function() {
            var file = $(this).parent().parent().find('.file-upload-default');
            file.trigger('click');
        });

        $('.file-upload-default').on('change', function() {
            $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
        });

        $(document).on('click', '.js-close-image-preview', function (e) {
            e.preventDefault();
            let previewElement = document.querySelector('span.file-upload-browse');
            let thumbnail = previewElement.dataset.thumbnail;
            previewElement.style.background = "url("+ thumbnail+")";
            this.remove();
            document.getElementById("featured_image").value = "";
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
