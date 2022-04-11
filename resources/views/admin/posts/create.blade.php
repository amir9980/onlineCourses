
@extends('layouts.panel')
@section('admins')
    active
@endsection
@section('new_admin')
    active
@endsection
@section('title')
    ساخت مطلب جدید
@endsection
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">مطلب جدید</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-6 jumbotron  ">
                        <form action="{{route('post.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">عنوان</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="عنوان مطلب را وارد نمایید" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">محتوا</label>
                                <input type="text" class="form-control @error('content') is-invalid @enderror" value="{{old('content')}}" name="content" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="محتوا" required>
                            </div>




                            <button type="submit" class="btn btn-primary">ایجاد</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
