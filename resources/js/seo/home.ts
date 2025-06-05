import { SharedData } from '@/types';
import { usePage } from '@inertiajs/vue3';
import { useHead } from '@unhead/vue';

export default function useSeoHome() {
    const page = usePage<SharedData>();
    const baseUrl = page.props.ziggy.url;
    useHead({
        title: 'Islam Ahmed | Full Stack Developer Portfolio',
        meta: [
            {
                name: 'description',
                content:
                    'Portfolio of Islam Ahmed – Full Stack Developer specializing in Laravel, Vue.js, Livewire, Nuxt.js, and Flutter. Explore projects, skills, and contact me.',
            },
            {
                name: 'keywords',
                content:
                    'Islam Ahmed, Eslam Kamel, Laravel Developer, Vue.js Developer, Full Stack Developer, Web Development, Mobile App Development, Flutter Projects',
            },
            {
                name: 'author',
                content: 'Islam Ahmed',
            },

            // Open Graph / Social Preview
            {
                property: 'og:title',
                content: 'Islam Ahmed | Full Stack Developer Portfolio',
            },
            {
                property: 'og:description',
                content:
                    'Portfolio of Islam Ahmed – Full Stack Developer specializing in Laravel, Vue.js, Livewire, Nuxt.js, and Flutter. Explore projects, skills, and contact me.',
            },
            {
                property: 'og:type',
                content: 'website',
            },
            {
                property: 'og:url',
                content: `${baseUrl}/`,
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
                content: 'Islam Ahmed | Full Stack Developer Portfolio',
            },
            {
                name: 'twitter:description',
                content: 'Portfolio of Islam Ahmed – Full Stack Developer specializing in Laravel, Vue.js, Livewire, Nuxt.js, and Flutter.',
            },
            {
                name: 'twitter:image',
                content: `${baseUrl}/assets/seo/images/logo.png`,
            },
        ],
        script: [
            {
                type: 'application/ld+json',
                //   children: JSON.stringify({
                //     '@context': 'https://schema.org',
                //     '@type': 'Person',
                //     name: 'Islam Ahmed',
                //     url: 'https://islamdev.com',
                //     sameAs: [
                //       'https://github.com/EslamKamel89',
                //       'https://linkedin.com/in/eslamkamel89',
                //     ],
                //     jobTitle: 'Full Stack Developer',
                //     worksFor: {
                //       '@type': 'Organization',
                //       name: 'Gaztec',
                //       url: 'https://gaztec.co'
                //     },
                //     knowsAbout: ['Laravel', 'Vue.js', 'Nuxt.js', 'Livewire', 'Flutter']
                //   })
            },
        ],
    });

    return {};
}
