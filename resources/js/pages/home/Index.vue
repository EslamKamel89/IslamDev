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
            title="Islam Ahmed - Backend Engineer | FastAPI, Django & Laravel"
            :description="'Explore backend-focused production projects built with FastAPI, Django, and Laravel — emphasizing scalable APIs, background processing systems, and modern backend architecture.'"
            :keywords="'FastAPI, Django, Laravel, Backend Engineer, API Development, System Design, Background Jobs, Python Backend'"
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
