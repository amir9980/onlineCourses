
@extends('layouts.panel')
@section('admins')
    active
@endsection
@section('new_admin')
    active
@endsection
@section('title')
    تنظیمات
@endsection
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">تنظیمات</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card custom-card">
                    <div class="card-body">
                        <a href="{{route('settings.create')}}" class="btn btn-primary mb-3" >ایجاد تنظیمات جدید</a>
                        <table id="table" class="table table-bordered table-striped text-center ">
                            <thead>
                            <tr>
                                <th>نام</th>
                                <th>نوع</th>
                                <th>گروه</th>
                                <th>مقدار</th>
                                <th>تاریخ ایجاد</th>
                                <th>عملیات</th>

                            </tr>
                            </thead>
                            <tbody >
                            @foreach ($settings as $setting)

                                <tr>
                                    <td>
                                        {{$setting->name}}
                                    </td>


                                    <td>
                                        {{$setting->type}}
                                    </td>
                                    <td >
                                        {{$groupName}}
                                    </td>
                                    <td >
                                        {{$setting->value}}

                                    </td>
                                    <td >
                                        {{$setting->created_at}}

                                    </td>

                                    <td class="text-center">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-sliders-h"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <button type="button" class="btn btn-success dropdown-item" data-toggle="modal" data-target="#modal-edit{{$setting->id}}" ><i  class="fas fa-user-edit"></i> ویرایش</button>
                                        </div>
                                    </td>

                                </tr>


                                <div class="modal fade" id="modal-edit{{$setting->id}}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">ویرایش تنظیمات</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- form start -->
                                                <form  method="POST" action="{{route('settings.update',$setting->id)}}"  enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PATCH')
                                                    <input type="hidden" name="id" value="{{$setting->id}}">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">نام</label>
                                                            <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name" required value="{{$setting->name}}" required>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">مقدار جدید</label>
                                                            <input name="value" type="text" class="form-control" id="exampleInputPassword1" placeholder="مقدار جدید">
                                                        </div>



                                                    </div>
                                                    <!-- /.card-body -->

                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary">ویرایش</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>






                            @endforeach

                            </tbody>


                        </table>

                    </div>
                </div>
            </div>
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
