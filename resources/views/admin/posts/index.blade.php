
@extends('layouts.panel')
@section('admins')
    active
@endsection
@section('admins_list')
    active
@endsection
@section('title','مطلب ها')
@section('content')

    <!-- Page Header -->
    <div class="page-header">
        <div>
            <h2 class="main-content-title tx-24 mg-b-5"> مدیریت </h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">خانه</a></li>
                <li class="breadcrumb-item active" aria-current="page">مطلب ها</li>
            </ol>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-12">
            <div class="card custom-card">
                <div class="card-body">
                    <a href="{{route('post.create')}}" class="btn btn-primary mb-3" >ایجاد مطلب جدید</a>
                    <table id="table" class="table table-bordered table-striped text-center ">
                        <thead>
                        <tr>

                            <th>عنوان</th>
                            <th>نویسنده</th>
                            <th>تاریخ ثبت</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <tbody >
                        @foreach ($posts as $post)
                            <tr>
                                <td>
                                    {{$post->title}}
                                </td>

                                <td>
                                    {{$post->author->name}}
                                </td>
                                <td>{{$post->created_at}}</td>


                                <td class="text-center">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-sliders-h"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                        <button type="button" class="btn btn-success dropdown-item" data-toggle="modal" data-target="#modal-edit{{$post->id}}" ><i  class="fas fa-user-edit"></i> ویرایش </button>
                                        <button type="button" class="dropdown-item" data-toggle="modal" data-target="#modal-delete{{$post->id}}" ><i style="color:red" class="fas fa-user-minus"></i> حذف </button>
                                    </div>
                                </td>


                            </tr>



                        @endforeach

                        @foreach ($posts as $post)

                            <!-- Delete Modal -->
                            <div class="modal fade" id="modal-delete{{$post->id}}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">حذف مطلب</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <h5>آیا در حذف مطلب  `{{$post->title}}` مطمین هستید؟ </h5>
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <form action="{{route('post.destroy',$post->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">حذف</button>

                                            </form>

                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->

                            <!-- Change Modal -->

                            <div class="modal fade" id="modal-edit{{$post->id}}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">ویرایش مطلب</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- form start -->
                                            <form  method="POST" action="{{route('post.update',$post->id)}}"  enctype="multipart/form-data">
                                                @csrf
                                                @method('PATCH')
                                                <input type="hidden" name="id" value="{{$post->id}}">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">عنوان</label>
                                                        <input name="title" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter title" required value="{{$post->title}}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">محتوا</label>
                                                        <input name="content" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter content" required value="{{$post->content}}" required>
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

                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
