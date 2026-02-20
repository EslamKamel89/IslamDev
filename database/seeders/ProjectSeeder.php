<?php

namespace Database\Seeders;

use App\FilterEnum;
use App\Models\Project;
use App\Models\Translation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $skillMap = \App\Models\Skill::pluck('id', 'name');
        /*

1 djangoMart
2 DjangoStream
3 fastapi_Realtime_chat
4 FastTask
5 Friendora
6 Shoply
7 StackedThoughts
8 VoltZone
9 AMPM Locum
10 Dalalat Al-Qur’an
11 HomeHunt
12 ChinaShop
13 DevTalk
14 MoneyMaker
15 ChatLoom
16 SocialX
17 Islamic Calendar

         */
        $projects = [
            [
                'thumbnail' => '/storage/projects/djangomart_thumbnail.png',
                'live_url' => null,
                'github_url' => 'https://github.com/EslamKamel89/djangomart',
                'is_featured' => true,
                'filter' => FilterEnum::OTHER->value,
                'order' => 1,
                'status' => 'published',
                'images' => [
                    "/storage/projects/djangomart_01.png",
                    "/storage/projects/djangomart_02.png",
                    "/storage/projects/djangomart_03.png",
                    "/storage/projects/djangomart_04.png",
                    "/storage/projects/djangomart_05.png",
                    "/storage/projects/djangomart_06.png",
                    "/storage/projects/djangomart_07.png",
                    "/storage/projects/djangomart_08.png",
                    "/storage/projects/djangomart_09.png",
                ],
                'title' => [
                    'en' => 'DjangoMart – Event-Safe Stripe Payment Engine Built with Django',
                    'ar' => 'DjangoMart – محرك مدفوعات آمن قائم على الأحداث باستخدام Django وStripe'
                ],
                'description' => [
                    'en' => 'A production-grade eCommerce backend built with Django 5 and Stripe Checkout, engineered around distributed system principles. Designed to handle retries, webhook storms, race conditions, and asynchronous payment flows safely using idempotency, transactional locking, and explicit state machines.',
                    'ar' => 'نواة تجارة إلكترونية احترافية مبنية باستخدام Django 5 وStripe Checkout، مصممة وفق مبادئ الأنظمة الموزعة. تدير إعادة المحاولات، ازدواجية الأحداث، تعارض العمليات، وتدفقات الدفع غير المتزامنة بأمان عبر idempotency، أقفال معاملات قاعدة البيانات، ونمذجة حالات واضحة.'
                ],
                'features' => [
                    'en' => [
                        'Stripe Checkout integration using webhook-driven payment truth',
                        'Event-level idempotency enforced via unique Stripe event IDs',
                        'Transactional row-level locking using select_for_update()',
                        'Explicit Order state machine (pending → paid / failed)',
                        'Webhook signature verification and replay protection',
                        'Full Stripe event audit trail with raw payload persistence',
                        'Concurrency-safe order mutations under multi-worker environments',
                        'White-label backend architecture ready for any frontend integration'
                    ],
                    'ar' => [
                        'دمج Stripe Checkout مع اعتماد الويب هوكس كمصدر الحقيقة الوحيد',
                        'تطبيق idempotency على مستوى الحدث عبر معرفات Stripe الفريدة',
                        'أقفال صفوف على مستوى قاعدة البيانات باستخدام select_for_update()',
                        'نظام حالات واضح للطلبات (pending → paid / failed)',
                        'تحقق من توقيع الويب هوك مع حماية من إعادة الإرسال',
                        'تخزين كامل لأحداث Stripe لأغراض التتبع والتدقيق',
                        'تحديثات آمنة للطلبات في بيئات متعددة العمليات',
                        'معمارية خلفية White-label جاهزة للربط مع أي واجهة أمامية'
                    ]
                ],
                'skills' => [
                    'Python',
                    'Django',
                    'PostgreSQL',
                    'REST APIs',
                    'System Design',
                    'Clean Architecture',
                    'Domain-Driven Design',
                ],
            ],
            [
                'thumbnail' => '/storage/projects/djangostream_thumbnail.png',
                'live_url' => null,
                'github_url' => 'https://github.com/EslamKamel89/django-stream',
                'is_featured' => true,
                'filter' => \App\FilterEnum::OTHER->value,
                'order' => 2,
                'status' => 'published',
                'images' => [
                    "/storage/projects/djangostream_01.png",
                    "/storage/projects/djangostream_02.png",
                    "/storage/projects/djangostream_03.png",
                ],
                'title' => [
                    'en' => 'DjangoStream – Full-Stack Real-Time Chat Application with Django, HTMX & Redis',
                    'ar' => 'DjangoStream – تطبيق دردشة زمني حقيقي Full-Stack باستخدام Django وHTMX وRedis'
                ],
                'description' => [
                    'en' => 'A full-stack real-time chat application built with Django 6, Django Channels, HTMX, and Alpine.js. Architected for scalable WebSocket communication using Redis as a channel layer, with support for public and private chat rooms, presence tracking, and secure authentication.',
                    'ar' => 'تطبيق دردشة زمني حقيقي مبني باستخدام Django 6 وDjango Channels وHTMX وAlpine.js. تم تصميمه لدعم الاتصال عبر WebSockets بشكل قابل للتوسع باستخدام Redis كطبقة قناة، مع دعم الغرف العامة والخاصة، وتتبع المستخدمين المتصلين، ومصادقة آمنة.'
                ],
                'features' => [
                    'en' => [
                        'ASGI-first architecture using Django 6 and Daphne for real-time support',
                        'WebSocket communication powered by Django Channels with Redis channel layer',
                        'Public and private chat rooms with membership-based access control',
                        'Real-time message broadcasting with server-side validation via ModelForms',
                        'Online presence tracking using Many-to-Many relations and live synchronization',
                        'Hybrid rendering approach using Django Templates, HTMX, and Alpine.js',
                        'Secure authentication with django-allauth (email-based login system)',
                        'Optimized queries using select_related and custom model managers',
                        'Modular project structure separating core, users, and real-time chat domains',
                        'SQLite for development and PostgreSQL-ready schema for production scalability'
                    ],
                    'ar' => [
                        'بنية تعتمد على ASGI باستخدام Django 6 وDaphne لدعم الزمن الحقيقي',
                        'اتصال WebSocket عبر Django Channels مع استخدام Redis كـ channel layer',
                        'غرف دردشة عامة وخاصة مع نظام صلاحيات قائم على العضوية',
                        'بث الرسائل بشكل فوري مع تحقق خادمي عبر ModelForms',
                        'تتبع المستخدمين المتصلين لحظيًا باستخدام علاقات Many-to-Many',
                        'نمط عرض هجين باستخدام Django Templates وHTMX وAlpine.js',
                        'نظام مصادقة آمن عبر django-allauth يعتمد على البريد الإلكتروني',
                        'تحسين الاستعلامات باستخدام select_related ومدير نماذج مخصص',
                        'هيكل مشروع مقسم إلى نطاقات واضحة (core / users / real-time chat)',
                        'استخدام SQLite أثناء التطوير مع جاهزية PostgreSQL لدعم التوسع'
                    ]
                ],
                'skills' => [
                    'Python',
                    'Django',
                    'Redis',
                    'WebSockets',
                    'REST APIs',
                    'System Design',
                    'PostgreSQL',
                    'SQLite',
                    'Clean Architecture',
                ],
            ],
            [
                'thumbnail' => '/storage/projects/friendora_thumbnail.png',
                'live_url' => null,
                'github_url' => 'https://github.com/EslamKamel89/friendora',
                'is_featured' => true,
                'filter' => FilterEnum::OTHER->value,
                'order' => 5,
                'status' => 'published',
                'images' => [
                    "/storage/projects/friendora_01.png"
                ],
                'title' => [
                    'en' => 'Friendora – Backend-Focused Social API System Built with Django & Scalable Architecture',
                    'ar' => 'فريندورا – نظام واجهات اجتماعي موجه للخلفية مبني باستخدام Django وهندسة قابلة للتوسع'
                ],
                'description' => [
                    'en' => 'Friendora is a backend-focused social platform API built with Django and Django REST Framework. Designed with scalable architecture principles, it implements authentication, content publishing, moderation workflows, interaction throttling, caching strategies, and Redis-powered real-time capabilities. The system emphasizes clean domain separation, production practices, and performance-aware design.',
                    'ar' => 'فريندورا هو نظام واجهات اجتماعي موجه للخلفية مبني باستخدام Django و Django REST Framework. تم تصميمه وفق مبادئ هندسة قابلة للتوسع، ويشمل المصادقة، نشر المحتوى، أنظمة الإشراف، التحكم في معدلات التفاعل، استراتيجيات التخزين المؤقت، ودعم الميزات الزمنية الحقيقية باستخدام Redis. يركز النظام على فصل المجالات البرمجية بوضوح، وممارسات الإنتاج الاحترافية، وتصميم يراعي الأداء.'
                ],
                'features' => [
                    'en' => [
                        'Custom user model with JWT authentication using SimpleJWT',
                        'Follow system with database-level constraints and anti-self-follow protection',
                        'Post publishing engine with slug generation, tagging system, filtering, search, ordering, and pagination',
                        'Like system with throttling and unique constraints to prevent duplicate interactions',
                        'Moderation workflow with report lifecycle (pending, reviewed, action taken)',
                        'Cached moderation summary endpoint using Django cache framework for performance optimization',
                        'Redis-backed Django Channels integration with WebSocket support for user-scoped notifications',
                        'Rate limiting via DRF throttling to mitigate abuse (like/follow endpoints)',
                        'Image upload validation with size and MIME type enforcement',
                        'Object-level permissions and role-based restrictions for secure content management',
                        'SQLite for development with production-ready PostgreSQL architecture',
                        'Comprehensive automated API test coverage across authentication, permissions, posts, likes, follows, reports, filtering, search, and pagination'
                    ],
                    'ar' => [
                        'نموذج مستخدم مخصص مع مصادقة JWT باستخدام SimpleJWT',
                        'نظام متابعة مع قيود على مستوى قاعدة البيانات ومنع متابعة النفس',
                        'محرك نشر منشورات مع توليد Slug تلقائي، نظام وسوم، فلترة، بحث، ترتيب، وتقسيم صفحات',
                        'نظام إعجابات مع تحديد معدل الطلبات ومنع التكرار عبر قيود فريدة',
                        'نظام إشراف متكامل مع دورة حياة البلاغات (قيد الانتظار، تمت المراجعة، تم اتخاذ إجراء)',
                        'نقطة نهاية لملخص البلاغات تستخدم التخزين المؤقت لتحسين الأداء',
                        'تكامل Django Channels مع Redis لدعم WebSockets وإشعارات مخصصة لكل مستخدم',
                        'تحديد معدل الطلبات عبر DRF Throttling للحد من إساءة الاستخدام',
                        'التحقق من صحة رفع الصور من حيث الحجم ونوع الملف',
                        'صلاحيات على مستوى الكائنات مع قيود قائمة على الأدوار لضمان أمان المحتوى',
                        'استخدام SQLite أثناء التطوير مع تصميم جاهز للإنتاج باستخدام PostgreSQL',
                        'تغطية اختبارات آلية شاملة لواجهات البرمجة تشمل المصادقة، الصلاحيات، المنشورات، الإعجابات، المتابعات، البلاغات، الفلترة، البحث، وتقسيم الصفحات'
                    ]
                ],
                'skills' => [
                    'Python',
                    'Django',
                    'REST APIs',
                    'Redis',
                    'PostgreSQL',
                    'SQLite',
                    'System Design',
                    'Clean Architecture',
                    'Domain-Driven Design',
                    'Background Jobs',
                    'WebSockets',
                ],
            ],
            [
                'thumbnail' => '/storage/projects/stackedthoughts_thumbnail.png',
                'live_url' => null,
                'github_url' => 'https://github.com/EslamKamel89/stacked_thoughts',
                'is_featured' => true,
                'filter' => FilterEnum::OTHER->value,
                'order' => 7,
                'status' => 'published',
                'images' => [
                    "/storage/projects/stackedthoughts_01.png",
                    "/storage/projects/stackedthoughts_02.png",
                ],
                'title' => [
                    'en' => 'StackedThoughts – A Scalable Django Blog Engine Focused on Data Integrity & Query Optimization',
                    'ar' => 'ستاكيد ثوتس – محرك مدونة مبني على Django مع تركيز على سلامة البيانات وتحسين الاستعلامات'
                ],
                'description' => [
                    'en' => 'A backend-focused Django blog engine built as a system design case study. Emphasizes clean domain modeling, query optimization, data integrity constraints, and scalable database strategy (SQLite for development, PostgreSQL-ready for production). Designed to demonstrate strong backend fundamentals rather than UI complexity.',
                    'ar' => 'محرك مدونة مبني باستخدام Django كدراسة حالة هندسية للأنظمة الخلفية. يركز على تصميم النماذج بشكل نظيف، تحسين الاستعلامات، ضمان سلامة البيانات عبر القيود، واستراتيجية قاعدة بيانات قابلة للتوسع (SQLite للتطوير وجاهز لـ PostgreSQL للإنتاج). الهدف إبراز قوة البنية الخلفية أكثر من تعقيد الواجهة.'
                ],
                'features' => [
                    'en' => [
                        'Clean domain modeling with Author, Post, Tag, and Comment entities using relational integrity constraints',
                        'Custom slug auto-generation logic with collision handling to ensure uniqueness under concurrent conditions',
                        'Query optimization using select_related and prefetch_related to reduce N+1 queries',
                        'Abstract BaseModel providing consistent timestamp management across entities',
                        'Session-based “Read Later” feature demonstrating stateful request handling',
                        'Admin panel customization with searchable fields, list filters, and many-to-many management',
                        'Structured app-level separation inside Django project for modular scalability',
                        'Database strategy designed for SQLite in development and PostgreSQL in scalable production environments'
                    ],
                    'ar' => [
                        'تصميم نماذج نظيف يضم الكيانات Author وPost وTag وComment مع قيود لضمان سلامة البيانات',
                        'منطق مخصص لإنشاء Slug تلقائيًا مع معالجة التعارض لضمان التفرد',
                        'تحسين الاستعلامات باستخدام select_related وprefetch_related لتقليل مشكلة N+1',
                        'نموذج BaseModel مجرد لإدارة الطوابع الزمنية بشكل موحد عبر الكيانات',
                        'ميزة “القراءة لاحقًا” عبر الجلسة لإظهار إدارة الحالة على مستوى الطلب',
                        'تخصيص لوحة الإدارة مع البحث والفلاتر وإدارة العلاقات Many-to-Many',
                        'فصل منظم للتطبيق داخل مشروع Django لدعم التوسع المستقبلي',
                        'استراتيجية قاعدة بيانات تعتمد SQLite أثناء التطوير وجاهزة للترقية إلى PostgreSQL للإنتاج'
                    ]
                ],
                'skills' => [
                    'Python',
                    'Django',
                    'System Design',
                    'Clean Architecture',
                    'REST APIs',
                    'PostgreSQL',
                    'SQLite',
                ],
            ],
            [
                'thumbnail' => '/storage/projects/fasttask_thumbnail.png',
                'live_url' => null,
                'github_url' => 'https://github.com/EslamKamel89/FastTask',
                'is_featured' => true,
                'filter' => FilterEnum::OTHER->value,
                'order' => 4,
                'status' => 'published',
                'images' => [
                    "/storage/projects/fasttask_01.png",
                ],
                'title' => [
                    'en' => 'FastTask – Clean Architecture Task Management API with JWT Auth & RBAC',
                    'ar' => 'فاست تاسك – نظام إدارة مهام مبني على هندسة نظيفة مع JWT وصلاحيات أدوار'
                ],
                'description' => [
                    'en' => 'A backend-focused task management system built with FastAPI, demonstrating clean architectural layering, JWT authentication, and role-based access control. Designed as a scalable foundation for multi-user systems with structured routing, modular services, and database abstraction.',
                    'ar' => 'نظام إدارة مهام موجه للواجهة الخلفية مبني باستخدام FastAPI، يعرض تطبيقًا عمليًا لهندسة نظيفة، ومصادقة JWT، ونظام صلاحيات قائم على الأدوار. صُمم كأساس قابل للتوسع لأنظمة متعددة المستخدمين مع فصل واضح للطبقات وتنظيم معياري للراوترات.'
                ],
                'features' => [
                    'en' => [
                        'Modular layered architecture separating routing, security, models, and database configuration',
                        'JWT-based authentication using OAuth2PasswordBearer and secure token expiration',
                        'Role-Based Access Control (RBAC) with admin-restricted endpoints',
                        'Secure password hashing with bcrypt and token validation using python-jose',
                        'Ownership-enforced CRUD operations for multi-user task isolation',
                        'Database abstraction supporting SQLite for development and PostgreSQL for production',
                        'Alembic-powered schema migrations with version control',
                        'Comprehensive Pytest test suite with dependency overrides and isolated test database',
                        'Health check endpoint for service monitoring readiness',
                        'Structured for horizontal scalability and stateless API expansion'
                    ],
                    'ar' => [
                        'هيكل معماري معياري يفصل بين الراوترات، الأمان، النماذج، وإعدادات قاعدة البيانات',
                        'مصادقة تعتمد على JWT باستخدام OAuth2PasswordBearer مع إدارة انتهاء صلاحية التوكن',
                        'نظام صلاحيات قائم على الأدوار مع نقاط نهاية مخصصة للمشرفين فقط',
                        'تشفير كلمات المرور باستخدام bcrypt والتحقق من التوكن عبر python-jose',
                        'عمليات CRUD مرتبطة بمالك البيانات لضمان عزل المستخدمين',
                        'دعم SQLite أثناء التطوير وPostgreSQL في بيئات الإنتاج عبر طبقة تجريد قاعدة البيانات',
                        'إدارة مخطط قاعدة البيانات باستخدام Alembic مع نظام إصدارات',
                        'اختبارات متكاملة باستخدام Pytest مع تجاوز التبعيات وقاعدة بيانات معزولة للاختبار',
                        'نقطة فحص جاهزية الخدمة (Health Check)',
                        'مصمم لدعم التوسع الأفقي وبناء واجهات API عديمة الحالة'
                    ]
                ],
                'skills' => [
                    'Python',
                    'FastAPI',
                    'REST APIs',
                    'PostgreSQL',
                    'SQLite',
                    'System Design',
                    'Clean Architecture',
                    'Domain-Driven Design',
                    'Pytest',
                    'Microservices',
                ],
            ],
            [
                'thumbnail' => '/storage/projects/shoply_thumbnail.png',
                'github_url' => 'https://github.com/EslamKamel89/shoply',
                'is_featured' => true,
                'filter' => FilterEnum::OTHER->value,
                'order' => 6,
                'status' => 'published',
                'images' => [
                    "/storage/projects/shoply_01.png",
                    "/storage/projects/shoply_02.png",
                ],
                'title' => [
                    'en' => 'Shoply – Scalable E-Commerce API Built with FastAPI, PostgreSQL & Celery',
                    'ar' => 'Shoply – واجهة برمجية قابلة للتوسع للتجارة الإلكترونية مبنية على FastAPI وPostgreSQL وCelery'
                ],
                'description' => [
                    'en' => 'A scalable, production-oriented E-Commerce API built with FastAPI using an async-first architecture and modular monolith design. Implements JWT authentication with rotating refresh tokens, PostgreSQL for production, SQLite for development/testing, and Celery with Redis for distributed background processing. Designed to demonstrate clean architecture, domain separation, and backend scalability patterns.',
                    'ar' => 'واجهة برمجية قابلة للتوسع للتجارة الإلكترونية مبنية باستخدام FastAPI بهيكلية تعتمد على التنفيذ غير المتزامن وتصميم Modular Monolith. تعتمد على JWT مع تدوير Refresh Tokens، وتستخدم PostgreSQL في بيئة الإنتاج وSQLite في التطوير والاختبارات، بالإضافة إلى Celery مع Redis لمعالجة المهام الخلفية الموزعة. صُممت لإظهار مفاهيم Clean Architecture وفصل النطاقات وقابلية التوسع في أنظمة الخلفية.'
                ],
                'features' => [
                    'en' => [
                        'Async-first FastAPI architecture using SQLAlchemy Async ORM',
                        'Modular monolith design with clear domain separation (Auth, Products, Orders)',
                        'JWT authentication with access tokens + rotating refresh tokens stored in DB',
                        'Argon2 password hashing and role-based authorization (admin/user)',
                        'Product management with filtering, pagination, sorting, and category relations',
                        'Order system with transactional integrity and relational consistency',
                        'CSV product import processed via Celery workers with retry & backoff strategy',
                        'Redis-powered distributed task queue for scalable background processing',
                        'Alembic migrations for version-controlled schema evolution',
                        'SQLite for development/testing and PostgreSQL as production database',
                        'Comprehensive Pytest suite with async test client, fixtures, and in-memory database'
                    ],
                    'ar' => [
                        'هيكلية FastAPI غير متزامنة بالكامل باستخدام SQLAlchemy Async ORM',
                        'تصميم Modular Monolith مع فصل واضح للنطاقات (المصادقة، المنتجات، الطلبات)',
                        'مصادقة JWT مع Access Tokens وRefresh Tokens بتدوير تلقائي وتخزين في قاعدة البيانات',
                        'تشفير كلمات المرور باستخدام Argon2 مع نظام صلاحيات قائم على الأدوار',
                        'إدارة المنتجات مع الفلترة، التصفح، الفرز، وربط الفئات',
                        'نظام طلبات يحافظ على التكامل العلاقي وسلامة العمليات داخل المعاملات',
                        'استيراد المنتجات من CSV عبر Celery مع آلية إعادة المحاولة التدريجية',
                        'استخدام Redis كوسيط مهام لمعالجة خلفية قابلة للتوسع',
                        'إدارة إصدارات قاعدة البيانات باستخدام Alembic',
                        'استخدام SQLite في التطوير وPostgreSQL في بيئة الإنتاج',
                        'حزمة اختبارات شاملة باستخدام Pytest مع عميل غير متزامن وقاعدة بيانات داخل الذاكرة'
                    ]
                ],
                'skills' => [
                    'Python',
                    'FastAPI',
                    'Django', // optional cross-ecosystem awareness if desired, remove if strict
                    'Pytest',
                    'REST APIs',
                    'PostgreSQL',
                    'SQLite',
                    'Redis',
                    'Celery',
                    'System Design',
                    'Clean Architecture',
                    'Domain-Driven Design',
                    'Microservices',
                    'Docker'
                ],
            ],
            [
                'thumbnail' => '/storage/projects/fastapi_chat_thumbnail.png',
                'live_url' => null,
                'github_url' => 'https://github.com/EslamKamel89/fastapi_realtime_chat',
                'is_featured' => true,
                'filter' => FilterEnum::OTHER->value,
                'order' => 3,
                'status' => 'published',
                'images' => [
                    "/storage/projects/fastapi_chat_01.png",
                ],
                'title' => [
                    'en' => 'FastAPI Realtime Chat – Real-Time Messaging Backend System with WebSockets & Redis Pub/Sub',
                    'ar' => 'نظام مراسلة لحظي باستخدام FastAPI و WebSockets و Redis Pub/Sub'
                ],
                'description' => [
                    'en' => 'A scalable real-time messaging backend system built with FastAPI, Async SQLAlchemy, and Redis Pub/Sub. Designed using a layered architecture with dependency injection, lifespan-managed services, and non-blocking async I/O. Messages are persisted to the database and broadcast across distributed WebSocket connections via Redis, enabling horizontal scalability.',
                    'ar' => 'نظام مراسلة لحظي قابل للتوسع مبني باستخدام FastAPI و Async SQLAlchemy و Redis Pub/Sub. تم تصميمه بهيكل طبقات واضح مع Dependency Injection وإدارة خدمات عبر Lifespan ودعم كامل للبرمجة غير المتزامنة. يتم حفظ الرسائل في قاعدة البيانات ثم بثها عبر Redis إلى جميع اتصالات WebSocket لدعم التوسع الأفقي.'
                ],
                'features' => [
                    'en' => [
                        'Fully async architecture using FastAPI, Async SQLAlchemy, and redis.asyncio',
                        'WebSocket endpoint with dependency-injected authentication layer',
                        'Redis Pub/Sub infrastructure for horizontal real-time message broadcasting',
                        'Message persistence using SQLAlchemy ORM with repository abstraction',
                        'Lifespan-managed services (database engine, Redis client, background listeners)',
                        'Active WebSocket registry supporting multiple connections per user',
                        'Layered modular structure separating domain, infrastructure, and routing',
                        'SQLite for development and PostgreSQL-ready configuration for production environments',
                        'Health check endpoint for service monitoring',
                    ],
                    'ar' => [
                        'هيكل غير متزامن بالكامل باستخدام FastAPI و Async SQLAlchemy و redis.asyncio',
                        'نقطة اتصال WebSocket مع نظام مصادقة عبر Dependency Injection',
                        'استخدام Redis Pub/Sub لبث الرسائل بشكل لحظي وقابل للتوسع الأفقي',
                        'حفظ الرسائل في قاعدة البيانات عبر SQLAlchemy مع طبقة Repository',
                        'إدارة الخدمات عبر Lifespan مثل محرك قاعدة البيانات وعميل Redis ومستمع الخلفية',
                        'سجل نشط لاتصالات WebSocket يدعم أكثر من اتصال لكل مستخدم',
                        'هيكل طبقات واضح يفصل بين المجال والبنية التحتية وطبقة التوجيه',
                        'استخدام SQLite أثناء التطوير مع جاهزية PostgreSQL للإنتاج',
                        'نقطة فحص صحة النظام (Health Check) لمراقبة الخدمة',
                    ]
                ],
                'skills' => [
                    'Python',
                    'FastAPI',
                    'Django', // included per instruction scope alignment
                    'Pytest',
                    'System Design',
                    'Clean Architecture',
                    'Domain-Driven Design',
                    'REST APIs',
                    'Microservices',
                    'Celery',
                    'Redis',
                    'WebSockets',
                    'Background Jobs',
                    'Queues',
                    'PostgreSQL',
                    'SQLite',
                    'Docker',
                ],
            ],
            [
                'thumbnail' => '/storage/projects/devtalk_thumbnail.png',
                'live_url' => 'https://devtalk.islamdev.com/',
                'github_url' => 'https://github.com/EslamKamel89/DevTalk',
                // 'start_date' => '17-04-2025',
                // 'end_date' => '15-04-2025',
                'is_featured' => true,
                'filter' => FilterEnum::VILT->value,
                'order' => 13,
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
                'skills' => [
                    'Laravel',
                    'Livewire',
                    'REST APIs',
                    'PostgreSQL',
                    'Docker',
                    'System Design',
                ]

            ],
            [
                // 'title' => 'VoltZone E-commerce website',
                // 'slug' => 'vue-ecommerce-dashboard',
                'thumbnail' => '/storage/projects/voltzone_thumbnail.png',
                // 'live_url' => 'https://demo.ecommerce.islamdev.com ',
                'github_url' => 'https://github.com/EslamKamel89/VoltZone',
                // 'start_date' => '07-04-2025',
                // 'end_date' => '2024-06-15',
                'is_featured' => true,
                'filter' => FilterEnum::LIVEWIRE->value,
                'order' => 8,
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
                    "/storage/projects/voltzone_20.png",
                    "/storage/projects/voltzone_21.png",
                    "/storage/projects/voltzone_22.png",
                    "/storage/projects/voltzone_23.png",
                    "/storage/projects/voltzone_24.png",
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
                'skills' => [
                    'Laravel',
                    'Livewire',
                    'PHP',
                    'REST APIs',
                    'MySQL',
                    'Docker',
                    'CI/CD',
                ],

            ],
            [
                'thumbnail' => '/storage/projects/chatloom_thumbnail.png',
                'live_url' => null, // No live demo yet
                'github_url' => 'https://github.com/EslamKamel89/ChatLoom',  // Replace with actual repo URL
                // 'start_date' => '2024-10-01',
                // 'end_date' => '2025-03-31',
                'is_featured' => true,
                'filter' => FilterEnum::VILT->value,
                'order' => 15,
                'status' => 'published',
                'images' => [
                    "/storage/projects/chatloom_01.png",
                    "/storage/projects/chatloom_02.png",
                ],
                // 'videos' => ["https://youtube.com/watch?v=..."],
                'title' => [
                    'en' => 'ChatLoom – A Real-Time Chat Application Built with VILT Stack & Shadcn UI',
                    'ar' => 'تشات لوم – تطبيق دردشة زمنية حقيقية مبني على تكنولوجيا VILT وواجهة Shadcn'
                ],
                'description' => [
                    'en' => 'A real-time chat application built using the VILT stack (Vue, Inertia.js, Laravel, Tailwind CSS) and styled with shadcn-vue components. Designed for developers who want a seamless, reactive messaging experience.',
                    'ar' => 'تطبيق دردشة زمني حقيقي مبني باستخدام تكنولوجيا VILT (فيو، إنيرتيا جي إس، لارافل، تايلويند سي إس إس) ومرفق بواجهة مستندة إلى shadcn-vue. صُمم للمطورين الذين يبحثون عن تجربة رسائل سلسة وتفاعلية.'
                ],
                'features' => [
                    'en' => [
                        'Built with Laravel 12 using the latest VILT starter kit and Shadcn UI',
                        'Global state management handled by Pinia for reactive architecture',
                        'Laravel Reverb powers real-time features via WebSockets',
                        'Presence Channels to show online users in each chat room',
                        'Supports multiline message input with Shift + Enter',
                        'Seamless infinite scrolling in chat view for smooth UX',
                        'Frontend built with Vue 3, Composition API, TypeScript, and Setup syntax',
                        'All messages and states updated in real time without page refreshes'
                    ],
                    'ar' => [
                        'تم بناء التطبيق باستخدام Laravel 12 مع أحدث كيت VILT وواجهة Shadcn UI',
                        'إدارة الحالة العالمية عبر Pinia للحصول على هيكل تفاعلي',
                        'يدعم Laravel Reverb الميزات الزمنية الحقيقية عبر WebSockets',
                        'قنوات الحضور تُظهر من هو متصل في كل غرفة دردشة',
                        'يدعم إدخال الرسائل متعددة الأسطر باستخدام Shift + Enter',
                        'تجربة لا نهائية في عرض الدردشة لتجربة مستخدم سلسة',
                        'الواجهة الأمامية بنيت باستخدام فيو 3، واجهة التكوين، TypeScript، وSetup Syntax',
                        'تحديثات الرسائل والأوضاع تتم فورًا دون إعادة تحميل الصفحة'
                    ]
                ],
                'skills' => [
                    'Laravel',
                    'WebSockets',
                    'Redis',
                    'Queues',
                    'System Design',
                    'REST APIs',
                ],

            ],
            [
                'thumbnail' => '/storage/projects/socialx_thumbnail.png',
                'live_url' => null, // No live demo yet
                'github_url' => 'https://github.com/EslamKamel89/SocialX',  // From linkedin post
                // 'start_date' => '2024-11-01',
                // 'end_date' => '2025-02-28',
                'is_featured' => true,
                'filter' => FilterEnum::LIVEWIRE->value,
                'order' => 16,
                'status' => 'published',
                'images' => [
                    "/storage/projects/socialx_01.png",
                    "/storage/projects/socialx_02.png",
                    // "/storage/projects/socialx_03.png"
                ],
                'videos' => ["https://youtube.com/watch?v=..."],
                'title' => [
                    'en' => 'SocialX – A Real-Time Blog App Built with TALL Stack + Livewire Volt API',
                    'ar' => 'سوشل إكس – تطبيق مدونات زمني حقيقي مبني على تكنولوجيا TALL ومحرك ليف واير فولت'
                ],
                'description' => [
                    'en' => 'A high-performance real-time blog platform built using the TALL stack and Livewire Volt API. Proves that Livewire can be fast and scalable when used correctly.',
                    'ar' => 'منصة مدونات عالية الأداء زمنية حقيقية مبنية على تكنولوجيا TALL ومحرك ليف واير فولت. تثبت أن ليف واير يمكنه أن يكون سريعًا وقابلًا للتوسيع إذا استُخدم بشكل صحيح.'
                ],
                'features' => [
                    'en' => [
                        'Built with Laravel, Alpine.js, Livewire, Tailwind CSS (TALL Stack)',
                        'Infinite Scroll – Smooth loading without page refreshes',
                        'Real-Time Posts – New & updated posts appear instantly across users via Pusher WebSocket',
                        'Authorization Layer – Only owners can edit or delete their posts, changes sync in real time',
                        'Live Like Counter – Likes update across all users instantly',
                        'Uses Livewire Volt API for cleaner, simpler component logic',
                        'Fully responsive and mobile-friendly UI',
                        'Open source and MIT licensed for reuse'
                    ],
                    'ar' => [
                        'تم بناء التطبيق باستخدام Laravel، ألبين جي إس، ليف واير، وتايلويند سي إس إس (تكنولوجيا TALL)',
                        'تجربة لا نهائية في التنقل دون إعادة تحميل الصفحة',
                        'مشاركات مباشرة – تظهر المنشورات الجديدة والمحررة فورًا عبر المستخدمين عبر Pusher WebSocket',
                        'نظام مصادقة – فقط المؤلفون يقدرون على التعديل أو الحذف مع تحديثات فورية',
                        'عداد الإعجابات الزمني الحقيقي – يتم التحديث الفوري لكل المستخدمين',
                        'استخدام محرك ليف واير فولت للحصول على شيفرة أنظف وأبسط',
                        'واجهة مستجوبة ومناسبة للهواتف',
                        'مصدر مفتوح ومُرخص تحت رخصة MIT'
                    ]
                ],
                'skills' => [
                    'Laravel',
                    'Livewire',
                    'WebSockets',
                    'Redis',
                    'Background Jobs',
                    'REST APIs',
                ],

            ],
            [
                'thumbnail' => '/storage/projects/chinashop_thumbnail.png',
                // 'live_url' => 'https://demo.islamdev.com',  // Replace with real URL later
                'github_url' => 'https://github.com/EslamKamel89/ChinaShop',
                // 'start_date' => '2024-03-01',
                // 'end_date' => '2024-06-15',
                'is_featured' => true,
                'filter' => FilterEnum::NUXT->value,
                'order' => 12,
                'status' => 'published',
                'images' => [
                    "/storage/projects/chinashop_01.png",
                    "/storage/projects/chinashop_02.png",
                    "/storage/projects/chinashop_03.png",
                    "/storage/projects/chinashop_04.png",
                    "/storage/projects/chinashop_05.png",
                    "/storage/projects/chinashop_06.png",
                    "/storage/projects/chinashop_07.png",
                    "/storage/projects/chinashop_08.png",
                    "/storage/projects/chinashop_09.png",
                    "/storage/projects/chinashop_10.png",
                    "/storage/projects/chinashop_11.png",
                    "/storage/projects/chinashop_12.png",
                    "/storage/projects/chinashop_13.png",
                    "/storage/projects/chinashop_14.png",
                ],
                // 'videos' => ["https://youtube.com/watch?v=..."],
                'title' => [
                    'en' => 'Vue E-commerce Dashboard – Built with Nuxt.js, Shadcn-Vue, and Stripe Integration',
                    'ar' => 'لوحة تحكم التجارة الإلكترونية – مبنية على فيو جي إس، نوكست جي إس، ودمجت مع نظام دفع Stripe'
                ],
                'description' => [
                    'en' => 'A feature-rich e-commerce admin dashboard built with Vue.js, Nuxt.js, and Tailwind CSS. Includes category-based filtering, product management, and integrates with Stripe for secure payment processing.',
                    'ar' => 'لوحة تحكم تجارية قوية مبنية على فيو جي إس ونوكست جي إس وتايلويند سي إس إس. تشمل التصفية حسب الفئة وإدارة المنتجات والدمج مع Stripe للمدفوعات الآمنة.'
                ],
                'features' => [
                    'en' => [
                        'Feature-rich products page with filtering by category, size, or color',
                        'Beautiful and responsive intro screen with featured products section',
                        'Built with Nuxt.js and shadcn-vue components for a modern UI',
                        'Authentication handled via nuxt-auth-utils including GitHub login',
                        'Fully functional and secure payment system powered by Stripe integration',
                        'Admin dashboard built with @tanstack/vue-table for advanced data handling',
                        'Custom image upload using H3\'s readMultipartFormData (no external service)',
                        'Responsive design with mobile-first approach',
                        'Open source and ready for reuse'
                    ],
                    'ar' => [
                        'صفحة منتجات غنية بالميزات مع خاصية الفلترة حسب الفئة أو الحجم أو اللون',
                        'شاشة ترحيبية جميلة ومستجيبة مع عرض المنتجات المميزة',
                        'بني التطبيق باستخدام نوكست جي إس ومكونات shadcn-vue لواجهة حديثة وجذابة',
                        'تم التعامل مع المصادقة عبر nuxt-auth-utils بما في ذلك تسجيل الدخول عبر GitHub',
                        'نظام مدفوعات آمن وفعال عبر Stripe',
                        'لوحة تحكم إدارية بنيت باستخدام @tanstack/vue-table لإدارة البيانات المتقدمة',
                        'رفع الصور عبر استخدام readMultipartFormData من H3 بدون خدمات خارجية',
                        'تصميم مستجيب يدعم الهواتف أولاً',
                        'مصدر مفتوح ويمكن إعادة الاستخدام'
                    ]
                ],
                'skills' => [
                    'REST APIs',
                    'MongoDB',
                    'Docker',
                    'System Design',
                ],

            ],
            [
                'thumbnail' => '/storage/projects/homehunt_thumbnail.png',
                'live_url' => null, // No live demo yet
                'github_url' => 'https://github.com/EslamKamel89/HomeHunt',
                // 'start_date' => '2024-05-10',
                // 'end_date' => '2024-09-15',
                'is_featured' => true,
                'filter' => FilterEnum::VILT->value,
                'order' => 11,
                'status' => 'published',
                'images' => [
                    "/storage/projects/homehunt_01.png",
                    "/storage/projects/homehunt_02.png",
                    "/storage/projects/homehunt_03.png",
                    "/storage/projects/homehunt_04.png",
                    "/storage/projects/homehunt_05.png",
                    "/storage/projects/homehunt_06.png",
                    "/storage/projects/homehunt_07.png",
                ],
                // 'videos' => ["https://youtube.com/watch?v=..."],
                'title' => [
                    'en' => 'HomeHunt – Property Listing App with Role-Based Auth & Offer System',
                    'ar' => 'هوم هانت – تطبيق إعلانات العقارات مع نظام مصادقة قائم على الأدوار ونظام عروض'
                ],
                'description' => [
                    'en' => 'A property listing app built with the VILT stack that allows users to browse listings, filter by price, bedrooms, bathrooms, area, and even calculate monthly mortgage payments. Includes role-based auth, offer tracking, and real-time notifications.',
                    'ar' => 'تطبيق لإدارة إعلانات العقارات مبنية على تكنولوجيا VILT، يسمح للمستخدمين بتصفح الإعلانات وفلترتها حسب السعر والغرف والحمامات. يتضمن نظام مصادقة متقدم ونظام عروض مباشر مع إشعارات فورية.'
                ],
                'features' => [
                    'en' => [
                        'Complete role-based authentication system (admin/user/guest)',
                        'Property listing browsing with filters: price, beds, baths, area',
                        'User-friendly listing page with clear indication of user-owned properties',
                        'Real-time notification system for offers made on user listings',
                        'Dedicated listing detail page with mortgage payment calculator',
                        'Authenticated users can make, view, and manage offers on their listings',
                        'CRUD operations for owned listings including image management',
                        'Responsive UI built with Tailwind CSS and shadcn-vue components'
                    ],
                    'ar' => [
                        'نظام مصادقة قائم على الأدوار (مشرف/مستخدم/زائر)',
                        'تصفح إعلانات العقارات مع خيارات التصفية: السعر، الغرف، الحمامات، المساحة',
                        'واجهة سهلة الاستخدام مع تحديد واضح للعقارات التي يملكها المستخدم',
                        'نظام إشعارات زمني حقيقي عند تقديم عرض على أحد العقارات الخاصة بك',
                        'صفحة تفاصيل العقار تحتوي على آلة حاسبة لدفعات الرهن العقاري',
                        'يمكن للمستخدمين المؤكدين تقديم أو عرض وإدارة العروض على عقاراتهم',
                        'دعم العمليات الكاملة (إنشاء، تعديل، حذف) على العقارات الخاصة',
                        'تصميم مستجيب ومرن باستخدام مكونات TailwindCSS وshadcn-vue'
                    ]
                ],
                'skills' => [
                    'Laravel',
                    'REST APIs',
                    'PostgreSQL',
                    'Background Jobs',
                    'System Design',
                ],

            ],
            [
                'thumbnail' => '/storage/projects/quran_thumbnail.png',
                'live_url' => null,
                'github_url' => null,
                // 'start_date' => '2024-01-15',
                // 'end_date' => '2024-08-01',
                'is_featured' => true,
                'filter' => FilterEnum::FLUTTER->value,
                'order' => 10,
                'status' => 'published',
                'images' => [
                    "/storage/projects/quran_01.png",
                    "/storage/projects/quran_02.png",
                    "/storage/projects/quran_03.png",
                    "/storage/projects/quran_04.png",
                    "/storage/projects/quran_05.png",
                    "/storage/projects/quran_06.png",
                    "/storage/projects/quran_07.png",
                    "/storage/projects/quran_08.png",
                    "/storage/projects/quran_09.png",
                    "/storage/projects/quran_10.png",
                    "/storage/projects/quran_11.png",
                    "/storage/projects/quran_12.png",
                ],
                'playstore_url' => 'https://play.google.com/store/apps/details?id=com.dubdev.dallalat',
                'applestore_url' => 'https://apps.apple.com/us/app/%D8%AF%D9%84%D8%A7%D9%84%D8%A7%D8%AA-%D8%A7%D9%84%D9%82%D8%B1%D8%A3%D9%86/id6736754081',
                // 'videos' => ["https://youtube.com/watch?v=..."],
                'title' => [
                    'en' => 'Dalalat Al-Qur’an – Flutter-Based Islamic App for Deep Quranic Study',
                    'ar' => 'دلالات القرآن – تطبيق إسلامي مبني على فليتر لدراسة القران الكريم بعمق'
                ],
                'description' => [
                    'en' => 'A mobile application designed to enhance Quranic learning through interactive features. Each word in the Holy Qur\'an is clickable, allowing users to instantly access detailed explanations (Tafsir) and related videos. Built with Flutter for Android and iOS.',
                    'ar' => 'تطبيق جوال يهدف إلى تعزيز تعلم القرآن الكريم من خلال ميزات تفاعلية. يمكن للمستخدمين النقر على كل كلمة في كتاب الله للوصول الفوري إلى التفاسير المرتبطة بها، بالإضافة إلى مقاطع فيديو ذات صلة. تم بناؤه باستخدام فليتر لنظامي الأندرويد وiOS.'
                ],
                'features' => [
                    'en' => [
                        'Beautiful and intuitive intro screen with onboarding flow',
                        'Full Holy Qur\'an reading experience with audio recitations from 15 different reciters',
                        'Interactive word-based navigation: tap any word to view its explanation page',
                        'Colored words indicate verses with available Tafsir content',
                        'Long press brings up contextual actions: listen to verse or share it',
                        'Verse explanation dialog with backend-rendered HTML content for full styling control',
                        'Two search modes: by keyword or by verse number – both user-friendly and fast',
                        'Dedicated section to listen to the Holy Qur\'an with custom playback controls',
                        'Video section with collapsible cards for YouTube content – optimized memory usage for smooth performance',
                        'Articles section categorized into standalone pieces and series – fully searchable'
                    ],
                    'ar' => [
                        'شاشة ترحيبية جميلة وسهلة الاستخدام مع دليل استخدام مرئي',
                        'تجربة قراءة كاملة للقرآن الكريم مع استماع من 15 قارئ مختلف',
                        'نظام تفاعلي لتصفح الكلمات: انقر على أي كلمة لمعرفة تفسيرها',
                        'الكلمات الملونة تشير إلى وجود تفسير متاح لتلك الآية',
                        'اضغط مطولًا لفتح خيارات سياقية: الاستماع أو مشاركة الآية',
                        'نافذة التفسير تحتوي على بيانات HTML من الخلفية مما يتيح تحكمًا كاملاً بالتصميم',
                        'نظام بحث مزدوج: البحث بالكلمة أو برقم الآية – كلاهما سريع وسهل الاستخدام',
                        'قسم خاص لسماع القرآن الكريم مع أدوات تخصيص المشغل',
                        'قسم فيديوهات من YouTube مع بطاقات قابلة للطي، واستخدام ذاكرة فعّالة رغم العدد الكبير من الفيديوهات',
                        'قسم مقالات إسلامية مصنفة إلى مقالات منفصلة ومسلسلات – قابلة للبحث'
                    ]
                ],
                'skills' => [
                    'Flutter',
                    'Laravel',
                    'REST APIs',
                    'PostgreSQL',
                ],
            ],
            [
                'thumbnail' => '/storage/projects/cal_thumbnail.png',
                'live_url' => null,
                'github_url' => null,
                // 'start_date' => '2025-01-01',
                // 'end_date' => '2025-04-15',
                'is_featured' => true,
                'filter' => FilterEnum::FLUTTER->value,
                'order' => 17,
                'status' => 'published',
                'images' => [
                    "/storage/projects/cal_1.png",
                    "/storage/projects/cal_2.png",
                    "/storage/projects/cal_3.png",
                    "/storage/projects/cal_4.png",
                    "/storage/projects/cal_5.png",
                    "/storage/projects/cal_6.png",
                    "/storage/projects/cal_7.png",
                ],
                // 'videos' => ["https://youtube.com/watch?v=..."],
                'playstore_url' => 'https://play.google.com/store/apps/details?id=com.gaztec.islamic_calander',
                'applestore_url' => 'https://apps.apple.com/us/app/eternal-islamic-calendar/id6738862001',

                'title' => [
                    'en' => 'Islamic Calendar & Prayer Times – A Beautiful, Dual-Language Mobile App Built with Flutter',
                    'ar' => 'التقويم الإسلامي وأوقات الصلاة – تطبيق جوال بلغتين مبني على فليتر'
                ],
                'description' => [
                    'en' => 'A beautifully designed mobile application that provides accurate prayer times, Hijri calendar conversion, moon phase tracking, and eclipse data. Built with Flutter for both iOS and Android, fully localized in English and Arabic.',
                    'ar' => 'تطبيق جوال جميل ومصمم بدقة يُقدم أوقات الصلاة بدقة، تحويل التاريخ من ميلادي إلى هجري، تتبع phases القمر، وبيانات الكسوف. بُني باستخدام فليتر لنظامي الأندرويد وiOS، وتم دعم اللغتين الإنجليزية والعربية.'
                ],
                'features' => [
                    'en' => [
                        'Beautiful onboarding intro screen with elegant UI/UX design',
                        'Accurate 5 daily prayers time display based on current location',
                        'Live countdown showing time left until next prayer',
                        'Current user address detection for prayer time accuracy',
                        'Live weather temperature shown alongside prayer info',
                        'Gregorian and Hijri date display for today’s date',
                        'Wisdom card that changes with each page name — inspirational and dynamic',
                        'Moon phase visualization integrated into prayer widget background',
                        'Interactive globe menu button with smooth rotating animation',
                        'More than 10 prayer time calculation methods available',
                        'Default method selected automatically based on user location',
                        'Dedicated date conversion screen with Hijri calendar integration',
                        'Moon phase tracker for the entire year with filtering options',
                        'Eclipse data screen with type-based filters and yearly view',
                        'Qibla finder page with compass integration',
                        'About section displaying HTML content from backend – fully stylable by admins'
                    ],
                    'ar' => [
                        'شاشة ترحيبية جميلة مع تصميم راقي للواجهة والتجربة',
                        'عرض دقيق لأوقات الصلوات الخمس بناءً على الموقع الحالي',
                        'عداد زمني مباشر لفترة الوقت المتبقية حتى الصلاة القادمة',
                        'اكتشاف عنوان المستخدم الحالي لدقة أوقات الصلاة',
                        'عرض درجة الحرارة الحالية مع معلومات الصلاة',
                        'عرض التاريخ الميلادي والهجري ليوم اليوم',
                        'بطاقة حكمة تغيّر محتواها مع كل صفحة – ملهمة وديناميكية',
                        'تمثيل بصري لmoon phase مدمج في خلفية واجهة الصلاة',
                        'زر القائمة على شكل كرة الأرض الدوارة – قابل للنقر والتخصيص',
                        'أكثر من 10 طرق لحساب أوقات الصلاة متاحة',
                        'الطريقة الافتراضية تُحدد تلقائيًا بناءً على موقع المستخدم',
                        'شاشة خاصة لتحويل التاريخ مع واجهة تقويم سهلة الاستخدام',
                        'تتبع phases القمر لكل السنة مع إمكانية التصفية',
                        'شاشة خاصة لبيانات الكسوف مع الفلاتر حسب نوع الكسوف',
                        'العثور على القبلة عبر بوصلة مدمجة داخل التطبيق',
                        'صفحة "عن التطبيق" تعرض محتوى HTML من الخلفية – مما يسمح بإدارة التصميم من قبل المسؤولين'
                    ]
                ],
                'skills' => [
                    'Flutter',
                    'REST APIs',
                    'PostgreSQL',
                ],

            ],
            [
                'thumbnail' => '/storage/projects/money_thumbnail.png',
                'live_url' => null,
                'github_url' => null,
                'playstore_url' => 'https://play.google.com/store/apps/details?id=com.moneymaker.bundleId',
                'applestore_url' => null,
                // 'start_date' => '2024-10-01',
                // 'end_date' => '2025-03-31',
                'is_featured' => true,
                'filter' => FilterEnum::FLUTTER->value,
                'order' => 14,
                'status' => 'published',
                'images' => [
                    "/storage/projects/money_01.png",
                    "/storage/projects/money_02.png",
                    "/storage/projects/money_03.png",
                    "/storage/projects/money_04.png",
                    "/storage/projects/money_05.png",
                    "/storage/projects/money_06.png",
                    "/storage/projects/money_07.png",
                ],
                // 'videos' => ["https://youtube.com/watch?v=..."],
                'title' => [
                    'en' => 'MoneyMaker – Investment Tracking & Trading Platform for Stocks, Crypto & Forex',
                    'ar' => 'موني ميكر – منصة تتبع الاستثمار والتجارة لأسهم، العملات الرقمية، وفوركس'
                ],
                'description' => [
                    'en' => 'A mobile investment platform built with Flutter and powered by Laravel backend. Designed for a financial agency to track profits, manage deposits/withdrawals, and communicate securely with admins and other users.',
                    'ar' => 'منصة جوال للاستثمار بُنيت باستخدام فليتر ولارافل من الخلفية. صُمّمت لهيئة مالية لتتبع الأرباح وإدارة الإيداعات والسحوبات مع إمكانية التواصل الآمن مع الإدارة أو المستخدمين.'
                ],
                'features' => [
                    'en' => [
                        'Secure authentication system via Laravel Sanctum API',
                        'Animated intro screen with live profit charts and user stats',
                        'Daily profit visualization with total account balance and referral earnings shown around chart',
                        'Direct chat with administration for customer support',
                        'Group chat with real-time updates and modern UI',
                        'User profile management: view info, change password, delete account',
                        'Deposit page integrated with major e-wallets (PayPal, Skrill, Neteller)',
                        'Withdrawal section with multiple withdrawal options',
                        'Complete transaction history with deposit & withdrawal details',
                        'Latest financial news and market updates section',
                        'Licenses and certifications section for transparency and trust',
                        'Available on Google Play – Coming soon to App Store'
                    ],
                    'ar' => [
                        'نظام مصادقة آمن عبر واجهة لارافل سانتوم',
                        'شاشة ترحيبية متحركة مع رسوم بيانية مباشرة للأرباح والإحصائيات',
                        'عرض يومي للأرباح مع رؤية واضحة للرصيد الكلي وأرباح الإحالات',
                        'دردشة مباشرة مع الإدارة لمتابعة الطلبات والدعم',
                        'غرفة دردشة جماعية ذات تحديثات فورية وواجهة حديثة',
                        'إدارة الملف الشخصي: عرض البيانات، تغيير كلمة المرور، حذف الحساب',
                        'صفحة إيداع متصلة بأكثر المحافظ الإلكترونية استخدامًا',
                        'سحب الأرباح عبر خيارات متعددة ومريحة',
                        'سجل كامل للمعاملات (إيداع وسحب) مع التفاصيل الكاملة',
                        'قسم أخبار السوق المالية وتحديثاته اليومية',
                        'قسم الشهادات والتراخيص الخاصة بالوكالة',
                        'متاحة على متجر جوجل بلاي – قادمة إلى متجر أبل قريبًا'
                    ]
                ],
                'skills' => [
                    'Flutter',
                    'Laravel',
                    'REST APIs',
                    'Redis',
                    'Background Jobs',
                    'PostgreSQL',
                ],
            ],
            [
                'thumbnail' => '/storage/projects/locum_thumbnail.png',
                // 'live_url' => null, // No live demo yet
                // 'github_url' => 'https://github.com/EslamKamel89/AMPM-Locum',
                // 'start_date' => '2023-11-01',
                // 'end_date' => '2024-06-15',
                'is_featured' => true,
                'filter' => FilterEnum::FLUTTER->value,
                'order' => 9,
                'status' => 'published',
                'images' => [
                    "/storage/projects/locum_01.png",
                    "/storage/projects/locum_02.png",
                    "/storage/projects/locum_03.png",
                    "/storage/projects/locum_04.png",
                    "/storage/projects/locum_05.png",
                    "/storage/projects/locum_06.png",
                    "/storage/projects/locum_07.png",
                    "/storage/projects/locum_08.png",
                    "/storage/projects/locum_09.png",
                    "/storage/projects/locum_10.png",
                    "/storage/projects/locum_11.png",

                ],
                // 'videos' => ["https://youtube.com/watch?v=..."],
                'title' => [
                    'en' => 'AMPM Locum – Flutter Healthcare Job App for iOS & Android',
                    'ar' => 'AMPM Locum – تطبيق وظائف الرعاية الصحية لهواتف iOS وAndroid'
                ],
                'description' => [
                    'en' => 'A cross-platform mobile app built with Flutter and Laravel backend. AMPM Locum connects healthcare professionals with locum job opportunities. Features role-based search, secure authentication, and document management for job applications.',
                    'ar' => 'تطبيق جوال متعدد المنصات مبنية على فليتر ولارافل من الخلفية. يربط AMPM Locum بين العاملين في المجال الصحي ومجالات العمل المؤقتة. يدعم البحث القائم على الأدوار، والمصادقة الآمنة وإدارة المستندات.'
                ],
                'features' => [
                    'en' => [
                        'Cross-platform support – works on iOS and Android like it was born there 🐑',
                        'Secure backend using Laravel Sanctum for API authentication',
                        'Dark & Light theme toggle – because not all nurses code at night 😴',
                        'Beautiful intro screen with testimonials from real users',
                        'Powerful job search: filter by specialty, job title, type, state, language, address distance',
                        'Sort jobs by: Latest posted or Salary (because money matters)',
                        'View full job details, apply, and reply directly from the app',
                        'User dashboard showing all job applications and replies',
                        'Profile page with resume upload and document management',
                        'Built for Gaztec – where I currently work as a Full Stack Developer'
                    ],
                    'ar' => [
                        'يدعم المنصات المتعددة – يعمل على iOS وAndroid كأنه وُلد هناك',
                        'محرك خلفي آمن باستخدام Laravel Sanctum للمصادقة عبر الواجهات البرمجية',
                        'وضع ليلي ونهاري – لأن ليس كل الممرضات يبرمجون بالليل',
                        'شاشة ترحيبية جميلة مع شهادات مستخدمين حقيقية',
                        'بحث قوي في الوظائف حسب التخصص، عنوان الوظيفة، النوع، المنطقة، اللغة، والمسافة',
                        'فرز الوظائف حسب الأحدث أو المرتبة الأعلى',
                        'عرض تفاصيل الوظائف الكاملة، تقديم الطلبات، وإضافة تعليقات مباشرة من التطبيق',
                        'لوحة تحكم المستخدم تعرض جميع طلباتك والاستجابات عليها',
                        'صفحة ملف شخصي تحتوي على رفع السيرة الذاتية وإدارة المستندات',
                        'بني للعمل مع شركة Gaztec حيث أعمل كمطور تطبيقات كاملة'
                    ]
                ],
                'skills' => [
                    'Flutter',
                    'Laravel',
                    'REST APIs',
                    'PostgreSQL',
                    'System Design',
                ],
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
                'playstore_url' => $projectData['playstore_url'] ?? null,
                'applestore_url' => $projectData['applestore_url'] ?? null,
                "start_date" => $projectData['start_date'] ?? null,
                "end_date" => $projectData['end_date'] ?? null,
                "is_featured" => $projectData['is_featured'],
                "order" => $projectData['order'],
                "status" => $projectData['status'],
                'filter' => $projectData['filter'],
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

            $skillIds = collect($projectData['skills'])
                ->map(fn($name) => $skillMap[$name])
                ->filter()
                ->values()
                ->toArray();

            $project->skills()->sync($skillIds);
        }
    }
}
