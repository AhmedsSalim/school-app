@extends('website.layouts.app')
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    <style>
        .div-image img {
            transition: transform 0.3s ease-in-out;
        }
        .div-image img:hover {
            transform: scale(1.1);
            cursor: pointer;
        }

        #myImg {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        #myImg:hover {
            opacity: 0.7;
        }
    </style>
@endsection
@section('content')
    <div dir="rtl" class="container">
        <h3>المعرض</h3>
        <div class="card" style="box-shadow: 0 0 15px -5px;">
            {{-- start card-content --}}
            <div class="card-content">
                <div class="header-page p-4">
                    <h4>العام الدراسي : 2024/2023</h4><hr>
                    {{-- start sub-content --}}
                    <div class="sub-content m-5">
                        <div class="header-sub-content">
                            <h5 class="text-center mb-4">متحف شرطة المربعة</h5>
                        </div>
                        <div class="card-images">
                            <div class="row">
                                <div class="col col-md-3 col-sm-6 col-12">
                                    <div class="div-image mb-3" style="box-shadow: 0 0 15px -5px;">
                                        <a href="{{asset('img/partie/101.jpg')}}" data-fancybox="container-101" data-caption="تفاصيل الصورة">
                                            <img class="rounded" height="200px" width="100%" src="{{asset('img/partie/101.jpg')}}" alt="تفاصيل الصورة 1">
                                        </a>
                                    </div>
                                </div>
                                <div class="col col-md-3 col-sm-6 col-12">
                                    <div class="div-image mb-3" style="box-shadow: 0 0 15px -5px;">
                                        <a href="{{asset('img/partie/102.jpg')}}" data-fancybox="container-101" data-caption="تفاصيل الصورة">
                                            <img class="rounded" height="200px" width="100%" src="{{asset('img/partie/102.jpg')}}" alt="تفاصيل الصورة 2">
                                        </a>
                                    </div>
                                </div>
                                <div class="col col-md-3 col-sm-6 col-12">
                                    <div class="div-image mb-3" style="box-shadow: 0 0 15px -5px;">
                                        <a href="{{asset('img/partie/103.jpg')}}" data-fancybox="container-101" data-caption="تفاصيل الصورة">
                                            <img class="rounded" height="200px" width="100%" src="{{asset('img/partie/103.jpg')}}" alt="تفاصيل الصورة 3">
                                        </a>
                                    </div>
                                </div>
                                <div class="col col-md-3 col-sm-6 col-12">
                                    <div class="div-image mb-3" style="box-shadow: 0 0 15px -5px;">
                                        <a href="{{asset('img/partie/104.jpg')}}" data-fancybox="container-101" data-caption="تفاصيل الصورة">
                                            <img class="rounded" height="200px" width="100%" src="{{asset('img/partie/104.jpg')}}" alt="تفاصيل الصورة 4">
                                        </a>
                                    </div>
                                </div>
                                <div class="col col-md-3 col-sm-6 col-12">
                                    <div class="div-image mb-3" style="box-shadow: 0 0 15px -5px;">
                                        <a href="{{asset('img/partie/105.jpg')}}" data-fancybox="container-101" data-caption="تفاصيل الصورة">
                                            <img class="rounded" height="200px" width="100%" src="{{asset('img/partie/105.jpg')}}" alt="تفاصيل الصورة 4">
                                        </a>
                                    </div>
                                </div>
                                <div class="col col-md-3 col-sm-6 col-12">
                                    <div class="div-image mb-3" style="box-shadow: 0 0 15px -5px;">
                                        <a href="{{asset('img/partie/106.jpg')}}" data-fancybox="container-101" data-caption="تفاصيل الصورة">
                                            <img class="rounded" height="200px" width="100%" src="{{asset('img/partie/106.jpg')}}" alt="تفاصيل الصورة 4">
                                        </a>
                                    </div>
                                </div>
                                <div class="col col-md-3 col-sm-6 col-12">
                                    <div class="div-image mb-3" style="box-shadow: 0 0 15px -5px;">
                                        <a href="{{asset('img/partie/107.jpg')}}" data-fancybox="container-101" data-caption="تفاصيل الصورة">
                                            <img class="rounded" height="200px" width="100%" src="{{asset('img/partie/107.jpg')}}" alt="تفاصيل الصورة 4">
                                        </a>
                                    </div>
                                </div>
                                <div class="col col-md-3 col-sm-6 col-12">
                                    <div class="div-image mb-3" style="box-shadow: 0 0 15px -5px;">
                                        <a href="{{asset('img/partie/108.jpg')}}" data-fancybox="container-101" data-caption="تفاصيل الصورة">
                                            <img class="rounded" height="200px" width="100%" src="{{asset('img/partie/108.jpg')}}" alt="تفاصيل الصورة 4">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    {{-- end sub-content --}}
                    {{-- start sub-content --}}
                    <div class="sub-content m-5">
                        <div class="header-sub-content">
                            <h4 class="text-center mb-4">متحف</h4>
                        </div>
                        <div class="card-images">
                            <div class="row">
                                <div class="col col-md-3 col-sm-6 col-12">
                                    <div class="div-image mb-3" style="box-shadow: 0 0 15px -5px;">
                                        <a href="{{asset('img/partie/201.jpg')}}" data-fancybox="container-2" data-caption="تفاصيل الصورة">
                                            <img class="rounded" height="200px" width="100%" src="{{asset('img/partie/201.jpg')}}" alt="تفاصيل الصورة 5">
                                        </a>
                                    </div>
                                </div>
                                <div class="col col-md-3 col-sm-6 col-12">
                                    <div class="div-image mb-3" style="box-shadow: 0 0 15px -5px;">
                                        <a href="{{asset('img/partie/202.jpg')}}" data-fancybox="container-2" data-caption="تفاصيل الصورة">
                                            <img class="rounded" height="200px" width="100%" src="{{asset('img/partie/202.jpg')}}" alt="تفاصيل الصورة 6">
                                        </a>
                                    </div>
                                </div>
                                <div class="col col-md-3 col-sm-6 col-12">
                                    <div class="div-image mb-3" style="box-shadow: 0 0 15px -5px;">
                                        <a href="{{asset('img/partie/203.jpg')}}" data-fancybox="container-2" data-caption="تفاصيل الصورة">
                                            <img class="rounded" height="200px" width="100%" src="{{asset('img/partie/203.jpg')}}" alt="تفاصيل الصورة 7">
                                        </a>
                                    </div>
                                </div>
                                <div class="col col-md-3 col-sm-6 col-12">
                                    <div class="div-image mb-3" style="box-shadow: 0 0 15px -5px;">
                                        <a href="{{asset('img/partie/204.jpg')}}" data-fancybox="container-2" data-caption="تفاصيل الصورة">
                                            <img class="rounded" height="200px" width="100%" src="{{asset('img/partie/204.jpg')}}" alt="تفاصيل الصورة 8">
                                        </a>
                                    </div>
                                </div>
                                <div class="col col-md-3 col-sm-6 col-12">
                                    <div class="div-image mb-3" style="box-shadow: 0 0 15px -5px;">
                                        <a href="{{asset('img/partie/205.jpg')}}" data-fancybox="container-2" data-caption="تفاصيل الصورة">
                                            <img class="rounded" height="200px" width="100%" src="{{asset('img/partie/205.jpg')}}" alt="تفاصيل الصورة 8">
                                        </a>
                                    </div>
                                </div>
                                <div class="col col-md-3 col-sm-6 col-12">
                                    <div class="div-image mb-3" style="box-shadow: 0 0 15px -5px;">
                                        <a href="{{asset('img/partie/206.jpg')}}" data-fancybox="container-2" data-caption="تفاصيل الصورة">
                                            <img class="rounded" height="200px" width="100%" src="{{asset('img/partie/206.jpg')}}" alt="تفاصيل الصورة 8">
                                        </a>
                                    </div>
                                </div>
                                <div class="col col-md-3 col-sm-6 col-12">
                                    <div class="div-image mb-3" style="box-shadow: 0 0 15px -5px;">
                                        <a href="{{asset('img/partie/207.jpg')}}" data-fancybox="container-2" data-caption="تفاصيل الصورة">
                                            <img class="rounded" height="200px" width="100%" src="{{asset('img/partie/207.jpg')}}" alt="تفاصيل الصورة 8">
                                        </a>
                                    </div>
                                </div>
                                <div class="col col-md-3 col-sm-6 col-12">
                                    <div class="div-image mb-3" style="box-shadow: 0 0 15px -5px;">
                                        <a href="{{asset('img/partie/208.jpg')}}" data-fancybox="container-2" data-caption="تفاصيل الصورة">
                                            <img class="rounded" height="200px" width="100%" src="{{asset('img/partie/208.jpg')}}" alt="تفاصيل الصورة 8">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    {{-- end sub-content --}}

                </div>
            </div>
            {{-- end card-content --}}
            {{-- start card-content --}}
            <div class="card-content">
                <div class="header-page p-4">
                    <h4>العام الدراسي : 2022/2023</h4><hr>
                    {{-- start sub-content --}}
                    <div class="sub-content m-5">
                        <div class="header-sub-content">
                            <h5 class="text-center mb-4">إحتفال</h5>
                        </div>
                        <div class="card-images">
                            <div class="row">
                                <div class="col col-md-3 col-sm-6 col-12">
                                    <div class="div-image mb-3" style="box-shadow: 0 0 15px -5px;">
                                        <a href="{{asset('img/partie/1.jpg')}}" data-fancybox="container-1" data-caption="تفاصيل الصورة">
                                            <img class="rounded" height="200px" width="100%" src="{{asset('img/partie/1.jpg')}}" alt="تفاصيل الصورة 1">
                                        </a>
                                    </div>
                                </div>
                                <div class="col col-md-3 col-sm-6 col-12">
                                    <div class="div-image mb-3" style="box-shadow: 0 0 15px -5px;">
                                        <a href="{{asset('img/partie/2.jpg')}}" data-fancybox="container-1" data-caption="تفاصيل الصورة">
                                            <img class="rounded" height="200px" width="100%" src="{{asset('img/partie/2.jpg')}}" alt="تفاصيل الصورة 2">
                                        </a>
                                    </div>
                                </div>
                                <div class="col col-md-3 col-sm-6 col-12">
                                    <div class="div-image mb-3" style="box-shadow: 0 0 15px -5px;">
                                        <a href="{{asset('img/partie/3.jpg')}}" data-fancybox="container-1" data-caption="تفاصيل الصورة">
                                            <img class="rounded" height="200px" width="100%" src="{{asset('img/partie/3.jpg')}}" alt="تفاصيل الصورة 3">
                                        </a>
                                    </div>
                                </div>
                                <div class="col col-md-3 col-sm-6 col-12">
                                    <div class="div-image mb-3" style="box-shadow: 0 0 15px -5px;">
                                        <a href="{{asset('img/partie/4.jpg')}}" data-fancybox="container-1" data-caption="تفاصيل الصورة">
                                            <img class="rounded" height="200px" width="100%" src="{{asset('img/partie/4.jpg')}}" alt="تفاصيل الصورة 4">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    {{-- end sub-content --}}
                    {{-- start sub-content --}}
                    <div class="sub-content m-5">
                        <div class="header-sub-content">
                            <h4 class="text-center mb-4">الاحتفال باليوم الوطني لدولة الإمارات العربية المتحدة</h4>
                        </div>
                        <div class="card-images">
                            <div class="row">
                                <div class="col col-md-3 col-sm-6 col-12">
                                    <div class="div-image mb-3" style="box-shadow: 0 0 15px -5px;">
                                        <a href="{{asset('img/partie/5.jpg')}}" data-fancybox="container-2" data-caption="تفاصيل الصورة">
                                            <img class="rounded" height="200px" width="100%" src="{{asset('img/partie/5.jpg')}}" alt="تفاصيل الصورة 5">
                                        </a>
                                    </div>
                                </div>
                                <div class="col col-md-3 col-sm-6 col-12">
                                    <div class="div-image mb-3" style="box-shadow: 0 0 15px -5px;">
                                        <a href="{{asset('img/partie/6.jpg')}}" data-fancybox="container-2" data-caption="تفاصيل الصورة">
                                            <img class="rounded" height="200px" width="100%" src="{{asset('img/partie/6.jpg')}}" alt="تفاصيل الصورة 6">
                                        </a>
                                    </div>
                                </div>
                                <div class="col col-md-3 col-sm-6 col-12">
                                    <div class="div-image mb-3" style="box-shadow: 0 0 15px -5px;">
                                        <a href="{{asset('img/partie/7.jpg')}}" data-fancybox="container-2" data-caption="تفاصيل الصورة">
                                            <img class="rounded" height="200px" width="100%" src="{{asset('img/partie/7.jpg')}}" alt="تفاصيل الصورة 7">
                                        </a>
                                    </div>
                                </div>
                                <div class="col col-md-3 col-sm-6 col-12">
                                    <div class="div-image mb-3" style="box-shadow: 0 0 15px -5px;">
                                        <a href="{{asset('img/partie/8.jpg')}}" data-fancybox="container-2" data-caption="تفاصيل الصورة">
                                            <img class="rounded" height="200px" width="100%" src="{{asset('img/partie/8.jpg')}}" alt="تفاصيل الصورة 8">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    {{-- end sub-content --}}

                </div>
            </div>
            {{-- end card-content --}}
            {{-- start card-content --}}
            <div class="card-content">
                <div class="header-page p-4">
                    <h4>العام الدراسي : 2021/2022</h4><hr>
                    {{-- start sub-content --}}
                    <div class="sub-content m-5">
                        <div class="header-sub-content">
                            <h5 class="text-center mb-4">الإحتفال بتخرج طلابنا</h5>
                        </div>
                        <div class="card-images">
                            <div class="row">
                                <div class="col col-md-3 col-sm-6 col-12">
                                    <div class="div-image mb-3" style="box-shadow: 0 0 15px -5px;">
                                        <a href="{{asset('img/partie/9.jpg')}}" data-fancybox="container-3" data-caption="تفاصيل الصورة">
                                            <img class="rounded" height="200px" width="100%" src="{{asset('img/partie/9.jpg')}}" alt="تفاصيل الصورة 9">
                                        </a>
                                    </div>
                                </div>
                                <div class="col col-md-3 col-sm-6 col-12">
                                    <div class="div-image mb-3" style="box-shadow: 0 0 15px -5px;">
                                        <a href="{{asset('img/partie/10.jpg')}}" data-fancybox="container-3" data-caption="تفاصيل الصورة">
                                            <img class="rounded" height="200px" width="100%" src="{{asset('img/partie/10.jpg')}}" alt="تفاصيل الصورة 10">
                                        </a>
                                    </div>
                                </div>
                                <div class="col col-md-3 col-sm-6 col-12">
                                    <div class="div-image mb-3" style="box-shadow: 0 0 15px -5px;">
                                        <a href="{{asset('img/partie/11.jpg')}}" data-fancybox="container-3" data-caption="تفاصيل الصورة">
                                            <img class="rounded" height="200px" width="100%" src="{{asset('img/partie/11.jpg')}}" alt="تفاصيل الصورة 11">
                                        </a>
                                    </div>
                                </div>
                                <div class="col col-md-3 col-sm-6 col-12">
                                    <div class="div-image mb-3" style="box-shadow: 0 0 15px -5px;">
                                        <a href="{{asset('img/partie/12.jpg')}}" data-fancybox="container-3" data-caption="تفاصيل الصورة">
                                            <img class="rounded" height="200px" width="100%" src="{{asset('img/partie/12.jpg')}}" alt="تفاصيل الصورة 12">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    {{-- end sub-content --}}
                    {{-- start sub-content --}}
                    <div class="sub-content m-5">
                        <div class="header-sub-content">
                            <h5 class="text-center mb-4">الإحتفال بشهر رمضان المبارك</h5>
                        </div>
                        <div class="card-images">
                            <div class="row">
                                <div class="col col-md-3 col-sm-6 col-12">
                                    <div class="div-image mb-3" style="box-shadow: 0 0 15px -5px;">
                                        <a href="{{asset('img/partie/12.jpg')}}" data-fancybox="container-4" data-caption="تفاصيل الصورة">
                                            <img class="rounded" height="200px" width="100%" src="{{asset('img/partie/12.jpg')}}" alt="تفاصيل الصورة 12">
                                        </a>
                                    </div>
                                </div>
                                <div class="col col-md-3 col-sm-6 col-12">
                                    <div class="div-image mb-3" style="box-shadow: 0 0 15px -5px;">
                                        <a href="{{asset('img/partie/13.jpg')}}" data-fancybox="container-4" data-caption="تفاصيل الصورة">
                                            <img class="rounded" height="200px" width="100%" src="{{asset('img/partie/13.jpg')}}" alt="تفاصيل الصورة 13">
                                        </a>
                                    </div>
                                </div>
                                <div class="col col-md-3 col-sm-6 col-12">
                                    <div class="div-image mb-3" style="box-shadow: 0 0 15px -5px;">
                                        <a href="{{asset('img/partie/14.jpg')}}" data-fancybox="container-4" data-caption="تفاصيل الصورة">
                                            <img class="rounded" height="200px" width="100%" src="{{asset('img/partie/14.jpg')}}" alt="تفاصيل الصورة 14">
                                        </a>
                                    </div>
                                </div>
                                <div class="col col-md-3 col-sm-6 col-12">
                                    <div class="div-image mb-3" style="box-shadow: 0 0 15px -5px;">
                                        <a href="{{asset('img/partie/15.jpg')}}" data-fancybox="container-4" data-caption="تفاصيل الصورة">
                                            <img class="rounded" height="200px" width="100%" src="{{asset('img/partie/15.jpg')}}" alt="تفاصيل الصورة 15">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    {{-- end sub-content --}}

                </div>
            </div>
            {{-- end card-content --}}
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script>
        $('[data-fancybox]').fancybox({
            loop : true
        });
    </script>
@endsection
