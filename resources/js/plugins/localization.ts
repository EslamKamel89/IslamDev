import { createI18n } from 'vue-i18n';
const messages = {
    en: {
        greeting: 'Hello',
        about: 'About Me',
        projects: 'Projects',
        contact: 'Contact',
        home: 'Home',
        LOGIN: 'login',
        REGISTER: 'Register',
        LOGIN_INTO_ACCOUNT: 'Log in to your account',
        ENTER_EMAIL_PASSWORD: 'Enter your email and password below to log in',
        EMAIL_ADDRESS: 'Email address',
        PASSWORD: 'Password',
        REMEMBER_ME: 'Remember me',
        DONT_HAVE_ACCOUNT: "Don't have an account?",
        FORGET_PASSWORD: ' Forgot password?',
    },
    ar: {
        greeting: 'مرحبا',
        about: 'عني',
        projects: 'مشاريعي',
        contact: 'اتصل بي',
        home: 'الرئيسية',
        LOGIN: 'تسجيل الدخول',
        REGISTER: 'تسجيل حساب جديد',

        LOGIN_INTO_ACCOUNT: 'سجّل الدخول إلى حسابك',
        ENTER_EMAIL_PASSWORD: 'أدخل بريدك الإلكتروني وكلمة المرور للدخول',
        EMAIL_ADDRESS: 'البريد الإلكتروني',
        PASSWORD: 'كلمة المرور',
        REMEMBER_ME: 'تذكرني',
        DONT_HAVE_ACCOUNT: 'ليس لديك حساب؟',
        FORGET_PASSWORD: 'نسيت كلمة المرور؟',
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
