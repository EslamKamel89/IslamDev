<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\SkillCategory;
use App\Models\Translation;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder {
    public function run(): void {
        $categories = SkillCategory::all()->keyBy('name');

        $skills = [

            'Laravel Ecosystem' => [
                ['name' => 'Laravel', 'icon' => 'logos:laravel', 'emoji' => '🔌', 'proficiency' => 95],
                ['name' => 'Livewire', 'icon' => 'logos:laravel-livewire', 'emoji' => '⚡', 'proficiency' => 90],
                ['name' => 'PHP', 'icon' => 'logos:php', 'emoji' => '🐘', 'proficiency' => 92],
                ['name' => 'PHPUnit', 'icon' => 'simple-icons:php', 'emoji' => '🧪', 'proficiency' => 85],
            ],

            'Python Ecosystem' => [
                ['name' => 'Python', 'icon' => 'logos:python', 'emoji' => '🐍', 'proficiency' => 90],
                ['name' => 'FastAPI', 'icon' => 'simple-icons:fastapi', 'emoji' => '🚀', 'proficiency' => 88],
                ['name' => 'Django', 'icon' => 'simple-icons:django', 'emoji' => '🌿', 'proficiency' => 85],
                ['name' => 'Pytest', 'icon' => 'simple-icons:pytest', 'emoji' => '🧪', 'proficiency' => 82],
            ],

            'Architecture & Systems' => [
                ['name' => 'System Design', 'icon' => 'carbon:architecture', 'emoji' => '🏗️', 'proficiency' => 90],
                ['name' => 'Clean Architecture', 'icon' => 'carbon:layers', 'emoji' => '🧩', 'proficiency' => 88],
                ['name' => 'Domain-Driven Design', 'icon' => 'carbon:model', 'emoji' => '📐', 'proficiency' => 85],
                ['name' => 'REST APIs', 'icon' => 'carbon:api', 'emoji' => '🔗', 'proficiency' => 92],
                ['name' => 'Microservices', 'icon' => 'carbon:microservices', 'emoji' => '🧱', 'proficiency' => 80],
            ],

            'Messaging / Async Systems' => [
                ['name' => 'Celery', 'icon' => 'simple-icons:celery', 'emoji' => '📨', 'proficiency' => 80],
                ['name' => 'Redis', 'icon' => 'logos:redis', 'emoji' => '🟥', 'proficiency' => 85],
                ['name' => 'Background Jobs', 'icon' => 'carbon:task', 'emoji' => '⏳', 'proficiency' => 90],
                ['name' => 'Queues', 'icon' => 'carbon:queue', 'emoji' => '📦', 'proficiency' => 88],
                ['name' => 'WebSockets', 'icon' => 'carbon:websocket', 'emoji' => '🌐', 'proficiency' => 82],
            ],

            'DevOps / Infrastructure' => [
                ['name' => 'Docker', 'icon' => 'logos:docker-icon', 'emoji' => '🐋', 'proficiency' => 85],
                ['name' => 'CI/CD', 'icon' => 'carbon:continuous-integration', 'emoji' => '⚙️', 'proficiency' => 82],
            ],

            'Databases' => [
                ['name' => 'PostgreSQL', 'icon' => 'logos:postgresql', 'emoji' => '🐘', 'proficiency' => 90],
                ['name' => 'MySQL', 'icon' => 'logos:mysql', 'emoji' => '🐬', 'proficiency' => 85],
                ['name' => 'SQLite', 'icon' => 'simple-icons:sqlite', 'emoji' => '📦', 'proficiency' => 80],
                ['name' => 'MongoDB', 'icon' => 'logos:mongodb', 'emoji' => '🍃', 'proficiency' => 75],
            ],

            'Cross-Platform / Client Applications' => [
                ['name' => 'Flutter', 'icon' => 'logos:flutter', 'emoji' => '📱', 'proficiency' => 85],
                ['name' => 'React', 'icon' => 'logos:react', 'emoji' => '⚛️', 'proficiency' => 75],
                ['name' => 'Vue.js', 'icon' => 'logos:vue', 'emoji' => '🌀', 'proficiency' => 75],
            ],
        ];

        foreach ($skills as $categoryName => $categorySkills) {

            $category = $categories[$categoryName];

            foreach ($categorySkills as $skillData) {

                $skill = Skill::create([
                    ...$skillData,
                    'skill_category_id' => $category->id,
                ]);

                Translation::create([
                    'model_type' => Skill::class,
                    'model_id' => $skill->id,
                    'locale' => 'en',
                    'key' => 'description',
                    'value' => "{$skill->name} used in production-grade backend systems and scalable architectures."
                ]);

                Translation::create([
                    'model_type' => Skill::class,
                    'model_id' => $skill->id,
                    'locale' => 'ar',
                    'key' => 'description',
                    'value' => "استخدام {$skill->name} في أنظمة خلفية احترافية قابلة للتوسع."
                ]);
            }
        }
    }
}
