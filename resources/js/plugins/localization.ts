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
        CREATE_ACCOUNT: 'Create an account',
        ENTER_DETAILS: 'Enter your details below to create your account',
        NAME: 'Name',
        FULL_NAME: 'Full name',
        CONFIRM_PASSWORD: 'Confirm password',
        HAVE_ACCOUNT: 'Already have an account?',
        SETTINGS: 'Settings',
        LOGOUT: 'Logout',
        VIEW_PROJECTS: 'View Projects',
        DOWNLOAD_CV: 'Download CV',
        CONTACT_ME: 'Contact Me',
        HELLO_INTRO: "Hello, I'm",
        MY_NAME: 'Eslam Kamel',
        MY_TECH_STACK: 'My Tech Stack',
        TECH_STACK_INTRO:
            'As a Full-Stack Developer, I specialize in building robust web and mobile applications using modern technologies. My core stack includes Laravel, Livewire, Vue, Nuxt.js, and Flutter.',
        EXPLORE_PROJECTS: 'Explore some of my featured worK',
        VIEW_ALL_PROJECTS: 'View All Projects',
        CLIENT_FEEDBACK: 'Client Feedback',
        WHAT_PEOPLE_SAY: 'What people say about working with me',
        SKILLS: 'Skills',
        PROJECTS: 'Projects',
        CV: 'CV',
        CONTACT: 'Contact me',
        MESSAGE_SEND: 'Message Sent!',
        MESSAGE_SEND_DESCRIPTION: 'Your message has been successfully delivered! We’ll get back to you as soon as possible. 😊',
        WORK_TOGETHER: 'Let’s Work Together',
        CONTACT_ME_DESCRIPTION: " Whether you're looking to build a product, feature, or just want to say hi – feel free to reach out!",
        DOWNLOAD_RESUME: 'Download Resume',
        YOUR_NAME: 'Your name',
        EMAIL: 'Email',
        MESSAGE: 'Message',
        HOW_CAN_HELP: 'Tell me how I can help...',
        SEND_MESSAGE: 'Send Message',
        GET_IN_TOUCH: 'Get in Touch',
        FOOTER_INTRO: 'Full Stack Developer crafting modern web & mobile applications.',
        ALL_RIGHT_RESERVED: 'All rights reserved.',
        QUICK_LINKS: 'Quick Links',
        ABOUT: 'About Me',
        STAY_CONNECTED: 'Stay Connected',
        GET_IN_TOUCH_2: 'Get in touch for freelance opportunities or collaborations.',
        BLOG: 'Blog',
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
        CREATE_ACCOUNT: 'إنشاء حساب',
        ENTER_DETAILS: 'أدخل بياناتك لإنشاء حسابك',
        NAME: 'الاسم',
        FULL_NAME: 'الاسم الكامل',
        CONFIRM_PASSWORD: 'تأكيد كلمة المرور',
        HAVE_ACCOUNT: 'هل لديك حساب بالفعل؟',
        SETTINGS: 'الإعدادات',
        LOGOUT: 'تسجيل الخروج',
        VIEW_PROJECTS: 'عرض المشاريع',
        DOWNLOAD_CV: 'تحميل السيرة الذاتية',
        CONTACT_ME: 'اتصل بي',
        HELLO_INTRO: 'مرحبًا، أنا',
        MY_NAME: 'إسلام كامل',
        MY_TECH_STACK: 'أدواتي التقنية',
        TECH_STACK_INTRO:
            'كمطور Full-Stack، أتخصص في بناء تطبيقات الويب والجوال القوية باستخدام التقنيات الحديثة. تشمل أدواتي الأساسية Laravel، Livewire، Vue، Nuxt.js، وFlutter.',
        EXPLORE_PROJECTS: 'استكشف بعضًا من أعمالي المميزة',
        VIEW_ALL_PROJECTS: 'عرض جميع المشاريع',
        CLIENT_FEEDBACK: 'تعليقات العملاء',
        WHAT_PEOPLE_SAY: 'ما يقوله الناس عن العمل معي',
        SKILLS: 'المهارات',
        PROJECTS: 'المشاريع',
        CV: 'السيرة الذاتية',
        CONTACT: 'تواصل معي',
        MESSAGE_SEND: 'تم إرسال الرسالة!',
        MESSAGE_SEND_DESCRIPTION: 'تم تسليم رسالتك بنجاح! سنرد عليك في أقرب وقت ممكن. 😊',
        WORK_TOGETHER: 'لنعمل معًا',
        CONTACT_ME_DESCRIPTION: 'سواء كنت تريد بناء منتج أو ميزة، أو فقط تريد أن تقول مرحبًا - لا تتردد في التواصل!',
        DOWNLOAD_RESUME: 'تحميل السيرة الذاتية',
        YOUR_NAME: 'اسمك',
        EMAIL: 'البريد الإلكتروني',
        MESSAGE: 'الرسالة',
        HOW_CAN_HELP: 'أخبرني كيف يمكنني مساعدتك...',
        SEND_MESSAGE: 'إرسال الرسالة',
        GET_IN_TOUCH: 'ابقى على تواصل',
        FOOTER_INTRO: 'مطور Full Stack متخصص في بناء تطبيقات الويب والجوال الحديثة.',
        ALL_RIGHT_RESERVED: ' جميع الحقوق محفوظة.',
        QUICK_LINKS: 'روابط سريعة',
        ABOUT: 'معلومات عني',
        STAY_CONNECTED: 'ابق على اتصال',
        GET_IN_TOUCH_2: 'تواصل معي لفرص العمل الحر أو التعاون.',
        BLOG: 'المدونة',
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
