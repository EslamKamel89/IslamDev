<script setup lang="ts">
import ContactForm from '@/components/Contact/ContactForm.vue';
import ContactInfo from '@/components/Contact/ContactInfo.vue';
import { useLocale } from '@/composables/useLocale';
import AppLayout from '@/layouts/AppLayout.vue';
const { t } = useLocale();
</script>
<template>
    <AppLayout class="">
        <div class="mx-auto grid max-w-5xl items-start gap-12 md:grid-cols-2">
            <!-- Left Column - Info & Links -->
            <ContactInfo />
            <!-- Right Column - Contact Form -->
            <div class="bg-card rounded-lg border p-6 shadow-md">
                <h3 class="mb-4 text-xl font-semibold">{{ t('SEND_MESSAGE') }}</h3>
                <ContactForm to="contact" />
            </div>
        </div>
    </AppLayout>
</template>
