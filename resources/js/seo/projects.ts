import { SharedData } from '@/types';
import { usePage } from '@inertiajs/vue3';
import { useHead } from '@unhead/vue';
export default function useSeoProjects() {
    const page = usePage<SharedData>();
    const baseUrl = page.props.ziggy.url;
    useHead({
        title: 'Projects - Islam Ahmed | Full Stack Developer',
        meta: [
            {
                name: 'description',
                content:
                    'Explore projects by Islam Ahmed – A Full Stack Developer specializing in Laravel, Vue.js, Livewire, Nuxt.js, Flutter, and real-time web applications.',
            },
            {
                name: 'keywords',
                content:
                    'Islam Ahmed, Eslam Kamel, Laravel Projects, Vue.js Portfolio, Flutter App Development, Full Stack Developer, TALL Stack, VILTS Stack, Web & Mobile Projects',
            },
            {
                name: 'author',
                content: 'Islam Ahmed',
            },

            // Open Graph / Social Preview
            {
                property: 'og:title',
                content: 'Projects - Islam Ahmed | Full Stack Developer',
            },
            {
                property: 'og:description',
                content:
                    'Explore real-world projects built by Islam Ahmed including full-stack apps, real-time dashboards, e-commerce platforms, and mobile apps with Flutter.',
            },
            {
                property: 'og:type',
                content: 'website',
            },
            {
                property: 'og:url',
                content: `${baseUrl}/assets/seo/images/logo.png`,
            },
            {
                property: 'og:image',
                content: `${baseUrl}/assets/seo/images/logo.png`,
            },

            // Twitter Card
            {
                name: 'twitter:card',
                content: 'summary_large_image',
            },
            {
                name: 'twitter:creator',
                content: '@EslamKamel89',
            },
            {
                name: 'twitter:title',
                content: 'Projects - Islam Ahmed | Full Stack Developer',
            },
            {
                name: 'twitter:description',
                content:
                    'See my portfolio of real-world projects built with Laravel, Vue.js, Nuxt.js, Livewire, and Flutter – all open source and ready to explore.',
            },
            {
                name: 'twitter:image',
                content: `${baseUrl}/assets/seo/images/logo.png`,
            },
        ],
        // script: [
        //     {
        //         type: 'application/ld+json',
        //         children: JSON.stringify({
        //             '@context': 'https://schema.org',
        //             '@type': 'WebPage',
        //             name: 'Islam Ahmed - My Projects',
        //             description:
        //                 'A collection of professional projects developed by Islam Ahmed using modern web and mobile technologies like Laravel, Vue.js, Nuxt.js, and Flutter.',
        //             url: 'https://islamdev.com/projects',
        //             inLanguage: 'en-US',
        //             isPartOf: {
        //                 '@type': 'WebSite',
        //                 name: 'Islam Ahmed Portfolio',
        //                 url: 'https://islamdev.com',
        //             },
        //             datePublished: '2024-10-01',
        //             dateModified: new Date().toISOString(),
        //             author: {
        //                 '@type': 'Person',
        //                 name: 'Islam Ahmed',
        //                 url: 'https://eslamkamel89.github.io',
        //                 sameAs: ['https://github.com/EslamKamel89', 'https://linkedin.com/in/eslamkamel89/'],
        //             },
        //             publisher: {
        //                 '@type': 'Organization',
        //                 name: 'Islam Ahmed',
        //                 logo: {
        //                     '@type': 'ImageObject',
        //                     url: 'https://islamdev.com/logo.png',
        //                 },
        //             },
        //             mainEntityOfPage: true,
        //             breadcrumb: 'Home > Projects',
        //         }),
        //     },
        // ],
    });
}
