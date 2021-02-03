@extends('layouts.admin')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>DANH SÁCH {{ $category->name }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('categories.products.index', $category->id) }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Danh sách {{ $category->name }}</li>
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
                        <div class="card">
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
                                <div class="p-3">
                                    <a href="{{ route('products.create') }}" class="btn btn-block btn-outline-primary"><i class="fa fa-edit"></i> Thêm sản phẩm mới</a>
                                </div>
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th style="width: 40%">Tên máy</th>
                                        <th>Hình</th>
                                        <th>Giá</th>
                                        <th>Giá khuyến mãi</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($products as $product)
                                            <tr>
                                                <td>{{ $product->name }}</td>
                                                <td><img width="100px" height="70px" src="{{ $product->getThumbnailUrl('thumb-70') }}" /> </td>
                                                <td>{{ number_format($product->price) }}₫</td>
                                                <td>{{ number_format($product->price - ($product->price * $product->discount / 100)) }}₫</td>
                                                <td>
                                                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-block btn-outline-primary"><i class="fa fa-edit"></i> Chỉnh sửa thông tin</a>
                                                    <form style="margin-top: .5rem" method="post" action="{{route('products.destroy', $product->id)}}"
                                                          onsubmit="return confirm('Bạn chắc chắn muốn xóa sản phẩm này?');">
                                                        {{method_field('delete')}}
                                                        {{csrf_field()}}
                                                        <button type="submit" class="btn btn-block btn-outline-danger"><i class="fa fa-trash"></i>Xóa sản phẩm này</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $products->links() }}
                            </div>
                            <!-- /.card-body -->
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

@section('js')
    @parent
    <script src="/AdminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
@endsection
