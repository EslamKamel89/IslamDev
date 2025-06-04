<script setup lang="ts">
import { useLocale } from '@/composables/useLocale';
import ContactForm from '../Contact/ContactForm.vue';
import SocialLinks from '../Contact/SocialLinks.vue';
const { t } = useLocale();
</script>

<template>
    <section class="from-background to-muted text-foreground bg-gradient-to-br px-6 py-16">
        <div class="mx-auto grid max-w-6xl items-center gap-12 md:grid-cols-2">
            <!-- Left Column - Illustration & Info -->
            <div class="space-y-8">
                <h2 class="text-3xl font-bold sm:text-4xl">{{ t('WORK_TOGETHER') }}</h2>
                <p class="text-muted-foreground text-lg">
                    {{ t('CONTACT_ME_DESCRIPTION') }}
                </p>

                <SocialLinks />
            </div>

            <ContactForm to="home" />
        </div>
    </section>
</template>
