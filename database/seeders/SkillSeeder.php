<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\Translation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $skillsByCategory = [
            1 => [ // Frontend
                ['name' => 'Vue.js', 'emoji' => '🌀', 'icon' => 'logos:vue', 'proficiency' => 90],
                ['name' => 'Nuxt.js', 'emoji' => '🔷', 'icon' => 'logos:nuxt-icon', 'proficiency' => 85],
                ['name' => 'Tailwind CSS', 'emoji' => '📘', 'icon' => 'logos:tailwindcss-icon', 'proficiency' => 80],
            ],
            2 => [ // Backend
                ['name' => 'Laravel', 'emoji' => '🔌', 'icon' => 'logos:laravel', 'proficiency' => 90],
                ['name' => 'Livewire', 'emoji' => '⚡', 'icon' => 'logos:laravel-livewire', 'proficiency' => 85],
                ['name' => 'PHP', 'emoji' => '🐘', 'icon' => 'logos:php', 'proficiency' => 90],
            ],
            3 => [ // Mobile
                ['name' => 'Flutter', 'emoji' => '📱', 'icon' => 'logos:flutter', 'proficiency' => 85],
            ],
            4 => [ // DevOps / Tools
                ['name' => 'Git', 'emoji' => '🐙', 'icon' => 'logos:git-icon', 'proficiency' => 80],
                ['name' => 'GitHub Actions', 'emoji' => '⚙️', 'icon' => 'logos:github-actions', 'proficiency' => 75],
                ['name' => 'Docker', 'emoji' => '🐋', 'icon' => 'logos:docker-icon', 'proficiency' => 70],
            ],
            5 => [ // Databases
                ['name' => 'MySQL', 'emoji' => '🐬', 'icon' => 'logos:mysql', 'proficiency' => 80],
                ['name' => 'PostgreSQL', 'emoji' => '🐘', 'icon' => 'logos:postgresql', 'proficiency' => 75],
                ['name' => 'Firebase', 'emoji' => '🔥', 'icon' => 'logos:firebase', 'proficiency' => 70],
                ['name' => 'MongoDB', 'emoji' => '🍃', 'icon' => 'logos:mongodb', 'proficiency' => 65],
            ]
        ];
        foreach ($skillsByCategory as $categoryId => $skills) {
            foreach ($skills as $index => $skillData) {
                $skill = Skill::create(array_merge($skillData, ['skill_category_id' => $categoryId]));
                Translation::create([
                    'model_type' => Skill::class,
                    'model_id' => $skill->id,
                    'locale' => 'en',
                    'key' => 'description',
                    'value' => $this->getDescription($skill->name, 'en')
                ]);
                Translation::create([
                    'model_type' => Skill::class,
                    'model_id' => $skill->id,
                    'locale' => 'ar',
                    'key' => 'description',
                    'value' => $this->getDescription($skill->name, 'ar')
                ]);
            }
        }
    }
    private function getDescription(string $name, string $lang): ?string {
        $descriptions = [
            'en' => [
                'Vue.js' => 'Progressive JavaScript framework for building UIs',
                'Nuxt.js' => 'Vue framework for server-side rendered apps',
                'Tailwind CSS' => 'Utility-first CSS framework',
                'Laravel' => 'PHP framework for modern web applications',
                'Livewire' => 'Live updating components without JS',
                'PHP' => 'General-purpose scripting language',
                'Flutter' => 'Cross-platform mobile SDK by Google',
                'Git' => 'Version control system',
                'GitHub Actions' => 'CI/CD pipeline tool',
                'Docker' => 'Containerization platform',
                'MySQL' => 'Open-source relational database',
                'PostgreSQL' => 'Powerful open-source relational DBMS',
                'Firebase' => "Google's backend-as-a-service",
                'MongoDB' => 'NoSQL document-oriented database'
            ],
            'ar' => [
                'Vue.js' => 'إطار عمل جافا سكريبت تدريجي لبناء واجهات المستخدم',
                'Nuxt.js' => 'إطار Vue لإنشاء تطبيقات مُحسَّنة للبحث والخوادم',
                'Tailwind CSS' => 'إطار عمل CSS يعتمد على الأدوات',
                'Laravel' => 'إطار عمل PHP لمواقع الويب الحديثة',
                'Livewire' => 'مكونات تحديثية بدون استخدام جافا سكريبت',
                'PHP' => 'لغة برمجة عامة الغرض',
                'Flutter' => 'حزمة تطوير التطبيقات متعددة المنصات من جوجل',
                'Git' => 'نظام تحكم في إصدار الشفرة',
                'GitHub Actions' => 'أداة أنابيب CI/CD',
                'Docker' => 'منصة تجميع التطبيقات',
                'MySQL' => 'قاعدة بيانات علاقة مفتوحة المصدر',
                'PostgreSQL' => 'نظام إدارة قاعدة بيانات علاقة قوي ومفتوح المصدر',
                'Firebase' => 'خدمة بناء تطبيقات خلفية من جوجل',
                'MongoDB' => 'قاعدة بيانات NoSQL موجهة للمستندات'
            ]
        ];

        return $descriptions[$lang][$name] ?? null;
    }
}
