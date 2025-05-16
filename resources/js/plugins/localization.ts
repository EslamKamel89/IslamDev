import { createI18n } from 'vue-i18n';
const messages = {
    en: {
        greeting: 'Hello',
        about: 'About Me',
        projects: 'Projects',
        contact: 'Contact',
        home: 'Home',
    },
    ar: {
        greeting: 'مرحبا',
        about: 'عني',
        projects: 'مشاريعي',
        contact: 'اتصل بي',
        home: 'الرئيسية',
    },
};

export default createI18n({
    legacy: false,
    locale: 'en', // default language
    fallbackLocale: 'en',
    availableLocales: ['en', 'ar'],
    globalInjection: true,
    messages,
});
