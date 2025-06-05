import { SharedData } from '@/types';
import { usePage } from '@inertiajs/vue3';
import { useHead } from '@unhead/vue';

export default function useSeoSkills() {
    const page = usePage<SharedData>();
    const baseUrl = page.props.ziggy.url;
    useHead({
        title: 'Skills - Islam Ahmed | Full Stack Developer',
        meta: [
            {
                name: 'description',
                content:
                    'Explore the technical skills of Islam Ahmed – Full Stack Developer specializing in Laravel, Vue.js, Livewire, Nuxt.js, Flutter, and more.',
            },
            {
                name: 'keywords',
                content:
                    'Islam Ahmed, Eslam Kamel, Laravel, Vue.js, Livewire, Nuxt.js, Flutter, DevOps, Web Development, Mobile App Development, TALL Stack, VILTS',
            },
            {
                name: 'author',
                content: 'Islam Ahmed',
            },

            // Open Graph / Social Preview
            {
                property: 'og:title',
                content: 'Skills - Islam Ahmed | Full Stack Developer',
            },
            {
                property: 'og:description',
                content:
                    'Explore the technical skills of Islam Ahmed – Full Stack Developer specializing in Laravel, Vue.js, Livewire, Nuxt.js, and Flutter.',
            },
            {
                property: 'og:type',
                content: 'website',
            },
            {
                property: 'og:url',
                content: `${baseUrl}/skills`,
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
                content: 'Skills - Islam Ahmed | Full Stack Developer',
            },
            {
                name: 'twitter:description',
                content: 'A breakdown of my full-stack development skills including Laravel, Vue.js, Livewire, Nuxt.js, Flutter, and DevOps tools.',
            },
            {
                name: 'twitter:image',
                content: `${baseUrl}/assets/seo/images/logo.png`,
            },
        ],
        //   script: [
        //     {
        //       type: 'application/ld+json',
        //       children: JSON.stringify({
        //         '@context': 'https://schema.org',
        //         '@type': 'WebPage',
        //         name: 'Skills - Islam Ahmed Portfolio',
        //         description: 'A detailed list of technical skills of Islam Ahmed, Full Stack Developer specializing in Laravel, Vue.js, Flutter, and modern web technologies.',
        //         url: 'https://islamdev.com/skills',
        //         inLanguage: 'en-US',
        //         isPartOf: {
        //           '@type': 'WebSite',
        //           'name': 'Islam Ahmed Portfolio',
        //           'url': 'https://islamdev.com'
        //         },
        //         author: {
        //           '@type': 'Person',
        //           'name': 'Islam Ahmed',
        //           'url': 'https://eslamkamel89.github.io',
        //           'sameAs': [
        //             'https://github.com/EslamKamel89',
        //             'https://linkedin.com/in/eslamkamel89/'
        //           ]
        //         }
        //       })
        //     }
        //   ]
    });
    return {};
}
