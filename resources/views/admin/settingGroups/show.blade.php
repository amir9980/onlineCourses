
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
                            </tr>
                            </thead>
                            <tbody >
                            @foreach (\App\Models\Setting::where('setting_group_id',$groupId) as $setting)
                                <tr>
                                    <td>
                                        {{$setting->name}}
                                    </td>


                                    <td>
                                        {{$setting->type}}
                                    </td>
                                    <td >
                                        {{\App\Models\SettingGroup::where('id',$groupId)->name}}

                                    </td>
                                    <td >
                                        {{$setting->value}}

                                    </td>
                                    <td >
                                        {{$setting->created_at}}

                                    </td>

                                </tr>





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
