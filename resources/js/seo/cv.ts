import { SharedData } from '@/types';
import { usePage } from '@inertiajs/vue3';
import { useHead } from '@unhead/vue';
export default function useSeoCv() {
    const page = usePage<SharedData>();
    const baseUrl = page.props.ziggy.url;

    useHead({
        title: 'CV / Resume - Islam Ahmed | Full Stack Developer',
        meta: [
            {
                name: 'description',
                content: 'Download Islam Ahmed’s CV – A Full Stack Developer specializing in Laravel, Vue.js, Nuxt.js, Livewire, and Flutter.',
            },
            {
                name: 'keywords',
                content: 'Islam Ahmed, Eslam Kamel, Laravel Developer, Vue.js Developer, Full Stack Resume, Download CV, Developer Portfolio',
            },
            {
                name: 'author',
                content: 'Islam Ahmed',
            },

            // Open Graph
            {
                property: 'og:title',
                content: 'CV / Resume - Islam Ahmed | Full Stack Developer',
            },
            {
                property: 'og:description',
                content: 'Download Islam Ahmed’s CV – A Full Stack Developer specializing in Laravel, Vue.js, Nuxt.js, Livewire, and Flutter.',
            },
            {
                property: 'og:type',
                content: 'website',
            },
            {
                property: 'og:url',
                content: `${baseUrl}/cv`,
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
                content: 'CV / Resume - Islam Ahmed | Full Stack Developer',
            },
            {
                name: 'twitter:description',
                content: 'Download Islam Ahmed’s CV – A Full Stack Developer specializing in Laravel, Vue.js, Nuxt.js, Livewire, and Flutter.',
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
        //         name: 'Islam Ahmed - Resume / Curriculum Vitae',
        //         description:
        //           'A downloadable resume of Islam Ahmed – Full Stack Developer with expertise in Laravel, Vue.js, Livewire, and Flutter.',
        //         url: 'https://islamdev.com/cv',
        //         inLanguage: 'en-US',
        //         isPartOf: {
        //           '@type': 'WebSite',
        //           name: 'Islam Ahmed Portfolio',
        //           url: 'https://islamdev.com'
        //         },
        //         author: {
        //           '@type': 'Person',
        //           name: 'Islam Ahmed',
        //           sameAs: [
        //             'https://github.com/EslamKamel89',
        //             'https://linkedin.com/in/eslamkamel89/'
        //           ]
        //         },
        //         publisher: {
        //           '@type': 'Organization',
        //           name: 'Islam Ahmed',
        //           logo: {
        //             '@type': 'ImageObject',
        //             url: 'https://islamdev.com/logo.png'
        //           }
        //         },
        //         mainEntityOfPage: true,
        //         breadcrumb: 'Home > CV'
        //       })
        //     }
        //   ]
    });
    return {};
}
