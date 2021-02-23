@extends('layouts.admin')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>CÀI ĐẶT THÔNG TIN</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- form start -->
                            <form method="POST" action="{{ route('settings.update') }}" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <!-- /.card-header -->
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
                                            <strong>{!! session()->get('message') !!}</strong>
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
                                   {{-- chổ này để xử lý form --}}
                                    <div class="form-group">
                                        <label>Tên công ty <span style="color: red;"><i>(*)</i></span></label>
                                        <input type="text" class="form-control" name="companyName" placeholder="Nhập vào tên công ty" value="{{ old('companyName', $settings['companyName']) }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Địa chỉ <span style="color: red;"><i>(*)</i></span></label>
                                        <input type="text" class="form-control" name="address1" placeholder="Nhập vào địa chỉ công ty" value="{{ old('address1', $settings['address1']) }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Số điện thoại tư vấn <span style="color: red;"><i>(* vui lòng nhập số điện thoại)</i></span></label>
                                        <input type="text" class="form-control" name="phone1" placeholder="Nhập vào số điện thoại tư vấn" value="{{ old('phone1', $settings['phone1']) }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Địa chỉ email <span style="color: red;"><i>(*)</i></span></label>
                                        <input type="text" class="form-control" name="email" placeholder="Nhập vào địa chỉ email" value="{{ old('email', $settings['email']) }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Số điện thoại hỗ trợ kỹ thuật <span style="color: red;"><i>(* vui lòng nhập số điện thoại)</i></span></label>
                                        <input type="text" class="form-control" name="phone2" placeholder="Nhập vào số điện thoại tư vấn" value="{{ old('phone2', $settings['phone2']) }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Số điện thoại mua hàng <span style="color: red;"><i>(* vui lòng nhập số điện thoại)</i></span></label>
                                        <input type="text" class="form-control" name="phone3" placeholder="Nhập vào số điện thoại tư vấn" value="{{ old('phone3', $settings['phone3']) }}">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">LƯU THAY ĐỔI</button>
                                </div>
                                <!-- /.card-body -->
                            </form>
                        </div>
                        <!-- /.card -->
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
