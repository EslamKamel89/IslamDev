<?php

namespace Database\Seeders;

use App\Models\SkillCategory;
use App\Models\Translation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillCategorySeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $categories = [
            ['name' => 'Frontend'],
            ['name' => 'Backend'],
            ['name' => 'Mobile'],
            ['name' => 'DevOps / Tools'],
            ['name' => 'Databases']
        ];
        foreach ($categories as $categoryData) {
            $skillCategory =   SkillCategory::create($categoryData);
            Translation::create([
                'model_type' => SkillCategory::class,
                'model_id' => $skillCategory->id,
                'key' => 'description',
                'locale' => 'en',
                'value' => match ($skillCategory->name) {
                    'Frontend' => 'Tools used for client-side web development.',
                    'Backend' => 'Server-side frameworks and programming languages.',
                    'Mobile' => 'Cross-platform mobile development tools.',
                    'DevOps / Tools' => 'Deployment, automation, and version control tools.',
                    'Databases' => 'Relational and non-relational database systems.',
                }

            ]);
            Translation::create([
                'model_type' => SkillCategory::class,
                'model_id' => $skillCategory->id,
                'key' => 'description',
                'locale' => 'ar',
                'value' => match ($skillCategory->name) {
                    'Frontend' => 'أدوات تُستخدم في تطوير واجهات الويب.',
                    'Backend' => 'إطارات ولغات البرمجة من جانب الخادم.',
                    'Mobile' => 'أدوات تطوير تطبيقات الهواتف متعددة المنصات.',
                    'DevOps / Tools' => 'أدوات النشر والأتمتة وإدارة الإصدار.',
                    'Databases' => 'قواعد البيانات العلاقة غير العلاقة.',
                }

            ]);
        }
    }
}
