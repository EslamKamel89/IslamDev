<script setup lang="ts">
import SkillCategoryCard from '@/components/Skills/SkillCategoryCard.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import { SharedData } from '@/types';
import { usePage } from '@inertiajs/vue3';
import { computed } from 'vue';
const page = usePage<SharedData>();
const categories = computed(() => {
    return page.props.categories;
});
</script>
<template>
    <AppLayout>
        <section class="">
            <div class="mb-12 text-center">
                <h1 class="text-3xl font-bold sm:text-4xl">My Tech Stack</h1>
                <p class="text-muted-foreground mt-2">Here are the tools and technologies I work with regularly.</p>
            </div>

            <!-- Categories -->
            <div class="space-y-12">
                <SkillCategoryCard v-for="category in categories" :key="category.id" :title="category.name" :skills="category.skills ?? []" />
            </div>
        </section>
    </AppLayout>
</template>
