<script setup lang="ts">
import { useLocale } from '@/composables/useLocale';
import { useI18n } from 'vue-i18n';
import SkillsSection from './SkillsSection.vue';

const { locale } = useI18n();
const { t, isRtl } = useLocale();
</script>

<template>
    <section class="relative mt-4 flex min-h-screen items-center justify-center px-4 sm:px-8">
        <!-- Content Container -->
        <div class="z-10 mx-auto max-w-4xl space-y-8 rounded-3xl border border-white/20 bg-white/10 p-8 text-center shadow-xl backdrop-blur-lg">
            <!-- Avatar -->
            <div class="flex justify-center">
                <div
                    class="border-primary h-28 w-28 overflow-hidden rounded-full border-4 shadow-md transition-transform duration-300 hover:scale-105 sm:h-32 sm:w-32"
                >
                    <img src="/assets/images/avatar.png" alt="Islam Ahmed" class="h-full w-full object-cover" />
                </div>
            </div>

            <!-- Greeting -->
            <h1 class="text-4xl leading-tight font-extrabold tracking-tight sm:text-5xl">
                {{ t('HELLO_INTRO') }}
                <span class="text-primary">{{ t('MY_NAME') }}</span>
            </h1>
            <SkillsSection />

            <!-- Call to Action Buttons -->
            <div class="mt-6 flex flex-wrap justify-center gap-4">
                <Button size="lg" class="transition-transform duration-200 hover:scale-105">
                    {{ t('VIEW_PROJECTS') }}
                </Button>
                <Button size="lg" variant="outline" class="transition-transform duration-200 hover:scale-105">
                    {{ t('DOWNLOAD_CV') }}
                </Button>
                <Button size="lg" variant="secondary" class="transition-transform duration-200 hover:scale-105">
                    {{ t('CONTACT_ME') }}
                </Button>
            </div>
        </div>
    </section>
</template>
