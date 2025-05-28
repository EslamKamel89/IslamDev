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
                // 'title' => 'DevTalk a blog build by programmers to programmers',
                // 'slug' => 'vue-ecommerce-dashboard',
                'thumbnail' => '/storage/projects/devtalk_thumbnail.png',
                'live_url' => 'https://devtalk.islamdev.com/',
                'github_url' => 'https://github.com/EslamKamel89/DevTalk',
                'start_date' => '17-04-2025',
                'end_date' => '15-04-2025',
                'is_featured' => true,
                'order' => 1,
                'status' => 'published',
                'images' => [
                    "/storage/projects/devtalk_01.png",
                    "/storage/projects/devtalk_02.png",
                    "/storage/projects/devtalk_03.png",
                    "/storage/projects/devtalk_04.png",
                    "/storage/projects/devtalk_05.png",
                ],
                // 'videos' => ["https://youtube.com/watch?v=... "],
                'title' => [
                    'en' => 'DevTalk – A Developer-Centric Blog Built by Programmers, for Programmers',
                    'ar' => 'ديف توك – منصة مدونات موجهة للمطورين، بُنيت على يد مبرمجين، لمجتمع المبرمجين'
                ],
                'description' => [
                    'en' => 'A powerful blog platform built with VILTS stack and shadcn-vue UI components. Designed for developers and writers who want a modern, customizable, and responsive discussion experience.',
                    'ar' => " منصة مدونات قوية مبنية على تكنولوجيا VILTS ومرفقة بواجهة shadcn-vue. صُمّمت لكُتّاب المحتوى والمطورين الذين يبحثون عن تجربة حديثة وقابلة للتخصيص في إدارة النقاشات.",
                ],
                'features' => [
                    'en' => [
                        'Built using the VILTS stack for high performance and full-stack capabilities',
                        'Modern UI powered by shadcn-vue components and Tailwind CSS',
                        'Filter discussions by: All, Popular, No Replies, My Discussions, Participating, or Topics',
                        'Beautiful drawer-style editor with Markdown support and live preview for new discussions',
                        'Jump to last reply with deep linking and auto-scroll to exact position on page',
                        'Pinned posts appear first, followed by most recently updated discussions',
                        'User avatars displayed in discussion cards for better identity recognition',
                        'Authenticated users can comment and reply to any discussion'
                    ],
                    'ar' => [
                        'تم بناء التطبيق باستخدام تكنولوجيا VILTS لضمان الأداء العالي والتكامل الكامل',
                        'واجهة حديثة ومريحة باستخدام مكونات shadcn-vue وتايلويند سي إس إس',
                        'يمكنك تصفية النقاشات حسب: الكل، الأكثر شيوعًا، بدون ردود، مناقشاتي، المشاركون، أو المواضيع',
                        'محرر نقاش جميل مع دعم تنسيق Markdown ومعاينة مباشرة أثناء الكتابة',
                        'التنقل الفوري إلى آخر رد مع ربط مباشر وتحريك الشاشة للوصول إليه بدقة',
                        'المنشورات المثبتة تظهر أولاً، يتبعها أحدث المناقشات نشاطًا',
                        'صور المستخدم تظهر في بطاقات المناقشات التي شاركت فيها',
                        'يمكن للمستخدمين المسجلين إرسال تعليقات وإضافة ردود على أي مناقشة'
                    ]
                ],
                'skills' => [1, 3, 4, 6, 11]
            ],
            [
                // 'title' => 'VoltZone E-commerce website',
                // 'slug' => 'vue-ecommerce-dashboard',
                'thumbnail' => '/storage/projects/voltzone_thumbnail.png',
                // 'live_url' => 'https://demo.ecommerce.islamdev.com ',
                'github_url' => 'https://github.com/EslamKamel89/VoltZone',
                'start_date' => '07-04-2025',
                // 'end_date' => '2024-06-15',
                'is_featured' => true,
                'order' => 2,
                'status' => 'draft',
                'images' => [
                    "/storage/projects/voltzone_01.png",
                    "/storage/projects/voltzone_02.png",
                    "/storage/projects/voltzone_03.png",
                    "/storage/projects/voltzone_04.png",
                    "/storage/projects/voltzone_05.png",
                    "/storage/projects/voltzone_06.png",
                    "/storage/projects/voltzone_07.png",
                    "/storage/projects/voltzone_08.png",
                    "/storage/projects/voltzone_09.png",
                    "/storage/projects/voltzone_10.png",
                    "/storage/projects/voltzone_11.png",
                    "/storage/projects/voltzone_12.png",
                    "/storage/projects/voltzone_13.png",
                    "/storage/projects/voltzone_14.png",
                    "/storage/projects/voltzone_15.png",
                    "/storage/projects/voltzone_16.png",
                    "/storage/projects/voltzone_17.png",
                    "/storage/projects/voltzone_18.png",
                    "/storage/projects/voltzone_19.png",
                ],
                // 'videos' => ["https://youtube.com/watch?v=... "],
                'title' => [
                    'en' => 'VoltZone – A TALL Stack-Powered E-Commerce Platform for Modern Businesses',
                    'ar' => 'فولت زون – منصة تجارة إلكترونية مبنية على تكنولوجيا TALL Stack لتجار الأعمال الحديثة'
                ],
                'description' => [
                    'en' => 'A modern e-commerce platform built with the TALL stack, featuring Flux UI components and Livewire Volt for a fast, responsive admin experience. Integrated with Stripe for secure payments and powered by FilamentPHP for professional dashboard management.',
                    'ar' => "منصة تجارة إلكترونية حديثة مبنية على تكنولوجيا TALL، مع استخدام مكونات Flux UI ومحرك لارافل ليف واير فولت لإدارة الأداء والواجهة بسلاسة. تدعم الدفع عبر Stripe وتستخدم منصة FilamentPHP لإدارة لوحة التحكم الاحترافية."
                ],
                'features' => [
                    'en' => [
                        'Built using the latest TALL Stack (Tailwind CSS, Alpine.js, Laravel, Livewire)',
                        'Uses Livewire Volt API for faster development and smoother interactions',
                        'Modern and responsive UI powered by official Flux UI component library',
                        'Fully integrated with Stripe for secure online payment processing',
                        'Admin dashboard built with FilamentPHP – powerful, extensible, and beautiful',
                        'Product catalog, cart, checkout, and order tracking system',
                        'Live search and filtering with instant updates via Livewire',
                        'User-friendly interface with accessibility and RTL support'
                    ],
                    'ar' => [
                        'تم بناء التطبيق باستخدام تكنولوجيا TALL Stack (تايلويند سي إس إس، ألبين جي إس، لارافل، ليف واير)',
                        'استخدام محرك ليف واير فولت للتطوير السريع وتجربة تفاعلية أكثر سلاسة',
                        'واجهة مستخدم عصرية ومستجيبة باستخدام مكتبة مكونات Flux الرسمية',
                        'دمج كامل مع Stripe لمعالجة المدفوعات بأمان',
                        'لوحة تحكم إدارية مبنية على FilamentPHP – قوية، قابلة للتوسيع، وجذابة بصريًا',
                        'نظام كتالوج المنتجات، السلة، الدفع، ومتابعة الطلبات',
                        'بحث وفلترة مباشر مع تحديثات فورية عبر ليف واير',
                        'واجهة مرنة وسهلة الاستخدام مع دعم كامل للغات العربية (RTL) والإمكانية'
                    ]
                ],
                'skills' => [3, 4, 5, 6, 11]
            ],

        ];
        foreach ($projects as $i => $projectData) {
            /** @var Project $project */
            $project =    Project::create([
                // "title" => $projectData['title'],
                // "slug" => $projectData['slug'],
                "thumbnail" => $projectData['thumbnail'] ?? null,
                "live_url" => $projectData['live_url'] ?? null,
                "github_url" => $projectData['github_url'] ?? null,
                "start_date" => $projectData['start_date'] ?? null,
                "end_date" => $projectData['end_date'] ?? null,
                "is_featured" => $projectData['is_featured'],
                "order" => $projectData['order'],
                "status" => $projectData['status'],
                'videos' => json_encode($projectData['videos'] ?? []),
                'images' => json_encode($projectData['images'] ?? [])
            ]);
            foreach (['description', 'features', 'title'] as $key) {
                foreach (['ar', 'en'] as $locale) {
                    Translation::create([
                        "model_type" => Project::class,
                        "model_id" => $project->id,
                        "locale" => $locale,
                        "key" => $key,
                        "value" => $key == 'features' ? json_encode($projectData[$key][$locale]) : $projectData[$key][$locale],
                    ]);
                }
            }
            $project->skills()->sync($projectData['skills']);
        }
    }
}
