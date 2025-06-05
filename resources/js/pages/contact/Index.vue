<script setup lang="ts">
import ContactForm from '@/components/Contact/ContactForm.vue';
import ContactInfo from '@/components/Contact/ContactInfo.vue';
import VisibleAnimation from '@/components/Shared/VisibleAnimation.vue';
import { useLocale } from '@/composables/useLocale';
import AppLayout from '@/layouts/AppLayout.vue';
import useSeoContact from '@/seo/contact';
import SeoHead from '@/seo/SeoHead.vue';
import { SharedData } from '@/types';
import { usePage } from '@inertiajs/vue3';
const { t } = useLocale();
const page = usePage<SharedData>();
const baseUrl = page.props.ziggy.url;
useSeoContact();
</script>
<template>
    <AppLayout class="">
        <SeoHead
            title="Contact Me - Islam Ahmed | Full Stack Developer"
            :description="'Get in touch with Islam Ahmed – Full Stack Developer specializing in Laravel, Vue.js, Livewire, Nuxt.js, and Flutter.'"
            :keywords="'Contact Islam Ahmed, Hire Laravel Developer, Vue.js Contact Form, Full Stack Developer Email, Islam Ahmed LinkedIn, Freelance Laravel Dev'"
            :url="`${baseUrl}/contact`"
            :image="`${baseUrl}/assets/seo/images/logo.png`"
        />
        <div class="mx-auto grid max-w-5xl items-start gap-12 md:grid-cols-2">
            <!-- Left Column - Info & Links -->
            <VisibleAnimation>
                <ContactInfo />
            </VisibleAnimation>
            <!-- Right Column - Contact Form -->
            <VisibleAnimation>
                <div class="bg-card rounded-lg border p-6 shadow-md">
                    <h3 class="mb-4 text-xl font-semibold">{{ t('SEND_MESSAGE') }}</h3>
                    <ContactForm to="contact" />
                </div>
            </VisibleAnimation>
        </div>
    </AppLayout>
</template>
