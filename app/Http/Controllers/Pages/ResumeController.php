<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResumeController extends Controller {
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request) {

        $data = [
            'personal' => [
                'name' => 'Islam Ahmed',
                'phone' => '+971 50 123 4567',
                'email' => 'eslamkamel89@gmail.com',
                'website' => 'https://islamdev.com ',
                'links' => [
                    ['label' => 'LinkedIn', 'url' => 'https://linkedin.com/in/eslamkamel89 '],
                    ['label' => 'GitHub', 'url' => 'https://github.com/EslamKamel89 ']
                ]
            ],
            'sections' => [
                [
                    'id' => 'summary',
                    'title' => [
                        'en' => 'Professional Summary',
                        'ar' => 'الملخص المهني'
                    ],
                    'items' => [
                        [
                            'description' => [
                                'en' => 'Full Stack Developer with 5+ years of experience building scalable web and mobile applications using Laravel, Livewire, Vue.js, Nuxt.js, and Flutter. Proven ability to deliver high-performance applications while maintaining clean code and seamless integrations.',
                                'ar' => 'مطور تطبيقات كاملة مع أكثر من 5 سنوات خبرة في بناء تطبيقات ويب وهواتف قابلة للتوسيع باستخدام لارافل، ليف واير، فيو جي إس، نوكست جي إس، وفلاتر. مهارات عالية في تسليم تطبيقات أداء عالي مع الحفاظ على شيفرة نظيفة ودمج سلس.'
                            ]
                        ]
                    ]
                ],
                [
                    'id' => 'experience',
                    'title' => [
                        'en' => 'Work Experience',
                        'ar' => 'الخبرة العملية'
                    ],
                    'items' => [
                        [
                            'company' => 'Gaztec',
                            'location' => 'Dubai, UAE',
                            'role' => [
                                'en' => 'Innovative Software Engineer',
                                'ar' => 'مهندس برمجيات مبتكر'
                            ],
                            'dates' => [
                                'start' => '2022-06-01',
                                'end' => null,
                            ],
                            'description' => [
                                'en' => 'Led development of a Laravel-based SaaS platform for real-time analytics, supporting 1000+ concurrent users. Built dynamic UIs using Laravel Livewire, reducing reliance on JavaScript while improving page load speed by 30%. Developed responsive admin dashboards using Vue.js and Tailwind CSS.',
                                'ar' => 'قادت تطوير منصة SaaS مبنية على لارافل لتحليل البيانات الزمنية الحقيقية، وتخدم أكثر من 1000 مستخدم متزامن. بُنيت واجهات المستخدم الديناميكية باستخدام ليف واير لتقليل الاعتماد على الجافا سكريبت وتحسين سرعة التحميل بنسبة 30٪.'
                            ],
                            'tools' => ['Laravel', 'Livewire', 'Vue.js', 'Docker']
                        ],
                        [
                            'company' => 'TechNova',
                            'location' => 'Cairo, Egypt',
                            'role' => [
                                'en' => 'Software Developer',
                                'ar' => 'مطور برمجي'
                            ],
                            'dates' => [
                                'start' => '2020-01-01',
                                'end' => '2022-05-01'
                            ],
                            'description' => [
                                'en' => 'Developed RESTful APIs using Laravel, serving as backend for both web and mobile apps. Implemented Livewire for interactive components without JavaScript-heavy frameworks.',
                                'ar' => 'قمت بتطوير واجهات برمجية REST باستخدام لارافل كمحرك خلفي للتطبيقات الويب والهواتف. استخدمت ليف واير لبنائها بطريقة تفاعلية دون الحاجة إلى إطارات جافا سكريبت ضخمة.'
                            ],
                            'tools' => ['PHP 8', 'Laravel 9', 'REST APIs']
                        ]
                    ]
                ],
                [
                    'id' => 'skills',
                    'title' => [
                        'en' => 'Technical Skills',
                        'ar' => 'المهارات التقنية'
                    ],
                    'items' => [
                        [
                            'category' => 'Backend',
                            'skills' => ['Laravel', 'Livewire', 'PHP', 'Node.js', 'MySQL', 'PostgreSQL', 'MongoDB']
                        ],
                        [
                            'category' => 'Frontend',
                            'skills' => ['Vue.js', 'Nuxt.js', 'Tailwind CSS', 'TypeScript', 'Alpine.js']
                        ],
                        [
                            'category' => 'Mobile',
                            'skills' => ['Flutter', 'Firebase']
                        ],
                        [
                            'category' => 'DevOps / Tools',
                            'skills' => ['Docker', 'Git', 'GitHub Actions', 'Linux', 'Laravel Forge']
                        ]
                    ]
                ],
                [
                    'id' => 'projects',
                    'title' => [
                        'en' => 'Projects',
                        'ar' => 'المشاريع'
                    ],
                    'items' => [
                        [
                            'title' => [
                                'en' => 'Vue E-commerce Dashboard',
                                'ar' => 'لوحة تحكم التجارة الإلكترونية'
                            ],
                            'role' => 'Lead Developer',
                            'year' => '2023',
                            'liveUrl' => 'https://demo.islamdev.com ',
                            'githubUrl' => 'https://github.com/EslamKamel89/vue-ecommerce-dashboard ',
                            'description' => [
                                'en' => 'Built a full admin dashboard with role-based access control. Integrated Stripe for secure payment processing and reduced page load time by 35% using lazy loading and caching.',
                                'ar' => 'بُنيت لوحة تحكم كاملة مع نظام تحكم بالوصول حسب الدور. تم دمج Stripe للمعالجة الآمنة للمدفوعات وتم تحسين زمن التحميل بنسبة 35٪.'
                            ]
                        ],
                        [
                            'title' => [
                                'en' => 'Flutter Task Manager',
                                'ar' => 'مدير المهام فليتر'
                            ],
                            'role' => 'Full Stack Developer',
                            'year' => '2022',
                            'githubUrl' => 'https://github.com/EslamKamel89/flutter-todo ',
                            'description' => [
                                'en' => 'Cross-platform task management app with real-time sync using Firebase. Achieved 4.8/5 rating in internal testing.',
                                'ar' => 'تطبيق إدارة المهام عبر المنصات مع مزامنة مباشرة عبر فايربيس. حصل على تقييم 4.8/5 في الاختبار الداخلي.'
                            ]
                        ]
                    ]
                ],
                [
                    'id' => 'education',
                    'title' => [
                        'en' => 'Education',
                        'ar' => 'التعليم'
                    ],
                    'items' => [
                        [
                            'institution' => 'Cairo University',
                            'degree' => 'Bachelor of Science in Computer Science',
                            'dates' => [
                                'start' => '2016',
                                'end' => '2020'
                            ],
                            'description' => [
                                'en' => 'Graduated with honors in Computer Science.',
                                'ar' => 'تخرجت بامتياز في علوم الحاسوب.'
                            ]
                        ]
                    ]
                ],
                [
                    'id' => 'certifications',
                    'title' => [
                        'en' => 'Certifications',
                        'ar' => 'الشهادات'
                    ],
                    'items' => [
                        [
                            'issuer' => 'Laravel Academy',
                            'issueDate' => '2022-03-01',
                            'title' => [
                                'en' => 'Laravel Certification',
                                'ar' => 'شهادة لارافل'
                            ]
                        ],
                        [
                            'issuer' => 'Vue Mastery',
                            'issueDate' => '2021-12-01',
                            'title' => [
                                'en' => 'Vue.js Expert Certification',
                                'ar' => 'شهادة احترافية في فيو جي إس'
                            ]
                        ],
                        [
                            'issuer' => 'Google Developers Training',
                            'issueDate' => '2020-10-01',
                            'title' => [
                                'en' => 'Google Certified Android Developer',
                                'ar' => 'مطوّر أندرويد معتمد من Google'
                            ]
                        ]
                    ]
                ],
                [
                    'id' => 'languages',
                    'title' => [
                        'en' => 'Languages',
                        'ar' => 'اللغات'
                    ],
                    'items' => [
                        ['name' => 'Arabic', 'level' => 'Native'],
                        ['name' => 'English', 'level' => 'Fluent']
                    ]
                ],
                [
                    'id' => 'additional',
                    'title' => [
                        'en' => 'Additional Information',
                        'ar' => 'معلومات إضافية'
                    ],
                    'items' => [
                        ['key' => 'Portfolio', 'value' => 'https://islamdev.com '],
                        ['key' => 'Open Source Contributions', 'value' => 'Contributed to Laravel Livewire and Tailwind CSS projects'],
                        ['key' => 'LinkedIn', 'value' => 'https://linkedin.com/in/eslamkamel89 '],
                        ['key' => 'GitHub', 'value' => 'https://github.com/EslamKamel89 ']
                    ]
                ]
            ]
        ];
        return inertia('resume/Index', ['resumeData' => $data]);
    }
}
