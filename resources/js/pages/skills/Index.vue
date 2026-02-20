<script setup lang="ts">
import SkillCategoryCard from '@/components/Skills/SkillCategoryCard.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import SeoHead from '@/seo/SeoHead.vue';
import useSeoSkills from '@/seo/skills';
import { SharedData } from '@/types';
import { usePage } from '@inertiajs/vue3';
import { computed } from 'vue';

const page = usePage<SharedData>();

const categories = computed(() => {
    return page.props.categories;
});

useSeoSkills();

const baseUrl = page.props.ziggy.url;
</script>

<template>
    <AppLayout>
        <SeoHead
            title="Skills - Backend Engineer | FastAPI, Django & Laravel"
            :description="'Explore backend-focused production projects built with FastAPI, Django, and Laravel — emphasizing scalable APIs, background processing systems, and modern backend architecture.'"
            :keywords="'FastAPI, Django, Laravel, Backend Engineer, API Development, System Design, Background Jobs, Python Backend'"
            :url="`${baseUrl}/skills`"
            :image="`${baseUrl}/assets/seo/images/logo.png`"
        />

        <!-- Hero Section -->
        <section class="relative overflow-hidden py-20">
            <div class="from-primary/5 absolute inset-0 -z-10 bg-gradient-to-b via-transparent to-transparent"></div>

            <div class="mx-auto max-w-4xl text-center">
                <h1 class="text-4xl font-bold tracking-tight sm:text-5xl">Backend Engineering Stack</h1>
                <p class="text-muted-foreground mx-auto mt-6 max-w-2xl text-lg leading-relaxed">
                    Production-focused technologies centered around scalable API systems, asynchronous processing, and modern backend architecture
                    using FastAPI, Django, and Laravel.
                </p>
            </div>
        </section>

        <!-- Categories Grid -->
        <section class="mx-auto max-w-6xl px-4 pb-20 sm:px-6 lg:px-8">
            <div class="grid gap-8 md:grid-cols-2 xl:grid-cols-3">
                <SkillCategoryCard
                    v-for="(category, index) in categories"
                    :key="category.id"
                    :title="category.name"
                    :skills="category.skills ?? []"
                    :index="index"
                />
            </div>
        </section>
    </AppLayout>
</template>
