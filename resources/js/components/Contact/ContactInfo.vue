<script setup lang="ts">
import { useLocale } from '@/composables/useLocale';
import { ref } from 'vue';
import SocialLinks from './SocialLinks.vue';

const illustrationUrl = ref('/assets/images/contact.png');
const { t } = useLocale();
</script>
<template>
    <div class="space-y-2">
        <h2 class="text-3xl font-bold sm:text-4xl">{{ t('GET_IN_TOUCH') }}</h2>
        <p class="text-muted-foreground text-lg">{{ t('CONTACT_ME_DESCRIPTION') }}</p>

        <!-- Illustration / Avatar -->
        <div class="mt-2 flex justify-center md:justify-start">
            <img
                :src="illustrationUrl"
                alt="Contact Illustration"
                class="shadow-primary/70 hover:bg-primary/20 w-full rounded-2xl object-cover transition-all duration-700 hover:scale-100 hover:shadow-2xl"
            />
        </div>

        <SocialLinks />
    </div>
</template>
