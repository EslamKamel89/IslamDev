<?php

namespace Database\Seeders;

use App\Models\Feedback;
use App\Models\Translation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeedbackSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $feedbacks = [
            [
                'id' => 1,
                'rating' => 5,
                'name' => [
                    'en' => 'Ahmed Mohamed',
                    'ar' => 'أحمد محمد',
                ],
                'title' => [
                    'en' => 'CTO @ TechNova',
                    'ar' => 'المؤسس والمدير التقني @ تك نوفا',
                ],
                'quote' => [
                    'en' => 'Islam delivered the project before deadline, with excellent attention to detail and communication. A true full-stack professional.',
                    'ar' => 'سلم المشروع قبل الموعد المحدد، مع اهتمام متميز بالتفاصيل والتواصل. مطور كامل من الطراز الأول.',
                ],
                'contact' => [
                    'en' => json_encode([
                        'email' => 'ahmed@technova.com',
                        'linkedin' => 'https://linkedin.com/in/ahmedmohamed '
                    ]),
                    'ar' => json_encode([
                        'البريد الإلكتروني' => 'ahmed@technova.com',
                        'لينكد إن' => 'https://linkedin.com/in/ahmedmohamed '
                    ]),
                ]
            ],
            [
                'id' => 2,
                'rating' => 5,
                'name' => [
                    'en' => 'Fatima Al-Sayed',
                    'ar' => 'فاطمة السيد',
                ],
                'title' => [
                    'en' => 'Project Manager @ DevEdge',
                    'ar' => 'مديرة المشاريع @ ديف إيدج',
                ],
                'quote' => [
                    'en' => 'Working with Islam was a pleasure. He understood our needs quickly and built a scalable Laravel backend that integrates seamlessly with our frontend.',
                    'ar' => 'كان العمل مع الإسلام ممتعًا ومريحًا. فهم احتياجاتنا بسرعة وبنى محرك خلفي قابل للتوسع باستخدام لارافل، سلس في التكامل مع الواجهة الأمامية.',
                ],
                'contact' => [
                    'en' => json_encode([
                        'email' => 'fatima@devedge.com',
                        'company' => 'DevEdge',
                    ]),
                    'ar' => json_encode([
                        'البريد الإلكتروني' => 'fatima@devedge.com',
                        'الشركة' => 'ديف إيدج',
                    ]),
                ]
            ],
            [
                'id' => 3,
                'rating' => 4,
                'name' => [
                    'en' => 'Youssef Karim',
                    'ar' => 'يوسف كريم',
                ],
                'title' => [
                    'en' => 'Co-founder @ Appify',
                    'ar' => 'الشريك المؤسس @ أبفي',
                ],
                'quote' => [
                    'en' => 'Highly recommend Islam for any full-stack or mobile development work. He’s reliable, skilled, and always delivers quality code.',
                    'ar' => 'أنصح بشدة بإسلام في أي مشروع تطوير شامل أو تطبيقات الهواتف. شخصية موثوقة، ماهرة، ودومًا تقدم شيفرة عالية الجودة.',
                ],
                'contact' => [
                    'en' => json_encode([
                        'email' => 'youssef@appify.io',
                        'website' => 'https://appify.io '
                    ]),
                    'ar' => json_encode([
                        'البريد الإلكتروني' => 'youssef@appify.io',
                        'الموقع' => 'https://appify.io '
                    ]),
                ]
            ]
        ];
        foreach ($feedbacks as $i => $feedback) {
            DB::table('feedbacks')->insert([
                'id' => $feedback['id'],
                'rating' => $feedback['rating'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            foreach (['quote', 'name', 'title', 'contact'] as $key) {
                foreach (['ar', 'en'] as $locale) {
                    Translation::create([
                        'model_type' => Feedback::class,
                        'model_id' => $feedback['id'],
                        'locale' => $locale,
                        'key' => $key,
                        'value' => $feedback[$key][$locale],
                    ]);
                }
            }
        }
    }
}
