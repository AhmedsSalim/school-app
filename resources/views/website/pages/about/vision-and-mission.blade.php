@extends('website.layouts.app')
@section('styles')
<style>
    .text-school span {
        font-family: "Noto Nastaliq Urdu", serif;
        font-optical-sizing: auto;
        font-weight:700;
        font-style: normal;
        }
</style>
@endsection
@section('content')
    <div  class="container " dir="rtl">
        <h3 style="direction: rtl" class="mt-3">الرؤية و الرسالة</h3>
        <p class="me-3">حتى نوحد المسیرة ونكون معًا على نفس الدرب لنحقق ھدفنا بأن نكون في الصف الأول بین المدارس التي تقدم تعلیم مبدع ومتميز في دولة الإمارات العربیة المتحدة یرتقي لمستوى جودة عالمیة یقدم للوطن خریجین مبدعین قادرین على تحمل المسئولیة، لیكونوا نواة لقادة المستقبل في كافة المجالات، لذا تبنت مدرسة لبنان رؤیتھا ورسالتها وقیمها بما یتفق مع أھدافها.</p>
        <div dir="rtl" style="box-shadow: 0px 8px 30px -3px;border-radius: 2px;" class="m-3 p-5 mt-5">
            <div class="vision text-center mb-5">
                <h4>رؤيتنا</h4>
                <div class="content-vision">
                    <p>إعــــداد جيــــــل مؤمـــن بقيمـــــه، ومنتــــــم إلى وطنــــــــــه، وفاعل في مجتمعه، في بيئة مدرسية إيجابية.</p>
                </div>
            </div>
            <div class="mission text-center mb-5">
                <h4>رسالتنا</h4>
                <div class="content-mission">
                    <p>توفير بيئة تعليمية إيجابية تساعد الطلاب على تنمية تفكيرهم العلمي وزيادة فاعليتهم في مجتمعهم بجهود معلمين أكفاء، وإدارة فاعلة تحرص على تحقيق معايير الجودة في العملية التربوية.</p>
                </div>
            </div>
            <div class="values">
                <h4>قيمنا</h4>
                <div class="contnet-values ms-3">
                    <p> <i class="fas fa-caret-left ms-3 text-primary"></i>احترام القيم والتراث الثقافي والتعددية والرأي الآخر.</p>
                    <p> <i class="fas fa-caret-left ms-3 text-primary"></i>العمل بروح الفريق: فنحن ندعم بعضنا من خلال العمل التعاوني في بيئة إيجابية.</p>
                    <p> <i class="fas fa-caret-left ms-3 text-primary"></i>التعليم المستمر: نسعى لتنمية روح الإبتكار والمبادرة والتميز بتطبيق أفضل الممارسات التعليمية بهدف تخريج طلاب مزودين برغبة دائمة في التعلم وإكتساب المعرفة وتطويرها.</p>
                    <p> <i class="fas fa-caret-left ms-3 text-primary"></i>التواصل الفعال: نلتزم بتفعيل سياسات وقنوات إتصال متنوعة مع كافة أطراف العملية التعليمية، طلاب، معلمين، إدارة المدرسة، أولياء الأمور، المجتمع المحلي.</p>
                </div>
            </div>

            <div class="text-school text-primary mt-5 text-start">
                <span>مدرسة لبنان الإولي</span>
            </div>
        </div>
    </div>
@endsection