import { SharedData } from '@/types';
import { usePage } from '@inertiajs/vue3';
import { useHead } from '@unhead/vue';
export default function useSeoContact() {
    const page = usePage<SharedData>();
    const baseUrl = page.props.ziggy.url;
    useHead({
        title: 'Contact Me - Islam Ahmed | Full Stack Developer',
        meta: [
            {
                name: 'description',
                content: 'Get in touch with Islam Ahmed – Full Stack Developer specializing in Laravel, Vue.js, Livewire, Nuxt.js, and Flutter.',
            },
            {
                name: 'keywords',
                content:
                    'Contact Islam Ahmed, Hire Laravel Developer, Vue.js Contact Form, Full Stack Developer Email, Islam Ahmed LinkedIn, Freelance Laravel Dev',
            },
            {
                name: 'author',
                content: 'Islam Ahmed',
            },

            // Open Graph
            {
                property: 'og:title',
                content: 'Contact Me - Islam Ahmed | Full Stack Developer',
            },
            {
                property: 'og:description',
                content: 'Reach out to Islam Ahmed – A Full Stack Developer who builds modern web & mobile apps with Laravel, Vue.js, and Flutter.',
            },
            {
                property: 'og:type',
                content: 'website',
            },
            {
                property: 'og:url',
                content: `${baseUrl}/contact`,
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
                content: 'Contact Me - Islam Ahmed | Full Stack Developer',
            },
            {
                name: 'twitter:description',
                content: 'Get in touch with Islam Ahmed – Full Stack Developer building modern applications with Laravel, Vue.js, and Flutter.',
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
        //         '@type': 'ContactPage',
        //         name: 'Contact Islam Ahmed',
        //         description:
        //           'Get in touch with Islam Ahmed – Full Stack Developer building modern applications using Laravel, Vue.js, Nuxt.js, and Flutter.',
        //         url: 'https://islamdev.com/contact',
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
        //         potentialAction: {
        //           '@type': 'EmailAction',
        //           name: 'Send me an email',
        //           handler: {
        //             '@type': 'HttpActionHandler',
        //             url: 'mailto:eslamkamelforex@gmail.com'
        //           }
        //         }
        //       })
        //     }
        //   ]
    });
    return {};
}
