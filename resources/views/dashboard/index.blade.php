@extends('dashboard.layouts.master')
@section('css')

@section('title')
    empty
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
                <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">slide</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <p>الصفحه الرئيسيه<br><br>
                    
                      
                        <a class="btn btn-primary" href="#" role="button">اضافه جديده</a>
    
                    <br>
                    </p>
                
                
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">الجمله الاولي</th>
                            <th scope="col">الجمله الثانيه</th>
                            <th scope="col">الصور</th>
                            <th scope="col">العمليات</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>مرحبا بكم في مدرسة لبنان الخاصه</td>
                            <td>إذا كنت تبحث عن مدرسة توفر لطفلك تعليمًا عالي الجودة، فنحن ندعوك للانضمام إلى مجتمعنا</td>
                            <td><img src="img/لبنان2.jpg" alt="" style="width: 100px;
                                height: 50px;
                                border-radius: 20%;
                            }"></td>
                            <td>
                                <a class="btn btn-success" href="#" role="button">تعديل</a>
                                <a class="btn btn-danger" href="#" role="button">حذف</a>
                            
                            </td>
                          </tr>
                         
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
