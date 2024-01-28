@extends('website.layouts.app')
@section('content')
@section('styles')
    <style>
        .reverse-text {
            /* white-space: nowrap;
        font-size: 20px; /* يمكنك تعديل حجم الخط حسب الحاجة */
       /* writing-mode: vertical-rl;
        text-orientation: mixed; */
    }
    .reverse-text p {
        display: block;
        margin: 0 0 2px;
        color: white;
        text-transform: uppercase;
    }
    .data-body{
        background: linear-gradient(to bottom, #FE5D37, #ff6600);
    }
    </style>
@endsection
    <div  class="container ">
        <h3 style="direction: rtl" class="mt-3">من مكتب المدير</h3>
        <div style="box-shadow: 0px 8px 30px -3px;border-radius: 2px;" class="m-3">
            <div class="row">
                <div class="col col-md-3">
                    <div style="background-color:#FE5D37; padding: 40px 0 20px 0;" class="data-body">
                        <div class="avatar d-flex justify-content-center align-items-center">
                            <img src="{{asset('img/avatar.jpg')}}" width="150" style="border: 4px solid white;" alt="" class="rounded-circle">
                        </div>
                        <div class="text-data-body d-flex justify-content-center mt-3">
                            <div class="reverse-text">
                                {{-- <p class="text-center">First Lebanon School</p> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-md-9">
                    <div style="direction: rtl" class="text-body p-5">
                        <p class="p-2">"التعليم هو أقوى سلاح يمكنك استخدامه لتغيير العالم"، قال نيلسون مانديلا. في مدرسة الاضواء الخاصة ، نعمل على تثقيف كل من دماغ وقلب كل طفل.</p>
                        <p class="p-2">مرحبا بكم في مدرسة الاضواء الخاصة ، العين ، حيث يتم توفير التعليم في أفضل حالاته لجيلنا المستقبلي من KG 1 حتى الصف 12. نقوم بتثقيف طلابنا من خلال دمج الشخصية في المناهج الدراسية ثم تعريضهم شيئا فشيئا في العالم الحقيقي لتدريبهم ليس فقط ليصبحوا طلابا جيدين ولكن أيضا مواطنين صالحين في المجتمع والعالم.</p>
                        <p class="p-2">في APS، جميع الأطفال مثل اللوحات البيضاء الفارغة. نحن نسجل المعرفة التي يجب تعلمها بعناية لرعاية كل موهبة للمساعدة في التغلب على أوجه القصور. كل طفل فريد من نوعه ولديه موهبة متنوعة. في حين أن التميز الأكاديمي هو توجهنا الرئيسي ، فإننا نوفر منصة للطلاب لعرض أفضل ما لديهم في جميع جوانب الحياة.</p>
                        <p class="p-2">نحن نتواصل بانتظام مع أولياء الأمور والطلاب من خلال قنوات اتصال مختلفة للتأكد من أن القواعد واللوائح المدرسية والمعلومات والسياسات مألوفة لجميع المعنيين.</p>
                        <p class="p-2">سيسعد الموظفون دائما بمساعدة أي شخص يحتاج إلى المساعدة.</p>
                        <p class="p-2">نتمنى لكم سنة دراسية سعيدة ومثمرة.</p>
                        <p class="p-2">اخلاص</p>
                        <h4 class="text-center" style="font-weight: bold;">السيدة أميرة جعفر قريش</h4>
                        <h4 class="text-center">APS المدير</h4>
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
      var text = "First Lebanon School";
      var reverseTextContainer = $(".reverse-text");
  
      for (var i = 0; i < text.length; i++) {
        if (text[i] === ' ') {
          reverseTextContainer.append("<p>&nbsp;</p>");
        } else {
          reverseTextContainer.append("<p>" + text[i] + "</p>");
        }
      }
    });
  </script>
@endsection