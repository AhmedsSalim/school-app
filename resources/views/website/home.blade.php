@extends('website.layouts.app')
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/themes/odometer-theme-default.min.css">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<style>
    .cover {
        background: url("{{asset('img/لبنان2.jpg')}}") center/cover no-repeat;
        background: cover;
        height: 400px; 
        display: flex;
        justify-content: center;
        position: relative
    }

    .cover::before {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: rgba(0, 0, 0, 0.5); /* لون أسود مع شفافية 50% */
        z-index: 1; /* يضمن أن يظهر فوق الصورة */
    }
    .cover .card {
        position: absolute;
        bottom: -30%;
        width: 60%;
        border-radius: 0% !important;
        z-index:2;
    }

    .paragraph {
        font-family: "IBM Plex Sans Arabic", sans-serif;
        font-weight: 700;
        font-style: normal;
        
    }
</style>

    <style>
    /* Styles for the slider container */
    #container-slider{
        position: relative;
        overflow: hidden;
    }

    /* Styles for the carousel container */
    #carousel {
        display: flex;
        overflow: hidden;
        position: relative;
    }

    /* Styles for the carousel items */
    #carousel img {
        margin: 0 10px; /* Add space between items */
        transition: transform 0.3s ease-in-out; /* Add smooth transition effect */
    }

    /* Styles for the prev and next links */
    #prev,
    #next {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        font-size: 18px;
        color: #333;
        text-decoration: none;
    }

    #prev {
        left: 10px;

    }

    #next {
        right: 10px;

    }
</style>

{{-- <link type="text/css" rel="stylesheet/less" href="{{asset('scss/style.scss')}}"> --}}
<link rel="stylesheet" href="https://unpkg.com/swiper@6.0.2/swiper-bundle.min.css">
<style lang="scss">

        $base-font			: 'Montserrat', sans-serif;
        $base-color-font  : #fff;
        $base-size-font   : 14px;
        $base-weight-font	: 400;

        .hide{display: none!important}

        $primary-color 	: #ed1b28;
        $secondary-color	: #2b2c36;

        body{
            margin: 0;
            font-family: $base-font;
            font-size: $base-size-font;
            font-weight: $base-weight-font;
            color: $base-color-font;
            line-height: normal;
            letter-spacing: normal
        }

        /*loader thx:https://codepen.io/aurer*/
        .loader{
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 3;
            background: darken($secondary-color, 12%);
            background: linear-gradient(to left, darken($secondary-color, 8%), darken($secondary-color, 12%));
            display: flex;
            align-items: center;
            justify-content: center;

            svg path,
            svg rect{
                fill: $primary-color
            }
        }

        /*gallery*/

        .gallery-wrapper{
            position: relative;
            z-index: 1;

            .content{
                position: relative;
                overflow: hidden;
                width: 100%;
                height: 100vh;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                padding: 3vh 0;
                background: darken($secondary-color, 12%);
                background: linear-gradient(to left, darken($secondary-color, 8%), darken($secondary-color, 12%));



                .gallery{
                    &.full{
                        position: relative;
                        display: flex;
                        align-items: center;

                        .swiper-container{
                            .swiper-wrapper{
                                display: flex;
                                height: 80vh;
                                align-items: center;
                                
                                .swiper-slide{
                                    position: relative;
                                    height: 50vh;
                                    transition: all .4s ease-out;
                                    box-sizing: border-box;
                                    width: auto;
                                    opacity: .25;

                                    &.swiper-slide-prev,
                                    &.swiper-slide-next{width: 20%!important}

                                    &.swiper-slide-active{
                                        height: 80vh;
                                        width: 60%!important;
                                        opacity: 1;

                                        &:hover{
                                            .zoom{
                                                opacity: 1;
                                                pointer-events: auto;
                                                visibility: visible
                                            }
                                        }
                                    }

                                    .image{
                                        width: 100%;
                                        height: 100%;

                                        img{
                                            width: 100%;
                                            height: 100%;
                                            display: block;
                                            object-fit: cover
                                        }
                                    }

                                    .overlay{
                                        position: absolute;
                                        left: 0;
                                        bottom: 0;
                                        z-index: 2;
                                        width: 100%;
                                        height: auto;
                                        padding: 50px 50px 30px 50px;
                                        background: rgb(0,0,0);
                                        background: linear-gradient(0deg, rgba(0,0,0, .8) 0%, rgba(0,0,0, .4) 50%, rgba(0,0,0,0) 100%);
                                        display: flex;
                                        align-items: center;
                                        opacity: 0;
                                        visibility: hidden;
                                        transition: all .3s ease-out;

                                        &.show{
                                            opacity: 1;
                                            visibility: visible;

                                            .text-wrap{
                                                opacity: 1;
                                                visibility: visible;
                                                transform: translateY(0)
                                            }
                                        }

                                        .text-wrap{
                                            display: flex;
                                            flex-direction: column;
                                            max-width: 600px;
                                            opacity: 0;
                                            visibility: hidden;
                                            transform: translateY(50px);
                                            transition: all .4s linear;

                                            .name{
                                                span{
                                                    font-size: 2.2em;
                                                    font-weight: 700;
                                                }
                                            }

                                            .caption{
                                                p{
                                                    font-size: 1.16em;
                                                    color: #fff;
                                                    line-height: 1.7;
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }

                        .swiper-next-button,
                        .swiper-prev-button{
                            position: absolute;
                            z-index: 99;
                            outline: none;
                            transition: all .2s linear;
                            width: 20%;
                            height: 50vh;
                            display: flex;
                            justify-content: flex-end;
                            align-items: center;
                            cursor: pointer;

                            &.swiper-button-disabled{opacity: .2}

                            em{
                                font-size: 68px
                            }
                        }

                        .swiper-next-button{
                            right: 0;
                            padding-left: 5vw;
                            justify-content: flex-start
                        }

                        .swiper-prev-button{
                            left: 0; 
                            padding-right: 5vw
                        }
                    }

                    &.thumb{
                        position: relative;
                        width: 100%;
                        max-width: 1020px;
                        margin: 0 auto;
                        display: flex;
                        align-items: center;
                        padding-left: 12px;

                        .swiper-container{
                            width: 100%;
                            .swiper-wrapper{
                                .swiper-slide{
                                    position: relative;
                                    height: 10vh;
                                    box-sizing: border-box;
                                    cursor: pointer;
                                    
                                    &.swiper-slide-thumb-active{
                                        .image{
                                            box-shadow: inset 0px 0px 0px 2px $primary-color;
                                            padding: 2px;

                                            .overlay{opacity: 1}
                                        }
                                    }

                                    .image{
                                        width: 100%;
                                        height: 100%;
                                        position: relative;

                                        img{
                                            width: 100%;
                                            height: 100%;
                                            display: block;
                                            object-fit: cover;
                                        }

                                        .overlay{
                                            position: absolute;
                                            left: 2px;
                                            top: 2px;
                                            background-color: rgba($secondary-color, .6);
                                            display: flex;
                                            align-items: center;
                                            justify-content: center;
                                            color: #fff;
                                            width: calc(100% - 4px);
                                            height: calc(100% - 4px);
                                            opacity: 0;
                                            transition: all .2s linear
                                        }
                                    }
                                }
                            }
                        }

                        .swiper-next-button{right: -15px}
                        .swiper-prev-button{left: -5px;
                            em{transform: rotate(180deg)}
                        }

                        .swiper-next-button,
                        .swiper-prev-button{
                            position: absolute;
                            z-index: 99;
                            outline: none;
                            transition: all .2s linear;
                            width: 32px;
                            height: 20px;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            background-color: $primary-color;
                            cursor: pointer;

                            &:hover{
                                background-color: darken($primary-color, 10%);
                            }

                            &.swiper-button-disabled{opacity: .2}
                        }
                    }
                }
            }
        }


        /*signature*/

        .signature{
            position: absolute;
            z-index: 2;
            right: 0;
            bottom: 0;
            padding: 20px;

            h3{
                font-weight: 600;
                font-size: .926em;
                color: $primary-color;
                display: flex;
                margin-bottom: 5px
            }

            a,
            em{
                text-decoration: none;
                color: #777;
                margin-right: 5px;
                font-size: .88em;
                transition: all .2s linear;

                &:hover{
                    color: #aaa
                }
            }
        }

        /*Mobile*/
        @media only screen and (max-width: 1024px){
            .gallery-wrapper{
                .content{
                    padding: 5vh 0;

                    .gallery{
                            &.full{
                                .swiper-container{
                                    .swiper-wrapper{
                                        height: 70vh;
                                        
                                        .swiper-slide{
                                                height: 50vh;

                                                &.swiper-slide-prev,
                                                &.swiper-slide-next{width: 10%!important}

                                                &.swiper-slide-active{
                                                    height: 70vh;
                                                    width: 80%!important
                                                }

                                                .overlay{
                                                    padding: 20px;
            
                                                    .text-wrap{
                                                        transform: translateY(0);
            
                                                        .name{
                                                            span{
                                                                    font-size: 1.6em
                                                            }
                                                        }
            
                                                        .caption{
                                                            p{
                                                                    font-size: 1.06em
                                                            }
                                                        }
                                                    }
                                                }
                                        }
                                    }
                                }

                                .swiper-next-button,
                                .swiper-prev-button{
                                    width: 10%;
                                    height: 50vh;
                                    align-items: center;
                                    justify-content: center;

                                    em{
                                        font-size: 45px
                                    }
                                }

                                .swiper-next-button{padding-left: 0}
                                .swiper-prev-button{padding-right: 0}
                            }

                            &.thumb{
                                padding: 0 30px;
                                        max-width: 100%;
                                .swiper-container{
                                    .swiper-wrapper{
                                        .swiper-slide{
                                                height: 80px
                                        }
                                    }
                                }

                                .swiper-next-button{right: 10px}
                                .swiper-prev-button{left: 10px}
                            }
                    }
                }
            }

            .signature{display: none}
        }
</style>

@endsection
@section('content')
    {{-- Content --}}
        
        {{-- <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5"  >
            <div class="owl-carousel header-carousel position-relative" >
                <div class="owl-carousel-item position-relative" >
                    <img class="img-fluid" src="img/لبنان2.jpg" alt="" >
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .2);">
                        <div class="container" >
                            <div class="row justify-content-center" >
                                <div class="col-10 col-lg-8" >
                                    <h1 class="display-2 text-white animated slideInDown mb-4">مرحبا بكم في مدرسة لبنان الخاصه</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">
                                        إذا كنت تبحث عن مدرسة توفر لطفلك تعليمًا عالي الجودة، فنحن ندعوك للانضمام إلى مجتمعنا</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative" >
                    <img class="img-fluid" src="img/لبنان2.jpg" alt="" >
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .2);">
                        <div class="container" >
                            <div class="row justify-content-center" >
                                <div class="col-10 col-lg-8" >
                                    <h1 class="display-2 text-white animated slideInDown mb-4">مرحبا بكم في مدرسة لبنان الخاصه</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">
                                        إذا كنت تبحث عن مدرسة توفر لطفلك تعليمًا عالي الجودة، فنحن ندعوك للانضمام إلى مجتمعنا</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative" >
                    <img class="img-fluid" src="img/لبنان2.jpg" alt="" >
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .2);">
                        <div class="container" >
                            <div class="row justify-content-center" >
                                <div class="col-10 col-lg-8" >
                                    <h1 class="display-2 text-white animated slideInDown mb-4">مرحبا بكم في مدرسة لبنان الخاصه</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">
                                        إذا كنت تبحث عن مدرسة توفر لطفلك تعليمًا عالي الجودة، فنحن ندعوك للانضمام إلى مجتمعنا</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Carousel End --> --}}

        <div id="coverId" class="cover" >
            <div id="cardId" class="card pe-2 ps-5 py-4" style="border-radius: none !important;">
                <div class="row" style="max-height: 500px">
                    <div class="col-md-10 col-sm-12" dir="rtl">
                        <h1 style="font-family: inherit;">مدرسة لبنان الأولي</h1>
                        <p class="paragraph" style="padding-left: 20px;">في مدرسة لبنان الأولى، ندمج بين المهارات الإبداعية والحياتية في مختلف جوانب العملية التعليمية، ونبني طلاباً يتمتعون بالمسؤولية الاجتماعية والكفاءة العالية والروح القيادية، ونتبنى منظوراً عالمياً يحترم التراث الإماراتي وكل ثقافات العالم.</p>
                        <div class="card-button">
                            <a href="{{route('contact.index')}}" class="btn btn-outline-primary">تواصل معنا</a>
                        </div>
                    </div>
                    <div class="col-md-2 d-md-block d-none d-sm-none">
                        <div style="width: 100%;height:100%;" class="container-image d-flex justify-content-center align-items-center">
                            <img src="{{ asset('img/First Lebanon School.jpeg') }}" width="100%" alt="مدرسة لبنان الأولى">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <!-- Number of Student start -->
        <div class="container-xxl py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="card d-flex align-items-center py-4 mb-3" style="box-shadow: 0 0 10px -3px;">
                            <div style="height: 80px; width:80px" class="the-avatar d-flex justify-content-center align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 126.019" width="100%" height="100%"><path fill="#e7f2f1" d="M65.66 26.569c.35.19.69.39 1.04.59.3.17.63.27.97.27.7 0 1.35-.39 1.7-1 .54-.96.22-2.18-.72-2.74-1.17-.69-2.34-1.33-3.52-1.94-.29-1.63-.69-3.24-1.21-4.82.21.08.44.11.67.11a2 2 0 0 0 .81-3.83c-1.3-.58-2.61-1.11-3.92-1.59-3.7-6.1-10.29-10.62-21.44-10.62-10.99 0-17.55 4.47-21.28 10.5a73.06 73.06 0 0 0-4.27 1.71 2.01 2.01 0 0 0-1.03 2.64c.32.72 1.04 1.19 1.83 1.19.28 0 .55-.05.8-.16.06-.03.12-.05.18-.07a34.88 34.88 0 0 0-1.32 5.21c-1.05.52-2.11 1.07-3.16 1.65-.46.25-.8.67-.95 1.19-.15.51-.09 1.05.16 1.52.34.65 1 1.05 1.72 1.05.32 0 .65-.09.93-.25.26-.14.51-.28.77-.41-3.19 10.23-15.57 41.22 1.38 61.53l44.26 25c0 3.49 1.37 7.57 4.69 7.57 2.51 0 4.95-9.59 6.82-21.69 2.06-13.45 3.43-29.99 3.43-39.93 0-18.89-9.34-32.68-9.34-32.68z" class="colore7f2f1 svgShape"></path><path fill="#5d5560" d="M71.57 99.179c-1.87 12.1-4.31 21.69-6.82 21.69-3.32 0-4.69-4.08-4.69-7.57s1.42-6.89 1.92-13.81c.44-6.15-1.25-14.43-4.51-17.31a40.366 40.366 0 0 0-9.47-5.17H31.91s0 .01.01.03c-3.77 1.45-8.44 3.92-13.02 8.13-1.04.95-2.07 1.99-3.1 3.13-6.6 7.38-12.57 18.87-14.8 36.72h78c-1.34-10.76-4.05-19.21-7.43-25.84z" class="color5d5560 svgShape"></path><path fill="#ffd7d2" d="M18.24 52.959c-1.27-3.68-2.23-8.56-2.75-13.86h.01s4.68-15.78 24.7-15.78 24.39 15.78 24.39 15.78c-.52 5.3-1.48 10.18-2.75 13.86-.55 1.59-1.15 2.96-1.8 4.04-.28.46-.59.94-.95 1.42-2.64 3.6-7.42 7.74-13.09 9.59-1.9.62-3.9.99-5.96.99-2.08 0-4.11-.38-6.04-1.01-5.92-1.97-10.86-6.41-13.39-10.11-.21-.3-.4-.59-.57-.88-.65-1.08-1.25-2.45-1.8-4.04z" class="colorffd7d2 svgShape"></path><path fill="#ffd7d2" d="M34 67.989v5.6l12-.01v-5.57z" class="colorffd7d2 svgShape"></path><path fill="#9fb7b3" d="M48 71.109v5.9s-.94 3.78-5.35 4.89l-2.69 14.89-2.58-14.89c-4.2-1.07-5.35-4.51-5.46-4.86-.01-.02-.01-.03-.01-.03v-5.9c.7.18 1.39.34 2.09.48 4.04.78 8.04.78 12-.01.67-.13 1.33-.29 2-.47z" class="color9fb7b3 svgShape"></path><path fill="#655f68" d="M63.92 16.929a.694.694 0 0 1-.13-.05c-7.85-3.47-15.85-5.23-23.79-5.23-7.89 0-15.87 1.73-23.73 5.16-.06.02-.12.04-.18.07-.25.11-.52.16-.8.16-.79 0-1.51-.47-1.83-1.19a2.01 2.01 0 0 1 1.03-2.64 73.06 73.06 0 0 1 4.27-1.71c7.05-2.57 14.18-3.86 21.24-3.86 7.17 0 14.37 1.34 21.48 3.98 1.31.48 2.62 1.01 3.92 1.59a2 2 0 0 1-.81 3.83c-.23 0-.46-.03-.67-.11z" class="color655f68 svgShape"></path><path fill="#655f68" d="M68.65 23.689c.94.56 1.26 1.78.72 2.74-.35.61-1 1-1.7 1-.34 0-.67-.1-.97-.27-.35-.2-.69-.4-1.04-.59-8.16-4.61-16.57-6.95-25.03-6.95-8.59 0-17.41 2.41-26.21 7.15-.26.13-.51.27-.77.41-.28.16-.61.25-.93.25-.72 0-1.38-.4-1.72-1.05-.25-.47-.31-1.01-.16-1.52.15-.52.49-.94.95-1.19 1.05-.58 2.11-1.13 3.16-1.65 8.61-4.26 17.23-6.41 25.68-6.41 8.28 0 16.51 2.07 24.5 6.14 1.18.61 2.35 1.25 3.52 1.94z" class="color655f68 svgShape"></path><path fill="#d6eae8" d="M20.61 57.879c2.53 3.7 7.47 8.14 13.39 10.11v3.6c-.7-.14-1.39-.3-2.09-.48v5.9s0 .01.01.03c-3.77 1.45-8.44 3.92-13.02 8.13-4.03-11.61-6.76-23.5-6.01-34.16 1.33 1.25 3.71 2.14 5.35 1.95.55 1.59 1.15 2.96 1.8 4.04.17.29.36.58.57.88z" class="colord6eae8 svgShape"></path><path fill="#fec4b9" d="M18.24 52.959c-1.64.19-4.02-.7-5.35-1.95.28-4.19 1.11-8.19 2.6-11.91.52 5.3 1.48 10.18 2.75 13.86zm46.36-13.86c0-.02.01-.04.01-.06l.03-.01c1.84 4 3.06 7.78 3.68 11.56-1.33 1.26-4.84 2.57-6.48 2.37 1.27-3.68 2.23-8.56 2.75-13.86h.01zM45.993 70.964 46 68.013c-2.038.662-3.862 1-5.992 1-2.07 0-4.098-.406-6.008-1.036l.001 1.364c0-.001 3.452 2.27 11.992 1.623z" class="colorfec4b9 svgShape"></path><g fill="#3a322b" class="color3a322b svgShape"><path d="M79.847 125.518c.033-.056.065-.109.087-.171.022-.062.03-.127.039-.193.007-.046.027-.087.027-.135 0-.022-.011-.04-.013-.062-.001-.021.007-.041.005-.062-1.23-9.88-3.721-18.581-7.393-25.881.086-.565.172-1.13.258-1.723C74.708 84.577 76 68.937 76 59.253c0-14.623-5.413-26.096-8.078-30.861a2.949 2.949 0 0 0 2.319-1.476c.805-1.425.321-3.257-1.079-4.084a67.448 67.448 0 0 0-3.155-1.745 36.174 36.174 0 0 0-.752-3.128 2.999 2.999 0 0 0 2.08-1.703 3.005 3.005 0 0 0-1.531-3.958 70.811 70.811 0 0 0-3.663-1.488C57.654 3.641 50.223 0 40.038 0 29.99 0 22.612 3.603 18.091 10.697a72.18 72.18 0 0 0-4.003 1.598 2.974 2.974 0 0 0-1.589 1.657 2.98 2.98 0 0 0 .046 2.295 3.001 3.001 0 0 0 2.326 1.765 36.763 36.763 0 0 0-.799 3.327c-.923.463-1.847.943-2.769 1.454a2.976 2.976 0 0 0-1.419 1.785 3.021 3.021 0 0 0 .232 2.271 2.948 2.948 0 0 0 2.605 1.578c.04 0 .078-.013.118-.015l-.334 1.014C8.55 41.397-.634 69.248 14.519 88.286 8.033 95.805 2.205 107.306.008 124.894c-.003.021.006.041.005.062-.002.022-.013.041-.013.063 0 .048.021.089.027.135.009.067.017.131.039.193s.054.115.087.171c.032.055.062.107.104.155a.917.917 0 0 0 .145.126c.05.039.098.076.155.104.06.03.124.046.19.064.044.012.082.037.129.043.041.005.082.008.123.008H79.001c.041 0 .082-.003.123-.008.047-.006.084-.031.129-.043.066-.018.131-.034.191-.064.057-.029.104-.066.154-.104.052-.04.102-.077.145-.126a.976.976 0 0 0 .104-.155zm-2-1.499H2.149c4.169-30.64 19.675-41.735 29.236-45.691a8.713 8.713 0 0 0 5.115 4.348l2.475 14.283a1 1 0 0 0 .982.829h.003a1 1 0 0 0 .984-.822l2.581-14.288c2.998-.974 4.423-3.063 5.035-4.35a39.467 39.467 0 0 1 8.276 4.628c2.998 2.695 4.564 10.669 4.145 16.458-.259 3.589-.779 6.268-1.196 8.42-.387 1.994-.721 3.715-.721 5.461 0 4.13 1.779 8.574 5.684 8.574 1.144 0 4.04-.016 7.293-19.368 2.773 6.248 4.714 13.472 5.806 21.518zm-12.7-81.171c.941 2.48 1.641 4.906 2.078 7.332-.978.7-2.666 1.396-3.981 1.674.779-2.584 1.426-5.636 1.903-9.006zm-5.964 13.637C56.511 60.938 48.953 68 40.04 68s-16.471-7.063-19.143-11.515c-1.993-3.323-3.63-9.763-4.39-17.256.534-1.556 5.655-14.91 23.69-14.91 18.165 0 22.856 13.21 23.378 14.886-.76 7.503-2.397 13.953-4.392 17.28zM42.406 80.929c-.05.013-.087.044-.133.063-.072.03-.145.054-.208.099-.051.037-.086.087-.128.132-.046.048-.097.091-.133.148-.041.066-.061.142-.086.217-.015.046-.044.084-.052.132l-.005.025v.001L39.98 91.05l-1.611-9.301v-.001l-.004-.021c-.008-.047-.036-.084-.05-.129-.025-.077-.044-.155-.087-.223-.036-.059-.089-.103-.136-.152-.041-.044-.074-.093-.123-.129-.071-.052-.154-.082-.236-.113-.038-.015-.067-.041-.107-.051-3.378-.861-4.493-3.457-4.717-4.084v-4.467c.298.067.598.131.9.191 4.159.803 8.326.798 12.38-.011.264-.051.531-.107.81-.171v4.479c-.174.549-1.189 3.204-4.593 4.062zM45 70.737a29.997 29.997 0 0 1-10 .006V69.32c1.618.428 3.304.68 5.04.68 1.708 0 3.366-.247 4.96-.661v1.398zM15.05 43.664c.466 3.06 1.074 5.836 1.793 8.217-1.009-.2-2.112-.684-2.922-1.309.195-2.433.568-4.736 1.129-6.908zm-1.253 9.197c1.183.644 2.548 1.056 3.743 1.108.508 1.374 1.057 2.57 1.642 3.545.122.204.268.419.409.633-.246 4.922-.052 11.023 3.3 15.336a.997.997 0 0 0 1.403.177 1 1 0 0 0 .176-1.403c-2.028-2.61-2.962-6.253-2.946-11.603C24.19 63.687 28.22 66.94 33 68.695v1.638c-.28-.066-.56-.121-.841-.193a1 1 0 0 0-1.248.969v5.256c-3.347 1.353-7.424 3.54-11.534 7.064-4.001-11.878-5.857-22.003-5.58-30.568zM40.038 2c8.327 0 14.646 2.581 18.837 7.673-12.394-3.96-25.033-3.988-37.502-.093C25.574 4.549 31.835 2 40.038 2zM14.376 15.444a.995.995 0 0 1-.015-.765.994.994 0 0 1 .529-.553c8.307-3.642 16.753-5.487 25.105-5.487s16.763 1.847 25 5.487c.505.224.733.815.511 1.32-.216.489-.837.723-1.317.512-15.945-7.051-32.409-7.05-48.495-.001-.5.22-1.102-.021-1.318-.513zm2.716 2.103c7.597-3.244 15.3-4.9 22.904-4.9 7.702 0 15.468 1.694 23.095 5.022.235.748.445 1.509.63 2.285-7.554-3.551-15.296-5.349-23.089-5.349-7.997 0-16.143 1.898-24.283 5.637.217-.931.462-1.833.743-2.695zm-5.211 8.363a1.03 1.03 0 0 1-.078-.774.972.972 0 0 1 .468-.594c9.511-5.267 19.053-7.938 28.361-7.938 9.314 0 18.572 2.675 27.514 7.95.468.276.627.895.355 1.376-.257.453-.858.621-1.294.367-8.633-5.095-17.575-7.678-26.579-7.678-8.752 0-17.72 2.448-26.669 7.263l-.013.007c-.26.14-.52.275-.78.419-.451.252-1.041.061-1.285-.398zm2.522 4.142c.32-.966.599-1.82.843-2.589 8.542-4.537 17.076-6.842 25.383-6.842 8.211 0 16.384 2.253 24.319 6.691C66.02 28.986 74 42.027 74 59.253c0 9.555-1.276 25.025-3.104 37.623-2.719 18.741-5.36 22.952-6.148 22.993-2.914 0-3.684-4.301-3.684-6.574 0-1.554.302-3.109.684-5.08.427-2.204.959-4.948 1.228-8.656.453-6.261-1.271-14.973-4.846-18.132-.013-.011-.029-.014-.042-.024-.011-.009-.016-.022-.028-.03a41.352 41.352 0 0 0-9.061-5.027v-5.237a1 1 0 0 0-1.259-.966c-.265.071-.502.129-.741.187v-1.602c4.667-1.694 8.618-4.823 11.299-7.792.27 5.001-.49 9.624-2.281 13.771a1 1 0 1 0 1.835.792c2.169-5.024 2.924-10.68 2.264-16.812.287-.404.554-.799.779-1.174.587-.979 1.139-2.182 1.648-3.563 1.47-.099 3.477-.755 5.001-1.61.873 7.384-.568 14.988-4.358 24.586a.999.999 0 0 0 .93 1.367c.398 0 .775-.239.931-.633 6.228-15.771 6.346-26.394.436-39.194-.024-.053-.067-.089-.099-.135-.987-2.763-6.693-16.013-25.188-16.013-19.55 0-25.09 14.812-25.616 16.365-.003.007-.002.015-.005.021-.003.007-.009.011-.012.018-.006.016-.011.033-.018.049-.006.016-.012.03-.017.047-1.463 3.666-2.343 7.716-2.644 12.171 0 .022-.004.043-.003.065-.623 9.382 1.329 20.576 5.874 33.839a45.061 45.061 0 0 0-1.882 1.88c-14.179-18.194-5.303-45.116-1.47-56.721z" fill="#000000" class="color000 svgShape"></path><circle cx="50.04" cy="39" r="2" fill="#000000" class="color000 svgShape"></circle><path d="M47.952 27.545a1 1 0 0 0 .346 1.969c.025-.003 2.648-.421 4.442.842a.998.998 0 0 0 1.393-.241 1 1 0 0 0-.242-1.394c-2.495-1.759-5.8-1.201-5.939-1.176z" fill="#000000" class="color000 svgShape"></path><circle cx="30.04" cy="39" r="2" fill="#000000" class="color000 svgShape"></circle><path d="M32.127 27.545c-.14-.025-3.445-.582-5.94 1.176a1 1 0 1 0 1.151 1.635c1.795-1.264 4.385-.851 4.444-.841a1.002 1.002 0 0 0 1.156-.812.999.999 0 0 0-.811-1.158zM42.728 41.78a9.842 9.842 0 0 1-5.455 0 .998.998 0 1 0-.545 1.923c1.086.308 2.187.464 3.272.464s2.187-.156 3.272-.464a.999.999 0 1 0-.544-1.923z" fill="#000000" class="color000 svgShape"></path></g></svg>
                            </div>
                            <span id="countEmiratis" class="text-center text-primary">95.31%</span>
                            <span class="text-center">نسبة الطلاب الإماراتيين</span>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="card d-flex align-items-center py-4 mb-3" style="box-shadow: 0 0 10px -3px;">
                            <div style="height: 80px; width:80px" class="the-avatar d-flex justify-content-center align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 64 64" width="100%" height="100%"><path fill="#7897c9" d="M21.5,62v-12.33c0-2.58,2.05-4.67,4.57-4.67h6.86c2.52,0,4.57,2.09,4.57,4.67v12.33H21.5Z" class="color7897c9 svgShape"></path><path fill="#e66d67" d="M45.5,14l-1.9,.38c-2.03,.41-4.13,.28-6.1-.38h0c-1.97-.66-4.07-.79-6.1-.38l-1.9,.38V4l1.9-.38c2.03-.41,4.13-.28,6.1,.38h0c1.97,.66,4.07,.79,6.1,.38l1.9-.38V14Z" class="colore66d67 svgShape"></path><path fill="#ffe18f" d="M21,22l-1.83,.46c-1.4,.35-2.88,.19-4.17-.46h0c-1.29-.65-2.77-.81-4.17-.46l-1.83,.46V14l1.83-.46c1.4-.35,2.88-.19,4.17,.46h0c1.29,.65,2.77,.81,4.17,.46l1.83-.46v8Z" class="colorffe18f svgShape"></path><path fill="#36b385" d="M62,29l-1.83,.46c-1.4,.35-2.88,.19-4.17-.46h0c-1.29-.65-2.77-.81-4.17-.46l-1.83,.46v-8l1.83-.46c1.4-.35,2.88-.19,4.17,.46h0c1.29,.65,2.77,.81,4.17,.46l1.83-.46v8Z" class="color36b385 svgShape"></path><circle cx="9" cy="42" r="4" fill="#ffc9b9" class="colorffc9b9 svgShape"></circle><path fill="#728fbf" d="M2,62v-9c0-2.21,1.79-4,4-4h6c2.21,0,4,1.79,4,4v9H2Z" class="color728fbf svgShape"></path><circle cx="29.5" cy="37.5" r="4.5" fill="#ffc9b9" class="colorffc9b9 svgShape"></circle><circle cx="50" cy="42" r="4" fill="#ffc9b9" class="colorffc9b9 svgShape"></circle><path fill="#728fbf" d="M43,62v-9c0-2.21,1.79-4,4-4h6c2.21,0,4,1.79,4,4v9h-14Z" class="color728fbf svgShape"></path><path d="M9 47c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm0-8c1.65 0 3 1.35 3 3s-1.35 3-3 3-3-1.35-3-3 1.35-3 3-3zM24 37.5c0 3.03 2.47 5.5 5.5 5.5s5.5-2.47 5.5-5.5-2.47-5.5-5.5-5.5-5.5 2.47-5.5 5.5zm5.5-3.5c1.93 0 3.5 1.57 3.5 3.5s-1.57 3.5-3.5 3.5-3.5-1.57-3.5-3.5 1.57-3.5 3.5-3.5zM50 37c-2.76 0-5 2.24-5 5s2.24 5 5 5 5-2.24 5-5-2.24-5-5-5zm0 8c-1.65 0-3-1.35-3-3s1.35-3 3-3 3 1.35 3 3-1.35 3-3 3zM43.8 15.36l1.9-.38c.47-.09.8-.5.8-.98V4c0-.3-.13-.58-.37-.77-.23-.19-.54-.27-.83-.21l-1.9.38c-1.86.37-3.79.25-5.59-.35-2.13-.71-4.41-.85-6.61-.41l-.7.14V1h-2V29h2V14.82l1.09-.22c1.86-.37 3.79-.25 5.59.35 1.32.44 2.7.66 4.08.66.85 0 1.69-.08 2.53-.25zm-5.98-2.31c-1.32-.44-2.7-.66-4.08-.66-.85 0-1.69.08-2.53.25l-.7.14V4.82l1.09-.22c1.86-.37 3.79-.25 5.59.35 2.13.71 4.42.85 6.61.41l.7-.14v7.96l-1.09.22c-1.86.37-3.79.25-5.59-.35zM17.7 23.64c.57 0 1.15-.07 1.71-.21l1.83-.46c.44-.11.76-.51.76-.97V14c0-.31-.14-.6-.38-.79s-.56-.26-.86-.18l-1.83.46c-1.17.29-2.4.16-3.48-.38-1.5-.75-3.23-.94-4.86-.53l-.59.15v-.72h-2v22h2v-11.22l1.07-.27c1.17-.29 2.4-.16 3.48.38.98.49 2.06.74 3.15.74zm-7.12-3.07l-.59.15v-5.94l1.07-.27c1.17-.29 2.4-.16 3.48.38 1.5.75 3.23.94 4.86.53l.59-.15v5.94l-1.07.27c-1.17.29-2.4.16-3.48-.38-.98-.49-2.06-.74-3.15-.74-.57 0-1.15.07-1.71.21zM63 21c0-.31-.14-.6-.38-.79-.24-.19-.56-.26-.86-.18l-1.83.46c-1.17.29-2.4.16-3.48-.38-1.5-.75-3.23-.94-4.86-.53l-.59.15v-.72h-2v15h2v-4.22l1.07-.27c1.17-.29 2.4-.16 3.48.38.98.49 2.06.74 3.15.74.57 0 1.15-.07 1.71-.21l1.83-.46c.44-.11.76-.51.76-.97v-8zm-2 7.22l-1.07.27c-1.17.29-2.4.16-3.48-.38-.98-.49-2.06-.74-3.15-.74-.57 0-1.15.07-1.71.21l-.59.15v-5.94l1.07-.27c1.17-.29 2.4-.16 3.48.38 1.5.75 3.23.94 4.86.53l.59-.15v5.94zM2 63h14c.55 0 1-.45 1-1v-9c0-2.76-2.24-5-5-5H6c-2.76 0-5 2.24-5 5v9c0 .55.45 1 1 1zm1-10c0-1.65 1.35-3 3-3h6c1.65 0 3 1.35 3 3v8H3v-8zM20.5 49.67v12.33c0 .55.45 1 1 1h16c.55 0 1-.45 1-1v-12.33c0-3.12-2.5-5.67-5.57-5.67h-6.86c-3.07 0-5.57 2.54-5.57 5.67zm2 0c0-2.02 1.6-3.67 3.57-3.67h6.86c1.97 0 3.57 1.65 3.57 3.67v11.33h-14v-11.33zM43 63h14c.55 0 1-.45 1-1v-9c0-2.76-2.24-5-5-5h-6c-2.76 0-5 2.24-5 5v9c0 .55.45 1 1 1zm1-10c0-1.65 1.35-3 3-3h6c1.65 0 3 1.35 3 3v8h-12v-8z" fill="#000000" class="color000 svgShape"></path></svg>
                            </div>
                            <span id="countNationality" class="text-center text-primary">25</span>
                            <span class="text-center">الجنسيات</span>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="card d-flex align-items-center py-4 mb-3" style="box-shadow: 0 0 10px -3px;">
                            <div style="height: 80px; width:80px" class="the-avatar d-flex justify-content-center align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 64 64" viewBox="0 0 64 64" width="100%" height="100%"><path fill="#64b5f6" d="M19.729 45.976c-.118-.04-.236-.078-.356-.114L16.5 45c-1.5 2-4.5 2-6 0l-2.873.862C3.397 47.131.5 51.024.5 55.44V60H16v-5.32c0-3.364 1.379-6.476 3.734-8.702C19.732 45.977 19.731 45.976 19.729 45.976zM56.373 45.862L53.5 45c-1.5 2-4.5 2-6 0l-2.873.862c-.12.036-.239.074-.356.114-.002 0-.003.001-.005.002C46.621 48.204 48 51.315 48 54.68V60h15.5v-4.56C63.5 51.024 60.603 47.131 56.373 45.862z" class="color64b5f6 svgShape"></path><path fill="#37474f" d="M23 38.121c-.276 0-.5.224-.5.5v5.143c0 .276.224.5.5.5s.5-.224.5-.5v-5.143C23.5 38.345 23.276 38.121 23 38.121zM19.891 45.502c-.123-.042-.248-.081-.374-.119l-2.874-.861c-.199-.061-.417.012-.543.179-.62.826-1.567 1.3-2.6 1.3s-1.98-.474-2.6-1.3c-.125-.167-.342-.239-.543-.179l-2.874.861C3.007 46.726 0 50.768 0 55.44V60c0 .276.224.5.5.5S1 60.276 1 60v-4.56c0-4.228 2.721-7.885 6.77-9.101l2.554-.765C11.129 46.484 12.269 47 13.5 47s2.371-.516 3.176-1.425l2.553.765c.114.034.227.071.339.109.263.087.545-.051.634-.312C20.292 45.875 20.152 45.591 19.891 45.502z" class="color37474f svgShape"></path><circle cx="17" cy="33.5" r="1" fill="#37474f" class="color37474f svgShape"></circle><circle cx="10" cy="33.5" r="1" fill="#37474f" class="color37474f svgShape"></circle><path fill="#37474f" d="M6.5 55.5C6.224 55.5 6 55.724 6 56v4c0 .276.224.5.5.5S7 60.276 7 60v-4C7 55.724 6.776 55.5 6.5 55.5zM22.432 35.722c-.228-.156-.539-.1-.695.128-.281.407-.743.65-1.236.65-.276 0-.5.224-.5.5v.5c0 2.481-2.019 4.5-4.5 4.5h-4C9.019 42 7 39.981 7 37.5V37c0-.276-.224-.5-.5-.5C5.673 36.5 5 35.827 5 35s.673-1.5 1.5-1.5C6.776 33.5 7 33.276 7 33v-2.861c0-.276-.224-.5-.5-.5S6 29.862 6 30.139v2.411C4.86 32.782 4 33.793 4 35s.86 2.218 2 2.45v.05c0 3.032 2.467 5.5 5.5 5.5h4c3.033 0 5.5-2.468 5.5-5.5v-.051c.627-.128 1.189-.493 1.56-1.031C22.716 36.19 22.659 35.879 22.432 35.722z" class="color37474f svgShape"></path><path fill="#37474f" d="M16.5 36h-6c-.276 0-.5.224-.5.5 0 1.93 1.57 3.5 3.5 3.5s3.5-1.57 3.5-3.5C17 36.224 16.776 36 16.5 36zM13.5 39c-1.208 0-2.217-.86-2.45-2h4.899C15.717 38.14 14.708 39 13.5 39zM10.5 42c-.276 0-.5.224-.5.5V45c0 .276.224.5.5.5S11 45.276 11 45v-2.5C11 42.224 10.776 42 10.5 42zM16.5 42c-.276 0-.5.224-.5.5V45c0 .276.224.5.5.5S17 45.276 17 45v-2.5C17 42.224 16.776 42 16.5 42zM56.517 45.383l-2.874-.861c-.199-.061-.417.012-.543.179-.62.826-1.567 1.3-2.6 1.3s-1.98-.474-2.6-1.3c-.125-.167-.342-.239-.543-.179l-2.875.861c-.125.038-.25.077-.373.119-.261.089-.401.373-.312.635s.374.399.634.312c.112-.038.225-.075.338-.109l2.554-.765C48.129 46.484 49.269 47 50.5 47s2.371-.516 3.176-1.425l2.554.765C60.279 47.556 63 51.213 63 55.44V60c0 .276.224.5.5.5S64 60.276 64 60v-4.56C64 50.768 60.993 46.726 56.517 45.383z" class="color37474f svgShape"></path><circle cx="54" cy="34" r="1" fill="#37474f" class="color37474f svgShape"></circle><circle cx="47" cy="34" r="1" fill="#37474f" class="color37474f svgShape"></circle><path fill="#37474f" d="M57.5 55.5c-.276 0-.5.224-.5.5v4c0 .276.224.5.5.5S58 60.276 58 60v-4C58 55.724 57.776 55.5 57.5 55.5zM57.5 32.5c-.276 0-.5.224-.5.5s.224.5.5.5c.827 0 1.5.673 1.5 1.5s-.673 1.5-1.5 1.5c-.276 0-.5.224-.5.5v.5c0 2.481-2.019 4.5-4.5 4.5h-4c-2.481 0-4.5-2.019-4.5-4.5V37c0-.276-.224-.5-.5-.5-.492 0-.953-.241-1.234-.646-.158-.227-.469-.282-.696-.126-.227.158-.283.47-.125.696.371.534.931.898 1.556 1.025V37.5c0 3.032 2.467 5.5 5.5 5.5h4c3.033 0 5.5-2.468 5.5-5.5v-.05c1.14-.232 2-1.243 2-2.45C60 33.621 58.878 32.5 57.5 32.5z" class="color37474f svgShape"></path><path fill="#37474f" d="M53 36.25h-5c-.276 0-.5.224-.5.5 0 1.654 1.346 3 3 3s3-1.346 3-3C53.5 36.474 53.276 36.25 53 36.25zM50.5 38.75c-.93 0-1.714-.639-1.937-1.5h3.873C52.214 38.111 51.43 38.75 50.5 38.75zM47.5 42c-.276 0-.5.224-.5.5V45c0 .276.224.5.5.5S48 45.276 48 45v-2.5C48 42.224 47.776 42 47.5 42zM53.5 42c-.276 0-.5.224-.5.5V45c0 .276.224.5.5.5S54 45.276 54 45v-2.5C54 42.224 53.776 42 53.5 42z" class="color37474f svgShape"></path><path fill="#64b5f6" d="M46,63.5v-8.82c0-3.788-2.14-7.25-5.528-8.944L36,43.5l0,0c-1.54,3.466-6.46,3.466-8,0l0,0l-4.472,2.236				C20.14,47.43,18,50.892,18,54.68v8.82" class="color64b5f6 svgShape"></path><path fill="#37474f" d="M40.696,45.288l-4.472-2.235c-0.122-0.061-0.264-0.068-0.393-0.023c-0.128,0.046-0.232,0.143-0.288,0.268
                                    C34.912,44.717,33.554,45.6,32,45.6s-2.912-0.883-3.543-2.303c-0.056-0.125-0.16-0.222-0.288-0.268
                                    c-0.127-0.046-0.27-0.038-0.393,0.023l-4.472,2.235c-3.58,1.791-5.804,5.39-5.804,9.392v8.82c0,0.276,0.224,0.5,0.5,0.5
                                    s0.5-0.224,0.5-0.5v-8.82c0-3.621,2.012-6.877,5.251-8.497l4.028-2.014C28.647,45.681,30.221,46.6,32,46.6
                                    s3.353-0.919,4.221-2.431l4.028,2.014c3.239,1.62,5.251,4.876,5.251,8.497v8.82c0,0.276,0.224,0.5,0.5,0.5s0.5-0.224,0.5-0.5
                                    v-8.82C46.5,50.678,44.276,47.079,40.696,45.288z" class="color37474f svgShape"></path><circle cx="35.5" cy="31" r="1" fill="#37474f" class="color37474f svgShape"></circle><circle cx="28.5" cy="31" r="1" fill="#37474f" class="color37474f svgShape"></circle><path fill="#ef5350" d="M37.5,23v5c0,1.381,1.119,2.5,2.5,2.5v-5C40,24.12,38.881,23,37.5,23z" class="coloref5350 svgShape"></path><path fill="#37474f" d="M37.5,22.5c-0.276,0-0.5,0.224-0.5,0.5v5c0,1.654,1.346,3,3,3c0.276,0,0.5-0.224,0.5-0.5v-5
                                            C40.5,23.846,39.154,22.5,37.5,22.5z M39.5,29.937C38.638,29.714,38,28.931,38,28v-4.437c0.862,0.223,1.5,1.006,1.5,1.937
                                            V29.937z" class="color37474f svgShape"></path><path fill="#ef5350" d="M36.092,19.5H30c-4.142,0-7.5,3.358-7.5,7.5v1.5l5.022-0.457c3.837-0.349,7.393-2.161,9.931-5.061
                                    l0.145-0.166C38.729,21.524,37.811,19.5,36.092,19.5z" class="coloref5350 svgShape"></path><path fill="#37474f" d="M38.369 20.467C37.958 19.562 37.086 19 36.092 19H30c-4.411 0-8 3.589-8 8v1.5c0 .141.059.274.163.369C22.255 28.954 22.376 29 22.5 29c.015 0 .03-.001.045-.002l5.022-.456c3.983-.362 7.628-2.22 10.261-5.229l.146-.166C38.628 22.398 38.779 21.372 38.369 20.467zM37.222 22.487l-.146.166c-2.464 2.816-5.873 4.554-9.6 4.893L23 27.952V27c0-3.859 3.14-7 7-7h6.092c.605 0 1.116.329 1.366.881C37.708 21.432 37.62 22.033 37.222 22.487zM55 25c-.276 0-.5.224-.5.5v5c0 1.654 1.346 3 3 3 .276 0 .5-.224.5-.5v-5C58 26.346 56.654 25 55 25zM57 32.437c-.862-.223-1.5-1.006-1.5-1.937v-4.437C56.362 26.286 57 27.069 57 28V32.437z" class="color37474f svgShape"></path><path fill="#37474f" d="M55.142 25.144C54.808 24.438 54.115 24 53.334 24H48.5c-3.033 0-5.5 2.468-5.5 5.5v2c0 .147.065.288.179.383C43.27 31.959 43.383 32 43.5 32c.029 0 .058-.003.087-.008l4.939-.871c2.414-.426 4.598-1.705 6.151-3.604l.206-.251C55.377 26.662 55.476 25.849 55.142 25.144zM54.109 26.634l-.206.251c-1.402 1.713-3.373 2.867-5.551 3.252L44 30.904V29.5c0-2.481 2.019-4.5 4.5-4.5h4.834c.396 0 .734.214.904.572C54.408 25.93 54.359 26.327 54.109 26.634zM40 30c-.276 0-.5.224-.5.5S39.724 31 40 31c.827 0 1.5.673 1.5 1.5S40.827 34 40 34c-.276 0-.5.224-.5.5 0 3.584-2.916 6.5-6.5 6.5h-2c-3.584 0-6.5-2.916-6.5-6.5 0-.276-.224-.5-.5-.5-.827 0-1.5-.673-1.5-1.5S23.173 31 24 31c.276 0 .5-.224.5-.5v-2.136c0-.276-.224-.5-.5-.5s-.5.224-.5.5v1.686c-1.14.232-2 1.243-2 2.45 0 1.212.867 2.226 2.014 2.452C23.748 38.878 27.017 42 31 42h2c3.983 0 7.252-3.122 7.486-7.048 1.146-.227 2.014-1.24 2.014-2.452C42.5 31.121 41.378 30 40 30zM20.982 29.854l-.097-.066c-.067-.045-.135-.088-.198-.143l-2.361-2.024c-.169-.144-.415-.16-.603-.036l-1.727 1.151c-1.517 1.012-3.477 1.012-4.992 0l-1.727-1.151c-.186-.124-.432-.107-.603.036l-2.362 2.025-.123.101c-.216.171-.253.485-.082.702.171.215.486.254.703.081l2.227-1.903 1.412.941c1.853 1.236 4.248 1.236 6.102 0l1.412-.941 2.073 1.777c.093.08.194.148.295.217l.084.056c.086.061.186.089.283.089.159 0 .315-.075.412-.216C21.267 30.321 21.209 30.01 20.982 29.854z" class="color37474f svgShape"></path><path fill="#37474f" d="M21.256 23.952C19.732 22.371 17.688 21.5 15.5 21.5h-4c-4.411 0-8 3.589-8 8v15.764c0 .276.224.5.5.5s.5-.224.5-.5V29.5c0-3.859 3.14-7 7-7h4c1.914 0 3.702.762 5.036 2.146.192.201.509.204.707.014C21.442 24.467 21.448 24.15 21.256 23.952zM36.267 40.395c-.146-.09-.328-.104-.482-.028C34.902 40.787 33.965 41 33 41h-2c-.965 0-1.902-.213-2.785-.634-.155-.075-.337-.062-.482.028-.145.092-.233.251-.233.423V43.5c0 .07.015.139.043.203C28.337 45.489 30.045 46.6 32 46.6s3.663-1.11 4.457-2.896C36.485 43.639 36.5 43.57 36.5 43.5v-2.683C36.5 40.646 36.412 40.486 36.267 40.395zM35.5 43.391C34.852 44.756 33.52 45.6 32 45.6s-2.852-.844-3.5-2.209v-1.824C29.305 41.854 30.143 42 31 42h2c.857 0 1.695-.146 2.5-.434V43.391zM35 34h-6c-.276 0-.5.224-.5.5 0 1.93 1.57 3.5 3.5 3.5s3.5-1.57 3.5-3.5C35.5 34.224 35.276 34 35 34zM32 37c-1.208 0-2.217-.86-2.45-2h4.899C34.217 36.14 33.208 37 32 37zM23 55.5c-.276 0-.5.224-.5.5v7.5c0 .276.224.5.5.5s.5-.224.5-.5V56C23.5 55.724 23.276 55.5 23 55.5zM41 55.5c-.276 0-.5.224-.5.5v7.5c0 .276.224.5.5.5s.5-.224.5-.5V56C41.5 55.724 41.276 55.5 41 55.5z" class="color37474f svgShape"></path><path fill="#ffca28" d="M51,0.5H13c-0.552,0-1,0.448-1,1v10c0,0.552,0.448,1,1,1h38c0.552,0,1-0.448,1-1v-10
                                    C52,0.948,51.553,0.5,51,0.5z" class="colorffca28 svgShape"></path><path fill="#37474f" d="M51,0H13c-0.827,0-1.5,0.673-1.5,1.5v10c0,0.827,0.673,1.5,1.5,1.5h38c0.827,0,1.5-0.673,1.5-1.5v-10
                                            C52.5,0.673,51.828,0,51,0z M51.5,11.5c0,0.275-0.224,0.5-0.5,0.5H13c-0.276,0-0.5-0.225-0.5-0.5v-10C12.5,1.225,12.725,1,13,1
                                            h38c0.276,0,0.5,0.225,0.5,0.5V11.5z" class="color37474f svgShape"></path><path fill="#ffca28" d="M12,14.5c-1.104,0-2-0.896-2-2v-8H3l4,6l-4,6h16v-2H12z" class="colorffca28 svgShape"></path><path fill="#37474f" d="M19,14c-0.276,0-0.5,0.224-0.5,0.5V16H3.935l3.482-5.223c0.112-0.168,0.112-0.387,0-0.555L3.935,5H10
                                    c0.276,0,0.5-0.224,0.5-0.5S10.276,4,10,4H3C2.816,4,2.646,4.102,2.56,4.264c-0.087,0.163-0.077,0.36,0.025,0.514L6.399,10.5
                                    l-3.815,5.723c-0.102,0.153-0.112,0.351-0.025,0.514C2.646,16.898,2.816,17,3,17h16c0.276,0,0.5-0.224,0.5-0.5v-2
                                    C19.5,14.224,19.277,14,19,14z" class="color37474f svgShape"></path><path fill="#ffca28" d="M61,4.5h-7v8c0,1.104-0.896,2-2,2h-7v2h16l-4-6L61,4.5z" class="colorffca28 svgShape"></path><path fill="#37474f" d="M57.602,10.5l3.815-5.723c0.102-0.153,0.112-0.351,0.025-0.514C61.354,4.102,61.185,4,61,4h-7
                                    c-0.276,0-0.5,0.224-0.5,0.5s0.224,0.5,0.5,0.5h6.065l-3.482,5.223c-0.112,0.168-0.112,0.387,0,0.555L60.066,16H45.5v-1.5
                                    c0-0.276-0.224-0.5-0.5-0.5s-0.5,0.224-0.5,0.5v2c0,0.276,0.224,0.5,0.5,0.5h16c0.185,0,0.354-0.102,0.441-0.264
                                    c0.087-0.163,0.077-0.36-0.025-0.514L57.602,10.5z" class="color37474f svgShape"></path></svg>
                            </div>
                            <span id="countStudent" class="text-center text-primary">3690</span>
                            <span class="text-center">عدد الطلاب</span>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12"></div>
                    <div class="col-md-4 col-sm-12"></div>
                </div>
                {{-- ايقومنة المواطن --}}

                {{-- ايقونة الطلاب --}}

                {{-- ايقونة المغتربين --}}
            </div>
        </div>
        <!-- Number of Student End -->

        <!-- Slider start -->
        <div id="container-slider"  class="container-fluid py-3 mt-5 " style="background-color: #ffefeb; max-height:600px ">
        <div class="loader">
            <svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="40px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                <path fill="#000" d="M25.251,6.461c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615V6.461z">
                        <animateTransform attributeType="xml" attributeName="transform" type="rotate" from="0 25 25" to="360 25 25" dur="0.6s" repeatCount="indefinite"/>
                </path>
            </svg>
        </div>

        <!--gallery-->
        <div class="gallery-wrapper">
            <div class="content">
                <div class="gallery full" style="max-height: 500px">
                        <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" style="height:500px">
                                            <div class="image">
                                                    <img  src="{{asset('img/partie/101.jpg')}}" alt="" />
                                            </div>

                                            <div class="overlay d-none">
                                                    <div class="text-wrap">
                                                        <div class="name">
                                                                <span>Thumbnail Gallery</span>
                                                        </div>
                                                        <div class="caption">
                                                                <p>
                                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto quasi aliquam eius, blanditiis quae, explicabo praesentium corporis tempora quam et rem nulla repellendus placeat, nisi omnis earum sunt suscipit aspernatur!
                                                                </p>
                                                        </div>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="swiper-slide" style="height:500px">
                                            <div class="image">
                                                    <img  src="{{asset('img/partie/207.jpg')}}" alt="" />
                                            </div>

                                            <div class="overlay d-none">
                                                    <div class="text-wrap">
                                                        <div class="name">
                                                                <span>Thumbnail Gallery</span>
                                                        </div>
                                                        <div class="caption">
                                                                <p>
                                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto quasi aliquam eius, blanditiis quae, explicabo praesentium corporis tempora quam et rem nulla repellendus placeat, nisi omnis earum sunt suscipit aspernatur!
                                                                </p>
                                                        </div>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="swiper-slide" style="height:500px">
                                            <div class="image">
                                                    <img  src="{{asset('img/partie/205.jpg')}}" alt="" />
                                            </div>

                                            <div class="overlay d-none">
                                                    <div class="text-wrap">
                                                        <div class="name">
                                                                <span>Thumbnail Gallery</span>
                                                        </div>
                                                        <div class="caption">
                                                                <p>
                                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto quasi aliquam eius, blanditiis quae, explicabo praesentium corporis tempora quam et rem nulla repellendus placeat, nisi omnis earum sunt suscipit aspernatur!
                                                                </p>
                                                        </div>
                                                    </div>
                                            </div>
                                    </div>
                                </div>
                        </div>

                        <div class="swiper-next-button">
                                <em class="material-icons"><i class="fas fa-angle-right"></i></em>
                        </div>
                        <div class="swiper-prev-button">
                                <em class="material-icons"><i class="fas fa-angle-left "></i></em>
                        </div>
                </div>

                <div class="gallery thumb d-none">
                        <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" style="height:500px">
                                            <div class="image">
                                                    <img src="https://images.pexels.com/photos/3663038/pexels-photo-3663038.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" />

                                                    <div class="overlay">
                                                        <em class="material-icons">remove_red_eye</em>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="swiper-slide">
                                            <div class="image">
                                                    <img src="https://images.pexels.com/photos/3551207/pexels-photo-3551207.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" />

                                                    <div class="overlay">
                                                        <em class="material-icons">remove_red_eye</em>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="swiper-slide">
                                            <div class="image">
                                                    <img src="https://images.pexels.com/photos/3375493/pexels-photo-3375493.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" />

                                                    <div class="overlay">
                                                        <em class="material-icons">remove_red_eye</em>
                                                    </div>
                                            </div>
                                    </div>
                                </div>
                        </div>

                        <div class="swiper-next-button">
                                <em class="material-icons">arrow_right_alt</em>
                        </div>
                        <div class="swiper-prev-button">
                                <em class="material-icons">arrow_right_alt</em>
                        </div>
                </div>
            </div>
        </div>
            {{-- <div class="container" >
                <div id="carousel" style="height:500px"> 
                    <img src="{{asset('img/classes-1.jpg')}}" style="border-radius: 10px;" width="400px" id="item-3" /> 
                    <img src="{{asset('img/classes-2.jpg')}}" style="border-radius: 10px;" width="400px" id="item-4" /> 
                    <img src="{{asset('img/classes-3.jpg')}}" style="border-radius: 10px;" width="400px" id="item-5" /> 
                    <img src="{{asset('img/classes-4.jpg')}}" style="border-radius: 10px;" width="400px" id="item-6" /> 
                    <img src="{{asset('img/classes-5.jpg')}}" style="border-radius: 10px;" width="400px" id="item-7" /> 
                    <img src="{{asset('img/classes-6.jpg')}}" style="border-radius: 10px;" width="400px" id="item-8" /> 
                </div>
                <a href="#" class="text-primary" id="prev">السابق</a>
                <a href="#" class="text-primary" id="next">التالى</a>
            </div> --}}
        </div>
        <!-- Slider End -->

        <!-- Facilities Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">School Facilities</h1>
                    <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="facility-item">
                            <div class="facility-icon bg-primary">
                                <span class="bg-primary"></span>
                                <i class="fa fa-bus-alt fa-3x text-primary"></i>
                                <span class="bg-primary"></span>
                            </div>
                            <div class="facility-text bg-primary">
                                <h3 class="text-primary mb-3">School Bus</h3>
                                <p class="mb-0">Eirmod sed ipsum dolor sit rebum magna erat lorem kasd vero ipsum sit</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="facility-item">
                            <div class="facility-icon bg-success">
                                <span class="bg-success"></span>
                                <i class="fa fa-futbol fa-3x text-success"></i>
                                <span class="bg-success"></span>
                            </div>
                            <div class="facility-text bg-success">
                                <h3 class="text-success mb-3">Playground</h3>
                                <p class="mb-0">Eirmod sed ipsum dolor sit rebum magna erat lorem kasd vero ipsum sit</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="facility-item">
                            <div class="facility-icon bg-warning">
                                <span class="bg-warning"></span>
                                <i class="fa fa-home fa-3x text-warning"></i>
                                <span class="bg-warning"></span>
                            </div>
                            <div class="facility-text bg-warning">
                                <h3 class="text-warning mb-3">Healthy Canteen</h3>
                                <p class="mb-0">Eirmod sed ipsum dolor sit rebum magna erat lorem kasd vero ipsum sit</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="facility-item">
                            <div class="facility-icon bg-info">
                                <span class="bg-info"></span>
                                <i class="fa fa-chalkboard-teacher fa-3x text-info"></i>
                                <span class="bg-info"></span>
                            </div>
                            <div class="facility-text bg-info">
                                <h3 class="text-info mb-3">Positive Learning</h3>
                                <p class="mb-0">Eirmod sed ipsum dolor sit rebum magna erat lorem kasd vero ipsum sit</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facilities End -->


        <!-- About Start -->
        <div style="direction: rtl" class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-4">تعرف على المزيد حول عملنا وأنشطتنا التعليمية</h1>
                        <p>مدرسة عريقة قدمت وتقدم خدمة مميزة لإعداد المواطن الصالح</p>
                        <p class="mb-4">لديها إدارة متميزة ومعلمين أكفاء. نتائج الطلاب مشرفة ويعمل خريجو المدرسة في جميع جوانب الحياة. تم إعدادهم بكفاءة عالية وتزويدهم بما يؤهلهم لإكمال دراستهم والالتحاق بسوق العمل.</p>
                        <div class="row g-4 align-items-center">
                            <div class="col-sm-6">
                                <a class="btn btn-primary rounded-pill py-3 px-5" href="">إقرأ المزيد</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 about-img wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row">
                            <div class="col-12 text-center">
                                <img class="img-fluid w-75 rounded-circle bg-light p-3" src="img/about-1.jpg" alt="">
                            </div>
                            <div class="col-6 text-start" style="margin-top: -150px;">
                                <img class="img-fluid w-100 rounded-circle bg-light p-3" src="img/about-2.jpg" alt="">
                            </div>
                            <div class="col-6 text-end" style="margin-top: -150px;">
                                <img class="img-fluid w-100 rounded-circle bg-light p-3" src="img/about-3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->



        <!-- Classes Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">فصول المدرسة</h1>
                    <p>توفر بيئات التدريس / التعلم الجذابة ومساحات العمل التعاونية تركيزا للطلاب للعمل معا على الأنشطة التي تعزز التعلم. تضمن مناطق التعلم المصممة خصيصا أن الطلاب ، من رياض الأطفال حتى المدرسة الثانوية ، يمكنهم احتضان التعلم في القرن 21st بشكل كامل وإعداد أنفسهم لمهنهم المستقبلية.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="img/classes-1.jpg" alt="">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="">Art & Drawing</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="img/classes-2.jpg" alt="">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="">Color Management</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="img/classes-3.jpg" alt="">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="">Athletic & Dance</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="img/classes-4.jpg" alt="">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="">Language & Speaking</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="img/classes-5.jpg" alt="">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="">Religion & History</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="img/classes-6.jpg" alt="">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="">General Knowledge</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Classes End -->


        <!-- Testimonial Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">آراء أولياء الأمور</h1>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div style="max-height:260px" class="testimonial-item bg-light rounded p-5" style="direction: rtl">
                        <p class="fs-5">خالص شكري على الدعم الذي قدم لابني أثناء تواجده في مدرسة لبنان الأولى. إنه يحب المدرسة وقضى وقتًا رائعًا في المدرسة مع معلميه وزملائه في الفصل..</p>
                        <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="{{asset('img/user.png')}}" style="width: 90px; height: 90px;">
                            <div class="pe-3">
                                <h3 class="mb-1">Client Name</h3>
                                <span>Profession</span>
                            </div>
                            <i class="fa fa-quote-left me-auto fa-3x text-primary ms-auto d-none d-sm-flex"></i>
                        </div>
                    </div>
                    <div style="max-height:260px" class="testimonial-item bg-light rounded p-5" style="direction: rtl">
                        <p class="fs-5"> أشعر بالامتنان من مدرسة لبنان الأولى وكل من تعاملت معهم أنا وابني.</p>
                        <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="{{asset('img/user.png')}}" style="width: 90px; height: 90px;">
                            <div class="pe-3">
                                <h3 class="mb-1">Client Name</h3>
                                <span>Profession</span>
                            </div>
                            <i class="fa fa-quote-left me-auto fa-3x text-primary ms-auto d-none d-sm-flex"></i>
                        </div>
                    </div>
                    <div style="max-height:260px" class="testimonial-item bg-light rounded p-5" style="direction: rtl">
                        <p class="fs-5">توفر مدرسة لبنان الأولى بيئة ممتازة ومهارات تعليمية لإعداد الطلاب ليصبحوا قادة المستقبل</p>
                        <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="{{asset('img/user.png')}}" style="width: 90px; height: 90px;">
                            <div class="pe-3">
                                <h3 class="mb-1">Client Name</h3>
                                <span>Profession</span>
                            </div>
                            <i class="fa fa-quote-left me-auto fa-3x text-primary ms-auto d-none d-sm-flex"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        

    {{-- End Content --}}
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/odometer.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="{{asset('js/jquery.waterwheelCarousel.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>


<script>
    $(function(){
    if($('.gallery-wrapper').length){
        var galleryThumbs = new Swiper('.gallery-wrapper .content .gallery.thumb .swiper-container', {
            speed: 900,
            effect: 'slide',
            spaceBetween: 12,
            grabCursor: false,
            simulateTouch: true,
            loop: false,
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
            navigation: {
                nextEl: '.gallery-wrapper .content .gallery.thumb .swiper-next-button',
                prevEl: '.gallery-wrapper .content .gallery.thumb .swiper-prev-button',
            },
            breakpoints: {
                320: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                414: {
                    slidesPerView: 3,
                    spaceBetween: 10
                },
                768: {
                    slidesPerView: 5,
                    spaceBetween: 10
                },
                1024: {
                    slidesPerView: 7,
                    spaceBetween: 10
                }
            },
			  on: {
				  init: function() { 
				  	let containerThumbWidth = $('.gallery-wrapper .content .gallery.thumb').outerWidth();
	
	let totalThumbWidth = 0;
	
	$('.gallery.thumb .swiper-container .swiper-wrapper .swiper-slide').each(function(){
		let thumbWidth = $(this).outerWidth();
		totalThumbWidth += thumbWidth
	});
	
	
	
	if(totalThumbWidth < containerThumbWidth){
		$('.gallery.thumb .swiper-next-button, .gallery.thumb .swiper-prev-button').addClass('hide');
	}else{
		$('.gallery.thumb .swiper-next-button, .gallery.thumb .swiper-prev-button').removeClass('hide');
	}
			   }
			  }
        });

        var galleryFull = new Swiper('.gallery-wrapper .content .gallery.full .swiper-container', {
            speed: 900,
            effect: 'slide',
            slidesPerView: 3,
            spaceBetween: 0,
            centeredSlides: true,
            autoplay: {
                delay: 7000,
                disableOnInteraction: false,
                stopOnLastSlide: false
            },
            keyboard: {
                enabled: true,
            },
            grabCursor: false,
            simulateTouch: false,
            loop: true,
            navigation: {
                nextEl: '.gallery-wrapper .content .gallery.full .swiper-next-button',
                prevEl: '.gallery-wrapper .content .gallery.full .swiper-prev-button',
            },
            thumbs: {
                swiper: galleryThumbs
            },
            on: {
                slideChangeTransitionStart: function () {
                    $('.gallery-wrapper .content .gallery.full .swiper-slide .overlay').removeClass('show');
                },
                slideChangeTransitionEnd: function () {
                    $('.gallery-wrapper .content .gallery.full .swiper-slide-active .overlay').addClass('show');
                }
            }
        });
    }
});


$(window).on("load", function() {
    setTimeout(function(){
        $('.loader').fadeOut();
    }, 1000);
});
</script>

    <script>
        $(document).ready(function () {
            var carousel = $("#carousel").waterwheelCarousel({
                flankingItems: 3,
            });
            boxShadow();

            $('#prev').bind('click', function () {
                carousel.prev();
                boxShadow();
                return false
            });

            $('#next').bind('click', function () {
                carousel.next();
                boxShadow();
                return false;
            });
        });

        function boxShadow() {
            $('img').filter('[style*="z-index: 5"]').css('box-shadow', '0 0 15px rgba(0, 0, 0, 0.3)');
        }
    </script>

    <script>
        var odometerElement1 = document.getElementById('countStudent');
        var odometerElement2 = document.getElementById('countNationality');
        var odometerElement3 = document.getElementById('countEmiratis');
        var odometer1 = new Odometer({
            el: odometerElement1,
            value: 0, 
        });
        var odometer2 = new Odometer({
            el: odometerElement2,
            value: 0, 
            
        });
        let odomete3 = new Odometer({
            el: odometerElement3,
            value: 0,
            format: '(,ddd%)', 

        });

        odometer1.update(1300); 
        odometer2.update(12); 
        odomete3.update(90); 

    </script>
    <script>
        $(document).ready(function() {
            var cardHeight = $('#cardId').height();
            $('#coverId').css('margin-bottom', cardHeight + 'px');
        });
    </script>
@endsection