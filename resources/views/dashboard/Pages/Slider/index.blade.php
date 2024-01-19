@extends('dashboard.layouts.master')
@section('css')

@section('title')
    لوحة تحكم مدرسة لبنان
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0" style="color: green"> مدرسة لبنان الاولي</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">الرئيسية</a></li>
                <li class="breadcrumb-item active">شريط التمرير</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="col-xl-12 mb-30">     
        <div class="card card-statistics h-100"> 
            <div class="card-body">

                <a href="" type="button" class="btn btn-success">إضافة</a>
                <br><br>

                <div class="table-responsive ">
                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
                        style="text-align: center">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>العنوان</th>
                            <th>النص</th>
                            <th>الصورة</th>
                            <th>العمليات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($sliders as $slider)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $slider->header }}</td>
                                <td>{{ $slider->body }}</td>
                                <td>{{ $slider->image}}</td>
                                <td>
                                    <button class="btn btn-primary">التعديل</button>
                                    <button class="btn btn-danger">الحذف</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection
@section('js')

@endsection
