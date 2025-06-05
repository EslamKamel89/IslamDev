<script setup lang="ts">
import { useLocale } from '@/composables/useLocale';
import { Link } from '@inertiajs/vue3';
import { useI18n } from 'vue-i18n';
import Button from '../ui/button/Button.vue';
import SkillsSection from './SkillsSection.vue';
// Localized texts
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
                    v-motion
                    :initial="{
                        scale: 0,
                    }"
                    :delay="200"
                    :duration="1200"
                    :visible="{
                        scale: 1,
                        transition: {
                            type: 'spring',
                            stiffness: '100',
                        },
                    }"
                    class="border-primary h-28 w-28 overflow-hidden rounded-full border-4 shadow-md sm:h-32 sm:w-32"
                >
                    <img src="/assets/images/avatar.png" alt="Islam Ahmed" class="h-full w-full object-cover" />
                </div>
            </div>

            <!-- Greeting -->
            <h1 class="text-4xl leading-tight font-extrabold tracking-tight sm:text-5xl">
                {{ t('HELLO_INTRO') }}
                <span class="text-primary">{{ t('MY_NAME') }}</span>
            </h1>

            <!-- Skills Section -->
            <div>
                <SkillsSection />
            </div>

            <!-- Call to Action Buttons -->
            <div class="mt-6 flex flex-wrap justify-center gap-4">
                <Link :href="route('projects.index')">
                    <Button size="lg" variant="secondary" class="transition-transform hover:scale-105" ref="ctaButtons">
                        {{ t('VIEW_PROJECTS') }}
                    </Button>
                </Link>
                <a href="/assets/files/cv.pdf" target="_blank">
                    <Button size="lg" variant="outline" class="transition-transform hover:scale-105" ref="ctaButtons">
                        {{ t('DOWNLOAD_CV') }}
                    </Button>
                </a>
                <Link :href="route('contact')">
                    <Button size="lg" variant="secondary" class="transition-transform hover:scale-105" ref="ctaButtons">
                        {{ t('CONTACT_ME') }}
                    </Button>
                </Link>
            </div>
        </div>
    </section>
</template>
