import { useI18n } from 'vue-i18n';
const savedLang = localStorage.getItem('lang') || 'en';
let init = false;
export const useLocale = () => {
    const { locale, rt, t } = useI18n();
    if (!init) {
        setLang(savedLang);
        init = true;
    }
    const isRtl = () => {
        return locale.value == 'ar';
    };
    function setLang(lang: string) {
        locale.value = lang;
        const htmlEl = document.documentElement;
        htmlEl.setAttribute('lang', lang);
        htmlEl.setAttribute('dir', lang === 'ar' ? 'rtl' : 'ltr');
        localStorage.setItem('lang', lang);
    }
    return {
        locale,
        isRtl,
        t,
        setLang,
    };
};
