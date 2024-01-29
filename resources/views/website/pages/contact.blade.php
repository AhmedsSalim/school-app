@extends('website.layouts.app')
@section('styles')
    <style>
        
    </style>
@endsection
@section('content')
    <div class="container">
        <div dir="rtl" class="row justify-content-center align-items-center g-2">
            <div class="col-12">
                <iframe class="mt-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3639.247561880867!2d55.72164152409292!3d24.198107771440327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e8ab141e43cdea5%3A0xd147c426f365010e!2sFirst%20Lebanon%20School!5e0!3m2!1sar!2seg!4v1706537189031!5m2!1sar!2seg" width="100%" height="300" style="box-shadow: 0 0 10px -3px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-6 col-sm-12">
                <div id="first-div" class="card p-3 mt-5 m-3" style="box-shadow: 0 0 10px -3px;">
                    <form>
                        <h3 class="text-center">نموزج الإتصال</h3>
                        <div class="form-group mb-3">
                            <label class="mb-1" for="exampleInputEmail1">الإسم</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            @error('name')
                                <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                            @enderror                        </div>
                        <div class="form-group mb-3">
                            <label class="mb-1" for="exampleInputEmail1">رقم الإتصال</label>
                            <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            @error('phone')
                                <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="mb-1" for="exampleInputEmail1">عنوان البريد الإلكترونى</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            @error('email')
                                <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                            @enderror                        </div>
                        <div class="form-group mb-3">
                            <label class="mb-1" name="message" for="exampleFormControlTextarea1">رسالة</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            @error('message')
                                <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">إرسال</button>
                    </form>
                </div>

            </div>
            <div class="col-md-6 col-sm-12">
                <div id="second-div" class="card p-3 mt-5 m-3" style="box-shadow: 0 0 10px -3px;">
                    <h3 class="text-center mb-3">تفاصيل المدرسة</h3>
                    <div class="parent mb-3">
                        <h4>ساعات الدوام الدراسي</h4>
                        <div class="child-content me-3">
                            <span style="font-weight: inherit; color:#103741">الإثنين - الخميس: </span><span >7:30 صباحا – 3:30 مساء</span><br>
                            <span style="font-weight: inherit; color:#103741" >الجمعة: </span><span> 7:30 صباحا – 12:30 ظهرا</span>
                        </div>
                    </div>
                    <div class="parent mb-3">
                        <h4>العنوان</h4>
                        <div class="child-content me-3">
                            <span>العين - فلج هزاع - شارع المدارس</span><br>
                            <span style="font-weight: inherit; color:#103741">صندوق البريد: </span><span>64997</span>
                        </div>
                    </div>
                    <div class="parent mb-3">
                        <h4>البريد الإلكتروني</h4>
                        <div class="child-content me-3">
                            <span>firstlebanon1981@yahoo.com</span>
                        </div>
                    </div>
                    <div class="parent mb-3">
                        <h4>رقم التواصل / واتساب</h4>
                        <div class="child-content me-3">
                            <span>+971 3 780 6780</span>
                        </div>
                    </div>
                </div>
        </div>
        
    </div>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function() {
      var firstDivHeight = $("#first-div").height();
  
      $("#second-div").height(firstDivHeight);
    });
  </script>
@endsection