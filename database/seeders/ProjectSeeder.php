<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Translation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $projects = [
            [
                'title' => 'DevTalk a blog build by programmers to programmers',
                // 'slug' => 'vue-ecommerce-dashboard',
                'thumbnail' => '/img/project1.jpg',
                'live_url' => 'https://demo.ecommerce.islamdev.com ',
                'github_url' => 'https://github.com/eslamkamel89/vue-ecommerce-dashboard ',
                'start_date' => '2024-03-01',
                'end_date' => '2024-06-15',
                'is_featured' => true,
                'order' => 1,
                'status' => 'published',
                'images' => ["/img/1.jpg", "/img/2.jpg"],
                'videos' => ["https://youtube.com/watch?v=... "],
                'description' => [
                    'en' => 'A Vue-based admin panel integrated with Laravel backend.',
                    'ar' => 'لوحة تحكم مبنية على فيو ومدمجة مع لارافل من الخلفية.'
                ],
                'features' => [
                    'en' => [
                        'Role-based access control',
                        'Real-time data visualization',
                        'Multi-language support'
                    ],
                    'ar' => [
                        'نظام تحكم بالوصول حسب الدور',
                        'عرض بيانات زمنية حقيقية',
                        'دعم متعدد اللغات'
                    ]
                ],
                'skills' => [1, 4] // skill IDs (e.g., Vue.js, Laravel)
            ],
            [
                'title' => 'Vue E-commerce Dashboard',
                // 'slug' => 'vue-ecommerce-dashboard',
                'thumbnail' => '/img/project1.jpg',
                'live_url' => 'https://demo.ecommerce.islamdev.com ',
                'github_url' => 'https://github.com/eslamkamel89/vue-ecommerce-dashboard ',
                'start_date' => '2024-03-01',
                'end_date' => '2024-06-15',
                'is_featured' => true,
                'order' => 1,
                'status' => 'published',
                'images' => ["/img/1.jpg", "/img/2.jpg"],
                'videos' => ["https://youtube.com/watch?v=... "],
                'description' => [
                    'en' => 'A Vue-based admin panel integrated with Laravel backend.',
                    'ar' => 'لوحة تحكم مبنية على فيو ومدمجة مع لارافل من الخلفية.'
                ],
                'features' => [
                    'en' => [
                        'Role-based access control',
                        'Real-time data visualization',
                        'Multi-language support'
                    ],
                    'ar' => [
                        'نظام تحكم بالوصول حسب الدور',
                        'عرض بيانات زمنية حقيقية',
                        'دعم متعدد اللغات'
                    ]
                ],
                'skills' => [1, 4] // skill IDs (e.g., Vue.js, Laravel)
            ],

        ];
        foreach ($projects as $i => $projectData) {
            $project =    Project::create([
                "title" => $projectData['title'],
                // "slug" => $projectData['slug'],
                "thumbnail" => $projectData['thumbnail'] ?? null,
                "live_url" => $projectData['live_url'] ?? null,
                "github_url" => $projectData['github_url'] ?? null,
                "start_date" => $projectData['start_date'] ?? null,
                "end_date" => $projectData['end_date'] ?? null,
                "is_featured" => $projectData['is_featured'],
                "order" => $projectData['order'],
                "status" => $projectData['status'],
                'videos' => json_encode($projectData['videos']),
                'images' => json_encode($projectData['images'])
            ]);
            foreach (['description', 'features'] as $key) {
                foreach (['ar', 'en'] as $locale) {
                    Translation::create([
                        "model_type" => Project::class,
                        "model_id" => $project->id,
                        "locale" => $locale,
                        "key" => $key,
                        "value" => json_encode($projectData[$key][$locale]),
                    ]);
                }
            }
        }
    }
}
