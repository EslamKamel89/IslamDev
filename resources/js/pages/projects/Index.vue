<script setup lang="ts">
import ProjectCard from '@/components/Projects/ProjectCard.vue';
import { useLocale } from '@/composables/useLocale';
import AppLayout from '@/layouts/AppLayout.vue';
import useSeoProjects from '@/seo/projects';
import SeoHead from '@/seo/SeoHead.vue';
import type { SharedData } from '@/types';
import { Project } from '@/types/custom';
import { usePage } from '@inertiajs/vue3';
import { computed, onMounted } from 'vue';

const { projects } = usePage<SharedData & { projects: Project[] }>().props;

const sortedProjects = computed(() => {
    return [...projects].sort((a, b) => a.order - b.order);
});

const { t } = useLocale();

onMounted(() => {
    useSeoProjects();
});

const page = usePage<SharedData>();
const baseUrl = page.props.ziggy.url;
</script>

<template>
    <AppLayout>
        <SeoHead
            title="Projects - Backend Engineer | FastAPI, Django & Laravel"
            :description="'Explore backend-focused production projects built with FastAPI, Django, and Laravel — emphasizing scalable APIs, background processing systems, and modern backend architecture.'"
            :keywords="'FastAPI, Django, Laravel, Backend Engineer, API Development, System Design, Background Jobs, Python Backend'"
            :url="`${baseUrl}/projects`"
            :image="`${baseUrl}/assets/seo/images/logo.png`"
        />

        <section class="bg-background text-foreground px-6 py-16">
            <div class="mx-auto max-w-6xl">
                <div class="mb-12 text-center">
                    <h2 class="text-3xl font-bold sm:text-4xl">
                        {{ t('PROJECTS') }}
                    </h2>
                    <p class="text-muted-foreground mt-2">
                        {{ t('EXPLORE_PROJECTS') }}
                    </p>
                </div>

                <div class="grid grid-cols-1 gap-6" v-if="sortedProjects.length">
                    <ProjectCard v-for="project in sortedProjects" :key="project.id" :project="project" />
                </div>

                <div v-else>
                    <div class="text-muted-foreground text-center text-sm">There are no projects yet</div>
                </div>
            </div>
        </section>
    </AppLayout>
</template>
