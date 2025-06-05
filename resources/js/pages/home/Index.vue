<script setup lang="ts">
import ContactSection from '@/components/Home/ContactSection.vue';
import HeroSection from '@/components/Home/HeroSection.vue';
import ProjectShowcase from '@/components/Home/ProjectShowcase.vue';
import TestimonialsSection from '@/components/Home/TestimonialsSection.vue';
import VisibleAnimation from '@/components/Shared/VisibleAnimation.vue';
import AppLayout from '@/layouts/app/AppHeaderLayout.vue';
import useSeoHome from '@/seo/home';
import SeoHead from '@/seo/SeoHead.vue';
import { SharedData } from '@/types';
import { usePage } from '@inertiajs/vue3';
useSeoHome();
const page = usePage<SharedData>();
const baseUrl = page.props.ziggy.url;
</script>
<template>
    <AppLayout>
        <SeoHead
            title="Islam Ahmed | Full Stack Developer Portfolio"
            :description="'Portfolio of Islam Ahmed – Full Stack Developer specializing in Laravel, Vue.js, Livewire, Nuxt.js, and Flutter. Explore projects, skills, and contact me.'"
            :keywords="'Islam Ahmed, Eslam Kamel, Laravel Developer, Vue.js Developer, Full Stack Developer, Web Development, Mobile App Development, Flutter Projects'"
            :url="`${baseUrl}/`"
            :image="`${baseUrl}/assets/seo/images/logo.png`"
        />
        <VisibleAnimation>
            <HeroSection />
        </VisibleAnimation>

        <VisibleAnimation>
            <ProjectShowcase />
        </VisibleAnimation>
        <VisibleAnimation>
            <TestimonialsSection />
        </VisibleAnimation>
        <VisibleAnimation>
            <ContactSection />
        </VisibleAnimation>
    </AppLayout>
</template>
