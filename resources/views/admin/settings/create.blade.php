
@extends('layouts.panel')
@section('admins')
    active
@endsection
@section('new_admin')
    active
@endsection
@section('title')
    ساخت تنظیمات جدید
@endsection
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">تنظیمات جدید</h1>
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
                        <form action="{{route('settings.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">نام</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="نام تنظیمات را وارد نمایید" required>
                            </div>

                            <div class="form-group">
                                <label for="description">توضیحات</label>
                                <input type="text" class="form-control @error('description') is-invalid @enderror" value="{{old('description')}}" name="description" aria-describedby="emailHelp" placeholder="توضیحات" required>
                            </div>

                            <div class="form-group">
                                <label for="value">مقدار</label>
                                <input type="text" class="form-control @error('value') is-invalid @enderror" value="{{old('value')}}" name="value" aria-describedby="emailHelp" placeholder="مقدار" required>
                            </div>

                            <div class="form-group">
                                <label for="group">انتخاب گروه</label>
                                <select class="form-control" name="group" id="group">
                                    <option value="0"  selected disabled>انتخاب گروه</option>
                                    @foreach(\App\Models\SettingGroup::all() as $group)
                                        <option value="{{$group->id}}">{{$group->name}}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="type">انتخاب نوع</label>
                                <select class="form-control" name="type" id="type">
                                    <option value="0"  selected disabled>انتخاب نوع</option>
                                    @foreach($types as $type)
                                        <option value="{{$type}}">{{$type}}</option>
                                    @endforeach
                                </select>
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
