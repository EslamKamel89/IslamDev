<template>
    <div class="mx-auto mb-12 max-w-5xl text-center">
        <h2 class="text-3xl font-bold sm:text-4xl">{{ t('CLIENT_FEEDBACK') }}</h2>
        <p class="text-muted-foreground mt-2">{{ t('WHAT_PEOPLE_SAY') }}</p>
    </div>
</template>

<script setup lang="ts">
import { useLocale } from '@/composables/useLocale';

const { t } = useLocale();
</script>
