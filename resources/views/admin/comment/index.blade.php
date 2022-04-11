
@extends('layouts.panel')
@section('admins')
    active
@endsection
@section('admins_list')
    active
@endsection
@section('title','نظرات')
@section('content')

    <!-- Page Header -->
    <div class="page-header">
        <div>
            <h2 class="main-content-title tx-24 mg-b-5"> مدیریت </h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">خانه</a></li>
                <li class="breadcrumb-item active" aria-current="page">نظرات</li>
            </ol>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-12">
            <div class="card custom-card">
                <div class="card-body">

                    <table id="table" class="table table-bordered table-striped text-center ">
                        <thead>
                        <tr>
                            <th>تاریخ ثبت</th>
                            <th>محتوا</th>
                            <th>نویسنده</th>
                            <th>مطلب</th>
                            <th>تایید شده</th>

                        </tr>
                        </thead>
                        <tbody >
                        @foreach ($comments as $comment)
                            <tr>
                                <td>
                                    {{$comment->created_at}}
                                </td>

                                <td>
                                    {{$comment->content}}
                                </td>
                                <td>{{$comment->user->name}}</td>
                                <td>{{$comment->course->title}}</td>
                                <td>{{$comment->is_accepted}}</td>





                            </tr>



                        @endforeach


                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
