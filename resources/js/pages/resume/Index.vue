<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { SharedData } from '@/types';
import { usePage } from '@inertiajs/vue3';
import { FileHeart } from 'lucide-vue-next';

const experiences = [
    {
        company: 'Gaztec',
        location: 'Dubai, UAE (Remote)',
        role: 'Senior Backend Engineer',
        period: 'Feb 2024 – Present',
        stack: 'Django, FastAPI, Laravel, Redis, PostgreSQL, Docker, AWS',
        highlights: [
            'Designed high-performance backend systems with modular domain separation.',
            'Built scalable REST APIs and real-time WebSocket layers.',
            'Implemented Redis caching strategies and secure token-based authentication.',
            'Contributed to scalability-focused architectural decisions.',
        ],
    },
    {
        company: 'CodeCraft Solutions',
        location: 'Cairo, Egypt',
        role: 'Backend Engineer',
        period: 'Nov 2022 – Feb 2024',
        stack: 'Laravel, PostgreSQL, MySQL, Docker',
        highlights: [
            'Designed API-driven backend systems for SPA frontends.',
            'Integrated secure payment gateways with transactional safeguards.',
            'Implemented async workflows and background processing patterns.',
            'Optimized relational modeling and query performance.',
        ],
    },
    {
        company: 'TechNova',
        location: 'Cairo, Egypt',
        role: 'Backend Engineer',
        period: 'Oct 2020 – Nov 2022',
        stack: 'Laravel, Redis, PostgreSQL',
        highlights: [
            'Developed multi-tenant systems with RBAC and permission isolation.',
            'Optimized queries to prevent N+1 issues.',
            'Built structured backend APIs consumed by mobile and web clients.',
            'Implemented Redis-based caching and notifications.',
        ],
    },
    {
        company: 'Lamba',
        location: 'Mansoura, Egypt',
        role: 'Backend Engineer',
        period: 'May 2018 – Oct 2020',
        stack: 'Laravel, JWT, MySQL, PostgreSQL',
        highlights: [
            'Built secure e-commerce backends with JWT authentication.',
            'Designed admin analytics systems powered by structured APIs.',
            'Applied database constraints and transaction management.',
            'Wrote automated backend tests.',
        ],
    },
];

const skillSections = [
    {
        title: 'Backend',
        items: ['Python', 'Django', 'FastAPI', 'DRF', 'SQLAlchemy', 'Laravel', 'PHP'],
    },
    {
        title: 'Architecture & Systems',
        items: ['REST APIs', 'WebSockets', 'ASGI', 'Clean Architecture', 'DDD', 'RBAC', 'Idempotency', 'Concurrency Control', 'Async I/O'],
    },
    {
        title: 'Databases',
        items: ['PostgreSQL', 'SQLite', 'MySQL', 'MongoDB'],
    },
    {
        title: 'Caching & Messaging',
        items: ['Redis', 'Celery', 'Pub/Sub', 'Queues', 'Background Jobs'],
    },
    {
        title: 'Security',
        items: ['JWT', 'OAuth2', 'SimpleJWT', 'Sanctum', 'bcrypt', 'Argon2'],
    },
];
const page = usePage<SharedData>();
const baseUrl = page.props.ziggy.url;
</script>

<template>
    <AppLayout>
        <SeoHead
            title="CV-Resume - Backend Engineer | FastAPI, Django & Laravel"
            :description="'Explore backend-focused production projects built with FastAPI, Django, and Laravel — emphasizing scalable APIs, background processing systems, and modern backend architecture.'"
            :keywords="'FastAPI, Django, Laravel, Backend Engineer, API Development, System Design, Background Jobs, Python Backend'"
            :url="`${baseUrl}/resume`"
            :image="`${baseUrl}/assets/seo/images/logo.png`"
        />
        <div
            dir="ltr"
            class="relative min-h-screen overflow-hidden rounded-xl bg-gradient-to-br from-gray-50 via-white to-gray-100 text-gray-800 transition-colors duration-500 dark:from-gray-950/10 dark:via-gray-900/10 dark:to-black/10 dark:text-gray-200"
        >
            <!-- Subtle Background Glow -->
            <div class="pointer-events-none absolute inset-0">
                <div class="absolute -top-40 -right-40 h-96 w-96 rounded-full bg-indigo-500/10 blur-3xl dark:bg-indigo-500/20"></div>
                <div class="absolute -bottom-40 -left-40 h-96 w-96 rounded-full bg-purple-500/10 blur-3xl dark:bg-purple-500/20"></div>
            </div>

            <div class="relative mx-auto max-w-6xl px-6 py-20">
                <!-- HEADER -->
                <div class="mb-20 text-center">
                    <h1 class="text-5xl font-extrabold tracking-tight">Eslam Kamel</h1>

                    <p class="mt-4 text-xl font-medium text-indigo-600 dark:text-indigo-400">Senior Backend Engineer</p>

                    <p class="mt-2 text-gray-500 dark:text-gray-400">Django · FastAPI · Laravel</p>

                    <div class="mt-6 flex justify-center gap-6 text-sm text-gray-500 dark:text-gray-400">
                        <span>📍 Egypt</span>
                        <span>✉️ eslamkamelforex@gmail.com</span>
                        <span>🔗 github.com/EslamKamel89</span>
                    </div>
                </div>

                <!-- DOWNLOAD BUTTON -->
                <div class="mb-16 flex justify-center">
                    <a
                        href="/assets/files/cv.pdf"
                        target="_blank"
                        class="inline-flex items-center gap-2 rounded-xl bg-indigo-600 px-6 py-3 text-sm font-medium text-white shadow-lg shadow-indigo-500/20 transition-all hover:-translate-y-0.5 hover:bg-indigo-700 hover:shadow-indigo-500/40"
                    >
                        <FileHeart class="h-4 w-4" />
                        Download Resume
                    </a>
                </div>

                <!-- SUMMARY -->
                <section class="mb-20">
                    <div
                        class="rounded-3xl border border-gray-200/70 bg-white/70 p-10 shadow-xl backdrop-blur-md dark:border-gray-800 dark:bg-gray-900/60"
                    >
                        <h2 class="mb-6 text-2xl font-semibold">Professional Summary</h2>

                        <p class="leading-relaxed text-gray-600 dark:text-gray-400">
                            Senior Backend Engineer with 10+ years of backend experience, including 2 years building scalable Python systems using
                            Django and FastAPI. Strong background in Laravel production systems with a deliberate transition toward modern Python
                            backend architectures. Experienced in REST APIs, real-time systems, distributed messaging, authentication flows,
                            concurrency control, and designing reliable backend systems for scale.
                        </p>
                    </div>
                </section>

                <!-- SKILLS -->
                <section class="mb-24">
                    <h2 class="mb-10 text-center text-3xl font-bold">Core Technical Skills</h2>

                    <div class="grid gap-8 md:grid-cols-2">
                        <div
                            v-for="section in skillSections"
                            :key="section.title"
                            class="group rounded-3xl border border-gray-200 bg-white p-8 shadow-md transition-all hover:-translate-y-1 hover:shadow-xl dark:border-gray-800 dark:bg-gray-900"
                        >
                            <h3 class="mb-6 text-lg font-semibold text-indigo-600 dark:text-indigo-400">
                                {{ section.title }}
                            </h3>

                            <div class="flex flex-wrap gap-3">
                                <span
                                    v-for="item in section.items"
                                    :key="item"
                                    class="rounded-full bg-gray-100 px-4 py-1.5 text-sm font-medium text-gray-700 transition-colors hover:bg-indigo-100 dark:bg-gray-800 dark:text-gray-300 dark:hover:bg-indigo-900/40"
                                >
                                    {{ item }}
                                </span>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- EXPERIENCE TIMELINE -->
                <section>
                    <h2 class="mb-16 text-center text-3xl font-bold">Professional Experience</h2>

                    <div class="relative space-y-16 border-l border-gray-300 pl-8 dark:border-gray-700">
                        <div v-for="job in experiences" :key="job.company" class="relative">
                            <!-- Timeline Dot -->
                            <div
                                class="absolute top-2 -left-[13px] h-6 w-6 rounded-full border-4 border-white bg-indigo-600 dark:border-gray-950"
                            ></div>

                            <div
                                class="rounded-3xl border border-gray-200 bg-white p-8 shadow-md transition-all hover:shadow-xl dark:border-gray-800 dark:bg-gray-900"
                            >
                                <div class="flex flex-col md:flex-row md:items-start md:justify-between">
                                    <div>
                                        <h3 class="text-xl font-semibold">{{ job.role }} — {{ job.company }}</h3>
                                        <p class="text-sm text-gray-500 dark:text-gray-400">
                                            {{ job.location }}
                                        </p>
                                    </div>

                                    <span class="mt-2 text-sm font-medium text-indigo-600 md:mt-0 dark:text-indigo-400">
                                        {{ job.period }}
                                    </span>
                                </div>

                                <p class="mt-4 text-sm font-medium text-gray-500 dark:text-gray-400">
                                    {{ job.stack }}
                                </p>

                                <ul class="mt-6 space-y-3 text-sm text-gray-600 dark:text-gray-400">
                                    <li v-for="point in job.highlights" :key="point" class="flex items-start">
                                        <span class="mt-1 mr-3 h-2 w-2 rounded-full bg-indigo-500"></span>
                                        <span>{{ point }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- EDUCATION -->
                <section class="mt-24">
                    <div class="rounded-3xl border border-gray-200 bg-white p-10 shadow-xl dark:border-gray-800 dark:bg-gray-900">
                        <h2 class="mb-4 text-2xl font-semibold">Education</h2>
                        <p class="text-gray-600 dark:text-gray-400">B.Sc. in Electrical Engineering — Mansoura University (2014)</p>
                    </div>
                </section>
            </div>
        </div>
    </AppLayout>
</template>
