<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import { defineProps } from 'vue';

const props = defineProps<{
    title: string;
    description?: string;
    keywords?: string;
    url?: string;
    image?: string;
}>();
</script>

<template>
    <Head>
        <!-- Basic Meta -->
        <title>{{ title }}</title>
        <meta name="description" content="description ?? ''" />
        <meta name="keywords" :content="keywords ?? ''" />
        <meta name="author" content="Islam Ahmed" />

        <!-- Open Graph / Facebook -->
        <meta property="og:title" :content="title" />
        <meta property="og:description" :content="description ?? ''" />
        <meta property="og:type" content="website" />
        <meta property="og:url" :content="url ?? 'https://islamdev.com/'" />
        <meta property="og:image" :content="image ?? 'https://islamdev.com/images/seo/projects.png'" />

        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:creator" content="@EslamKamel89" />
        <meta name="twitter:title" :content="title" />
        <meta name="twitter:description" :content="description ?? ''" />
        <meta name="twitter:image" :content="image ?? 'https://islamdev.com/images/seo/projects.png'" />

        <!--
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "WebPage",
                "name": "{{ title }}",
                "description": "{{ description }}",
                "url": "{{ url ?? 'https://islamdev.com/projects'  }}",
                "inLanguage": "en-US",
                "isPartOf": {
                    "@type": "WebSite",
                    "name": "Islam Ahmed Portfolio",
                    "url": "https://islamdev.com"
                },
                "datePublished": "2024-10-01",
                "dateModified": "{{ new Date().toISOString() }}",
                "author": {
                    "@type": "Person",
                    "name": "Islam Ahmed",
                    "url": "https://eslamkamel89.github.io",
                    "sameAs": ["https://github.com/EslamKamel89", "https://linkedin.com/in/eslamkamel89/"]
                },
                "publisher": {
                    "@type": "Organization",
                    "name": "Islam Ahmed",
                    "logo": {
                        "@type": "ImageObject",
                        "url": "https://islamdev.com/logo.png"
                    }
                },
                "mainEntityOfPage": true,
                "breadcrumb": "Home > Projects"
            }
        </script>
         -->
    </Head>
</template>
