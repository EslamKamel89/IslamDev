<?php

namespace Database\Seeders;

use App\Models\SkillCategory;
use App\Models\Translation;
use Illuminate\Database\Seeder;

class SkillCategorySeeder extends Seeder {
    public function run(): void {
        $categories = [
            'Python Ecosystem',
            'Laravel Ecosystem',
            'Architecture & Systems',
            'Messaging / Async Systems',
            'DevOps / Infrastructure',
            'Databases',
            'Cross-Platform / Client Applications',
        ];

        foreach ($categories as $name) {

            $category = SkillCategory::create([
                'name' => $name,
            ]);

            Translation::create([
                'model_type' => SkillCategory::class,
                'model_id' => $category->id,
                'key' => 'description',
                'locale' => 'en',
                'value' => match ($name) {
                    'Python Ecosystem' => 'Modern Python backend frameworks and tooling for building scalable APIs and services.',
                    'Laravel Ecosystem' => 'Production-grade Laravel systems including Livewire, testing, and domain-driven design.',
                    'Architecture & Systems' => 'Backend architecture patterns, system design principles, and distributed system fundamentals.',
                    'Messaging / Async Systems' => 'Background job processing, event-driven systems, queues, and asynchronous execution.',
                    'DevOps / Infrastructure' => 'Containerization, CI/CD pipelines, deployment workflows, and runtime infrastructure.',
                    'Databases' => 'Relational and non-relational database systems optimized for performance and scalability.',
                    'Cross-Platform / Client Applications' => 'Frontend and cross-platform technologies integrated with backend systems.',
                }
            ]);

            Translation::create([
                'model_type' => SkillCategory::class,
                'model_id' => $category->id,
                'key' => 'description',
                'locale' => 'ar',
                'value' => match ($name) {
                    'Python Ecosystem' => 'أطر وأدوات بايثون الحديثة لبناء واجهات برمجية وخدمات خلفية قابلة للتوسع.',
                    'Laravel Ecosystem' => 'أنظمة لارافل إنتاجية تشمل لايف واير والاختبارات والتصميم المعتمد على المجال.',
                    'Architecture & Systems' => 'أنماط تصميم الأنظمة الخلفية ومفاهيم تصميم الأنظمة الموزعة.',
                    'Messaging / Async Systems' => 'معالجة المهام الخلفية والأنظمة المعتمدة على الأحداث وتنفيذ العمليات غير المتزامنة.',
                    'DevOps / Infrastructure' => 'الحاويات، خطوط CI/CD، آليات النشر، والبنية التحتية للتشغيل.',
                    'Databases' => 'قواعد بيانات علائقية وغير علائقية مُهيأة للأداء العالي وقابلية التوسع.',
                    'Cross-Platform / Client Applications' => 'تقنيات الواجهات والتطبيقات متعددة المنصات المتكاملة مع الأنظمة الخلفية.',
                }
            ]);
        }
    }
}
