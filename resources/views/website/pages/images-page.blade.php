@extends('website.layouts.app')
@section('styles')
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

    #myImg:hover {opacity: 0.7;}

    /* The Modal (background) */
    .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
    }

    /* Modal Content (image) */
    .modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    }

    /* Caption of Modal Image */
    #caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
    }

    /* Add Animation */
    .modal-content, #caption {  
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
    }

    @-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
    }

    @keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
    }

    /* The Close Button */
    .close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
    }

    .close:hover,
    .close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
    }

    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
    }

    .prev, .next {
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -22px;
        color: white;
        font-weight: bold;
        font-size: 24px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        cursor: pointer;
    }

    .prev {
        left: 0;
        background-color: transparent;
        border: none;
    }

    .next {
        right: 0;
        background-color: transparent;
        border: none;
    }

    .prev:hover, .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
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
                                        <img class="rounded" width="100%" src="{{asset('img/partie/1.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="col col-md-3 col-sm-6 col-12">
                                    <div class="div-image mb-3" style="box-shadow: 0 0 15px -5px;">
                                        <img class="rounded" width="100%" src="{{asset('img/partie/2.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="col col-md-3 col-sm-6 col-12">
                                    <div class="div-image mb-3" style="box-shadow: 0 0 15px -5px;">
                                        <img class="rounded" width="100%" src="{{asset('img/partie/3.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="col col-md-3 col-sm-6 col-12">
                                    <div class="div-image mb-3" style="box-shadow: 0 0 15px -5px;">
                                        <img class="rounded" width="100%" src="{{asset('img/partie/4.jpg')}}" alt="">
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
                                        <img class="rounded" width="100%" src="{{asset('img/partie/5.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="col col-md-3 col-sm-6 col-12">
                                    <div class="div-image mb-3" style="box-shadow: 0 0 15px -5px;">
                                        <img class="rounded" width="100%" src="{{asset('img/partie/6.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="col col-md-3 col-sm-6 col-12">
                                    <div class="div-image mb-3" style="box-shadow: 0 0 15px -5px;">
                                        <img class="rounded" width="100%" src="{{asset('img/partie/7.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="col col-md-3 col-sm-6 col-12">
                                    <div class="div-image mb-3" style="box-shadow: 0 0 15px -5px;">
                                        <img class="rounded" width="100%" src="{{asset('img/partie/8.jpg')}}" alt="">
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
                                        <img class="rounded" width="100%" src="{{asset('img/partie/9.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="col col-md-3 col-sm-6 col-12">
                                    <div class="div-image mb-3" style="box-shadow: 0 0 15px -5px;">
                                        <img class="rounded" width="100%" src="{{asset('img/partie/10.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="col col-md-3 col-sm-6 col-12">
                                    <div class="div-image mb-3" style="box-shadow: 0 0 15px -5px;">
                                        <img class="rounded" width="100%" src="{{asset('img/partie/11.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="col col-md-3 col-sm-6 col-12">
                                    <div class="div-image mb-3" style="box-shadow: 0 0 15px -5px;">
                                        <img class="rounded" width="100%" src="{{asset('img/partie/12.jpg')}}" alt="">
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
                                        <img class="rounded" width="100%" src="{{asset('img/partie/12.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="col col-md-3 col-sm-6 col-12">
                                    <div class="div-image mb-3" style="box-shadow: 0 0 15px -5px;">
                                        <img class="rounded" width="100%" src="{{asset('img/partie/13.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="col col-md-3 col-sm-6 col-12">
                                    <div class="div-image mb-3" style="box-shadow: 0 0 15px -5px;">
                                        <img class="rounded" width="100%" src="{{asset('img/partie/14.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="col col-md-3 col-sm-6 col-12">
                                    <div class="div-image mb-3" style="box-shadow: 0 0 15px -5px;">
                                        <img class="rounded" width="100%" src="{{asset('img/partie/15.jpg')}}" alt="">
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
<!-- The Modal -->
<div id="myModal" style="z-index: 10000" class="modal">
    <span class="close">&times;</span>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <img class="modal-content" id="img01">
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    <div id="caption"></div>
  </div>
  
  @endsection
  
  @section('scripts')
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script>
  let imagesArray = [];
  let clickedImageSrc = '';
  let currentIndex = 0;
  var modal = $("#myModal");
  
  $('.card-images img').on('click', function() {
      clickedImageSrc = $(this).attr('src');
  
      let images = $(this).parent().parent().parent().parent().find('img');
      images.each(function(index, element) {
          imagesArray.push($(element).attr('src'));
      });
      var modalImg = $("#img01");
  
      modal.css("display", "block");
      modalImg.attr("src", clickedImageSrc);
      currentIndex = imagesArray.indexOf(clickedImageSrc);
  });
  
  var span = $(".close");
  span.on("click", function() {
      modal.css("display", "none");
      imagesArray = [];
  });
  
  function plusSlides(n) {
      currentIndex += n;
      if (currentIndex >= imagesArray.length) {
          currentIndex = 0;
      } else if (currentIndex < 0) {
          currentIndex = imagesArray.length - 1;
      }
      $("#img01").attr("src", imagesArray[currentIndex]);
  }
  </script>
  
@endsection