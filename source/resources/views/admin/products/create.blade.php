@extends('layouts.admin')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Thêm sản phẩm mới</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Thêm sản phẩm mới</li>
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
                                <h3 class="card-title">Thêm sản phẩm mới</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
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
                                        <label for="inputProductName">Tên sản phẩm <span style="color: red;"><i>(*)</i></span></label>
                                        <input type="text" class="form-control" name="name" id="inputProductName" placeholder="Nhập vào tên sản phẩm" value="{{ old('name') }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Chọn loại sản phẩm <span style="color: red;"><i>(*)</i></span></label>
                                        <select name="category_id" class="form-control select2" style="width: 100%;">
                                            @foreach($categories as $category)
                                                <option value={{$category->id}}>{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Chọn hãng sản xuất <span style="color: red;"><i>(*)</i></span></label>
                                        <select name="vendor_id" class="form-control select2" style="width: 100%;">
                                            @foreach($vendors as $vendor)
                                                <option value={{$vendor->id}}>{{$vendor->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Mô tả sản phẩm <span style="color: red;"><i>(*)</i></span></label>
                                        <textarea class="form-control" rows="3" name="description" placeholder="Vui lòng nhập thông tin mô tả sản phẩm dưới 500 kí tự">{{ old('description') }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <textarea id="summernote" name="content">{{ old('content') }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Thông số kỹ thuật sản phẩm</label>
                                        <label for="title">
                                            <a class="btn btn-app bg-blue" onclick="handleAddParameters()">
                                                <span class="badge bg-purple"></span>
                                                <i class="fas fa-plus"></i> Thêm thông số
                                            </a>
                                        </label>
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">Thuộc tính</th>
                                                <th scope="col">Giá trị</th>
                                                <th scope="col"></th>
                                            </tr>
                                            </thead>
                                            <tbody id="content-parameters">
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="form-group">
                                        <label>Ảnh sản phẩm</label>
                                        <input type="file" name="featured_image" id="featured_image" class="file-upload-default" style="display: none">
                                        <div class="input-group col-xs-12">
                                            <span data-thumbnail="{{ env('APP_URL') . DIRECTORY_SEPARATOR . 'default.jpg' }}" class="input-group-append file-upload-browse" style="background: url({{ env('APP_URL') . DIRECTORY_SEPARATOR . 'default.jpg' }})">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="file col-12">
                                            Ảnh chi tiết sản phẩm
                                            <input type="file" name="images[]" id="images" multiple aria-label="File browser example">
                                            <span class="file-custom"></span>
                                        </label>
                                    </div>
                                    <div class="row form-group preview-images">
                                    </div>
                                    <div class="form-group">
                                        <label>Giá sản phẩm <span style="color: red;"><i>(*)</i></span></label>
                                        <input type="text" name="price" value="{{ old('price') }}" id="product-price" class="form-control" placeholder="Nhập vào số sản phẩm">
                                    </div>
                                    <div class="form-group">
                                        <label>Giảm (ví dụ: giảm 10% thì nhập vào ô bên dưới là 10)</label>
                                        <input type="text" name="discount" value="{{ old('discount', 0) }}" id="product-price-discount" class="form-control" placeholder="Nhập vào số sản phẩm">
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" name="favorite_flg" checked data-bootstrap-switch>
                                        <label class="form-check-label">Đánh dấu sản phẩm nổi bật</label>
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

        const contentParameters = document.getElementById('content-parameters');
        var numberRow = 100;
        function handleAddParameters() {
            numberRow += 1;
            let rowElement = document.createElement('tr');
            let columnThElement = document.createElement('th');
            columnThElement.scope = "row";
            columnThElement.innerHTML = '<input type="text" name="parameters['+ numberRow +'][key]" class="form-control" />';
            let columnTd1Element = document.createElement('td');
            columnTd1Element.innerHTML = '<input type="text" name="parameters['+ numberRow +'][value]" class="form-control" />';
            let columnTd2Element = document.createElement('td');
            let buttonRemoveElement = document.createElement('button');
            buttonRemoveElement.type = "button";
            buttonRemoveElement.className = "btn btn-sm btn-danger";
            buttonRemoveElement.innerText = "Xóa";
            buttonRemoveElement.addEventListener('click', handleRemoveProperties);
            columnTd2Element.append(buttonRemoveElement);
            rowElement.append(columnThElement);
            rowElement.append(columnTd1Element);
            rowElement.append(columnTd2Element);
            contentParameters.append(rowElement);
        }
        function handleRemoveProperties() {
            this.closest('tr').remove();
        }

        var inputProductPrice = document.getElementById("product-price");
        // format number input price when typing
        inputProductPrice.addEventListener('keyup', function(evt){
            var n = parseInt(this.value.replace(/\D/g,''),10);
            inputProductPrice.value = n.toLocaleString();
        }, false);

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

        var totalFile = 0,
            filesList = new Array(),
            formDataDelete = function(index) {
                "use strict";
                var keep = filesList;
                keep.splice(index, 1);
                console.log(filesList);
                return filesList = keep;
            },
            imagesPreview = function(input, placeToInsertImagePreview) {
                if (input.files) {
                    var filesAmount = input.files.length;
                    for (let i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();
                        reader.onload = function(event) {
                            let previewImageHtml = `<div class="input-group col-xs-12 col-3 col-xl-2 pb-3">
                            <span class="input-group-append file-upload-browse" style="background: url(${event.target.result});">
                            </span>
                            <label class="js-close-image-preview-2"><i class="fas fa-window-close"></i></label>
                            <input type="hidden" name="images-base64[]" value="${event.target.result}">
                        </div>`;
                            $(previewImageHtml).appendTo(placeToInsertImagePreview);
                            filesList.push(event.target.result);
                            console.log(filesList);
                        };
                        reader.readAsDataURL(input.files[i]);
                    }
                }
            };

        $('#images').on('change', function() {
            if (filesList.length < 10) {
                imagesPreview(this, 'div.preview-images');
            } else {
                alert('chỉ được tải tối đa 10 ảnh')
            }
        });

        $(document).on("click", ".js-close-image-preview-2", function() {
            totalFile--;
            formDataDelete($(this).parents("div.input-group").index());
            $(this).parents("div.input-group").remove();
        });
    </script>
@endsection
