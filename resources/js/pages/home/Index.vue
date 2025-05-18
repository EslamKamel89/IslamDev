<script setup lang="ts">
import ContactSection from '@/components/Home/ContactSection.vue';
import HeroSection from '@/components/Home/HeroSection.vue';
import ProjectShowcase from '@/components/Home/ProjectShowcase.vue';
import TestimonialsSection from '@/components/Home/TestimonialsSection.vue';
import AppLayout from '@/layouts/app/AppHeaderLayout.vue';
</script>
<template>
    <AppLayout>
        <HeroSection />
        <ProjectShowcase />
        <TestimonialsSection />
        <ContactSection />
    </AppLayout>
</template>
