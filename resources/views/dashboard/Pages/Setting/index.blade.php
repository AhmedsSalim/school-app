@extends('dashboard.layouts.master')
@section('css')
    
@section('title')
    الاعدادات
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    الاعدادات
@stop
<!-- breadcrumb -->
@endsection
@section('content')


    @if(session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('error') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif


<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <form enctype="multipart/form-data" method="post" action="{{route('settings.update','test')}}">
                    @csrf 
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6 border-right-2 border-right-blue-400">
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label font-weight-semibold">اسم المدرسة<span class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <input name="name" value="{{ $setting->name }}" required type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name of School">
                                    @error('name')
                                    <span class="text-danger d-block float-right">{{$message}}</span>
                                    @enderror
                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label font-weight-semibold">البريد الالكتروني<span class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <input name="email" value="{{ $setting->email }}" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="School Email">
                                    @error('email')
                                    <span class="text-danger d-block float-right">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label font-weight-semibold">عنوان المدرسة<span class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <input required name="address" value="{{ $setting->address }}" type="text" class="form-control @error('address') is-invalid @enderror" placeholder="School Address">
                                    @error('address')
                                    <span class="text-danger d-block float-right">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label font-weight-semibold">الهاتف<span class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <input name="phone" value="{{ $setting->phone}}" type="text" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone">
                                    @error('phone')
                                    <span class="text-danger d-block float-right">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label font-weight-semibold">شعار المدرسة<span class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <div class="mb-3">
                                        <img style="width: 100px" height="100px" src="{{ URL::asset('storage/'.$setting->logo)}}" alt="">
                                    </div>
                                    <input name="logo" accept="image/*" type="file" class="file-input" data-show-caption="false" data-show-upload="false" data-fouc>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">حفظ</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')
@endsection