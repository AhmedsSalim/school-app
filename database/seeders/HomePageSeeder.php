<?php

namespace Database\Seeders;

use App\Models\HomePage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $keysAndValues = [
            'image' => "/img/لبنان2.jpg",
            'title' => 'مدرسة لبنان الأولي',
            'paragraph' => 'في مدرسة لبنان الأولى، ندمج بين المهارات الإبداعية والحياتية في مختلف جوانب العملية التعليمية، ونبني طلاباً يتمتعون بالمسؤولية الاجتماعية والكفاءة العالية والروح القيادية، ونتبنى منظوراً عالمياً يحترم التراث الإماراتي وكل ثقافات العالم.',
            'logo' => '/img/First Lebanon School.jpeg',
            'statistics' => [
                "students_count" => 1300,
                "nationalities" => 12,
                "emirati_students_percentage" => 90
            ],
            'gallery' => [
                "img/partie/207.jpg",
                "img/partie/205.jpg",
                "img/partie/201.jpg"
            ],
            'parent_ratings' => [
                [
                    "name" => "mohamed",
                    "job"  => "accountant",
                    "comment" => "توفر مدرسة لبنان الأولى بيئة ممتازة ومهارات تعليمية لإعداد الطلاب ليصبحوا قادة المستقبل"
                ],
                [
                    "name" => "ahmed",
                    "job"  => "teacher",
                    "comment" => "أشعر بالامتنان من مدرسة لبنان الأولى وكل من تعاملت معهم أنا وابني."
                ],
                [
                    "name" => "khaled",
                    "job"  => "programmer",
                    "comment" => ">خالص شكري على الدعم الذي قدم لابني أثناء تواجده في مدرسة لبنان الأولى. إنه يحب المدرسة وقضى وقتًا رائعًا في المدرسة مع معلميه وزملائه في الفصل."
                ],

            ],
        ];



        foreach ($keysAndValues as $key => $value) {
            DB::table('home_pages')->insert([
                'key' => $key,
                'value' => json_encode($value),
            ]);
        }
    }
}
