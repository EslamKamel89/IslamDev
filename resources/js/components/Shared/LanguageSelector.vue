<template>
    <div class="flex gap-2">
        <Button variant="outline" v-if="locale == 'ar'" @click="setLang('en')">En</Button>
        <Button variant="outline" v-if="locale == 'en'" @click="setLang('ar')">ع</Button>
    </div>
</template>

<script setup lang="ts">
import { useLocale } from '@/composables/useLocale';
import Button from '../ui/button/Button.vue';

const { locale, setLang } = useLocale();
</script>
