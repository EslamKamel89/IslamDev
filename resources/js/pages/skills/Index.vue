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
            title="Skills - Islam Ahmed | Full Stack Developer"
            :description="'Explore the technical skills of Islam Ahmed – Full Stack Developer specializing in Laravel, Vue.js, Livewire, Nuxt.js, Flutter, and more.'"
            :keywords="'Islam Ahmed, Eslam Kamel, Laravel, Vue.js, Livewire, Nuxt.js, Flutter, DevOps, Web Development, Mobile App Development, TALL Stack, VILTS'"
            :url="`${baseUrl}/skills`"
            :image="`${baseUrl}/assets/seo/images/logo.png`"
        />
        <section class="">
            <div class="mb-12 text-center">
                <h1 class="text-3xl font-bold sm:text-4xl">My Tech Stack</h1>
                <p class="text-muted-foreground mt-2">Here are the tools and technologies I work with regularly.</p>
            </div>

            <!-- Categories -->
            <div class="space-y-12">
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
