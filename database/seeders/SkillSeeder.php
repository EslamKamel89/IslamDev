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
                'Vue.js' => 'A progressive JavaScript framework used for building user interfaces and single-page applications. Vue is known for its simplicity, reactivity, and ease of integration with other libraries or existing projects.',
                'Nuxt.js' => 'A powerful Vue.js framework designed for server-side rendering (SSR), static site generation (SSG), and full-stack web development. Nuxt simplifies routing, code organization, and SEO optimization for large-scale Vue applications.',
                'Tailwind CSS' => 'A utility-first CSS framework that allows developers to build custom designs directly in their markup. Tailwind gives granular control over styling without writing custom CSS, making it ideal for rapid, responsive UI development.',
                'Laravel' => 'A robust PHP framework with elegant syntax, expressive APIs, and built-in features like authentication, routing, sessions, and caching. Laravel follows the MVC architecture and promotes clean, maintainable code for modern web applications.',
                'Livewire' => 'A full-stack framework for Laravel that makes it easy to build dynamic, interactive interfaces without leaving PHP. Livewire connects HTML elements to backend logic via real-time updates using WebSockets or HTTP requests.',
                'PHP' => 'A widely-used general-purpose scripting language especially suited for web development. PHP powers millions of websites and integrates seamlessly with databases, making it a strong choice for backend logic.',
                'Flutter' => 'An open-source UI toolkit developed by Google for building cross-platform mobile, web, and desktop apps from a single codebase. Flutter uses the Dart language and provides rich widget libraries for high-performance, native-like experiences.',
                'Git' => 'A distributed version control system that enables developers to track changes in source code during software development. Git supports collaboration, branching, merging, and efficient workflow management across teams.',
                'GitHub Actions' => 'Automation platform tightly integrated with GitHub repositories, allowing developers to build, test, and deploy code automatically based on events like commits, pull requests, or scheduled tasks.',
                'Docker' => 'A platform that enables developers to containerize applications and run them in isolated environments across different systems. Docker ensures consistency between development, testing, and production setups.',
                'MySQL' => 'A fast, reliable, and widely adopted open-source relational database. MySQL is commonly used in web applications for storing structured data, supporting complex queries and transactions.',
                'PostgreSQL' => 'A powerful, open-source object-relational database with advanced features such as JSON support, geospatial data handling, and ACID compliance. PostgreSQL is known for reliability and extensibility.',
                'Firebase' => 'A Backend-as-a-Service (BaaS) provided by Google, offering tools for app development including authentication, real-time database, cloud functions, storage, and analytics — all managed in the cloud.',
                'MongoDB' => 'A NoSQL document-based database that stores data in flexible, JSON-like documents rather than rigid tables. MongoDB offers high scalability and performance for unstructured or rapidly evolving data models.'
            ],
            'ar' => [
                'Vue.js' => 'إطار عمل جافا سكريبت تدريجي لبناء واجهات المستخدم والتطبيقات ذات الصفحة الواحدة. يتميز فيبس ببساطته وتفاعلية مكوناته، وسهولة دمجه مع المكتبات الأخرى أو المشاريع الحالية.',
                'Nuxt.js' => 'إطار قوي يستند إلى فيو جي إس ويُستخدم لتوليد التطبيقات بشكل ثابت أو العروض الجانبية من الخادم (SSR). يُبسط نوكست عملية التوجيه (Routing) وتنظيم الكود وتحسين محركات البحث (SEO) للتطبيقات الكبيرة.',
                'Tailwind CSS' => 'إطار عمل سي إس إس يعتمد على الأدوات مباشرة داخل الـHTML. يمنحك تحكمًا دقيقًا في التصميم دون الحاجة إلى كتابة سي إس إس مخصص، مما يجعله مناسبًا للتطوير السريع والتصميمات الاستجابة.',
                'Laravel' => 'إطار عمل لغة بي إتش بي القوي مع بناء جميل وواجهات وظيفية جاهزة مثل المصادقة، التوجيه، الجلسات، والتخزين المؤقت. لارافل يتبع هيكل MVC ويشجع على كتابة شيفرة نظيفة وسهلة الصيانة.',
                'Livewire' => 'إطار عمل كامل للمهام الجانبية التي تبني واجهات تفاعلية دون الحاجة إلى استخدام جافا سكريبت. يربط ليف واير عناصر الـHTML بالمنطق الخلفي باستخدام تحديثات حية عبر WebSockets أو طلبات HTTP.',
                'PHP' => 'لغة برمجة شائعة الاستخدام في تطوير الويب وتتميز بقدرتها على التكامل السلس مع قواعد البيانات، مما يجعلها خيارًا قويًا لتنفيذ المنطق من جانب الخادم.',
                'Flutter' => 'مجموعة أدوات مفتوحة المصدر من جوجل لتطوير تطبيقات الهواتف متعددة المنصات بالإضافة إلى الويب وأجهزة سطح المكتب. يوفر فليتر مكتبة أجايل من المكونات لإنشاء تطبيقات أداءً قريبًا من النظام الأساسي.',
                'Git' => 'نظام إدارة إصدارات موزع يتيح للمطورين تتبع التعديلات على شيفرة التطبيق أثناء مرحلة التطوير. دعم التعاون وإدارة الفروع والدمج بين الإصدارات بكفاءة.',
                'GitHub Actions' => 'منصة تلقائية متكاملة مع مستودعات جيتهاب تسمح للمطورين بتشغيل عمليات بناء، اختبار، ونشر تلقائي للشفرة بناءً على أحداث مثل الإرسال أو طلب الدمج.',
                'Docker' => 'منصة تمكّن المطورين من تشغيل التطبيقات ضمن حاويات معزولة تعمل عبر أنظمة مختلفة، مما يضمن التوافق بين مراحل التطوير والاختبار والإنتاج.',
                'MySQL' => 'قاعدة بيانات علاقة مفتوحة المصدر سريعة وموثوقة ومنتشرة بشكل واسع في تطبيقات الويب. تدعم استعلامات معقدة والمعاملات (Transactions) والمزيد.',
                'PostgreSQL' => 'قاعدة بيانات ارتباطية كائنية التوجه (Object-Relational) مفتوحة المصدر تقدم ميزات متقدمة مثل دعم JSON، معالجة البيانات الجغرافية، والتوافق مع قواعد ACID.',
                'Firebase' => 'خدمة تطوير تطبيقات خلفية (BaaS) تقدمها جوجل وتشمل أدوات مثل نظام المصادقة، قاعدة البيانات الزمنية الحقيقية، تخزين الملفات، والوظائف السحابية — كلها تدار من السحابة.',
                'MongoDB' => 'قاعدة بيانات غير العلاقة (NoSQL) تعتمد على مستندات مشابهة للكائن (JSON) بدلاً من الجداول الثابتة. توفر مونجو دي بي مرونة عالية وقابلية التوسع لبيانات غير منظمة أو سريعة التغير.'
            ]
        ];

        return $descriptions[$lang][$name] ?? null;
    }
}
