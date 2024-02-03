@extends('website.layouts.app')
@section('content')
    <div  class="container " dir="rtl">
        <h3 style="direction: rtl" class="mt-3">الرسوم المدرسية المعتمدة 2023 - 2024</h3>
        <div dir="rtl" style="box-shadow: 0px 8px 30px -3px;border-radius: 2px;" class="m-3 p-5 mt-5">
            <h4 class="text-center mb-4 text-primary">مدرسة لبنان الأولي</h4>
            <p class="text-center mb-3">إن الجدول الوارد أدناه صالح لألعوام الدراسية القادمة إال في حالة استبداله بجدول الحق معتمد من قبل دائرة التعليم و المعرفة.</p>
            <p class="text-center mb-3">إن الرسوم المذكورة أدناه تمثل الحد الأقصى للرسوم التي يمكن للمدرسة تطبيقها للتطبيق إعتباراً من العام الدراسي 2023 - 2024 حتى إي إشعار آخر من دائرة التعليم و المعرفة. </p>
            <p class="text-center mb-3">أن الرسـوم المذكورة أدناه لا يمكن زيادتها بدون موافقة خطية من قبل دائرة التعليم و المعرفة.</p>
            <button onclick="downloadFile()" class="btn text-primary m-auto d-flex fw-bold">تحميل الجدول</button>

            <div class="parent-image">
                <img src="{{ asset('img/fees.png')}}" width="100%" alt="">
            </div>

            <div class="content-conditions">
                <h4>الشروط الواجب إتباعها من قبل المدرسة تتضمن :</h4>
                <p class="me-3">يتوجب على المدارس تحصيل الرسوم الدراسية من أولياء الأمور على ثلاث دفعات على الأقل ، و يجب أن تضمن أيضا ما يلي :</p>
                <div class="div-contenet mb-4 me-5">
                    <p>أ- الرسوم يجب أن تحصل فى ضوء السياسة رقم 39 من دليل سياسات المدارس الخاصة و ارشاداتها</p>
                    <p>ب- إن رسوم التسجيل هي جزء من الرسوم الدراسية، و يجب أن لا تزيد عن 5% من الرسوم الدراسية السنوية</p>
                </div>
                <h5>يحظر على المدرسة تقاضى أي ضمان مالى أو وديعة مالية من أولياء الأمور لتسجيل أبنائهم حتى ولو كانت مستردة</h5>
                <h5>يرجى العلم بأن المدارس الخاصة خاضعة للوائح و سياسات دائرة التعليم و المعرفة المطبقة حاليا و لأى تعديلات مستقبلية على هذه اللوائح و السياسات.</h5>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    function downloadFile() {
        var fileName = "الاقساط 2023.2024.pdf";
        var filePath = "{{asset('files/الاقساط 2023.2024.pdf')}}";
        var link = document.createElement("a");

        link.id = "download-link";
        link.innerText = "تحميل ملف PDF";
        link.href = filePath;
        link.download = fileName;
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
        }
</script>
@endsection