<template>
    <div class="flex gap-2">
        <Button variant="outline" v-if="locale == 'ar'" @click="setLang('en')">En</Button>
        <Button variant="outline" v-if="locale == 'en'" @click="setLang('ar')">ع</Button>
    </div>
</template>

<script setup lang="ts">
import { useI18n } from 'vue-i18n';
import Button from '../ui/button/Button.vue';

const { locale } = useI18n();

function setLang(lang: string) {
    locale.value = lang;
    const htmlEl = document.documentElement;
    htmlEl.setAttribute('lang', lang);
    htmlEl.setAttribute('dir', lang === 'ar' ? 'rtl' : 'ltr');
}
</script>
