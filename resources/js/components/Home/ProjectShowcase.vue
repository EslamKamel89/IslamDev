<script setup lang="ts">
import { useLocale } from '@/composables/useLocale';
import type { SharedData } from '@/types';
import { Project } from '@/types/custom';
import { Link, usePage } from '@inertiajs/vue3';
import { computed } from 'vue';
import Button from '../ui/button/Button.vue';
import ProjectCard from './ProjectCard.vue';

const { projects } = usePage<SharedData & { projects: Project[] }>().props;

const featuredProjects = computed(() => {
    return [...projects].sort((a, b) => a.order - b.order).slice(0, 2);
});

const { t } = useLocale();
</script>

<template>
    <section class="bg-background text-foreground px-6 py-16">
        <div class="mx-auto max-w-6xl">
            <div class="mb-12 text-center">
                <h2 class="text-3xl font-bold capitalize sm:text-4xl">
                    {{ t('projects') }}
                </h2>
                <p class="text-muted-foreground mt-2">
                    {{ t('EXPLORE_PROJECTS') }}
                </p>
            </div>

            <div class="grid grid-cols-1 gap-6 lg:grid-cols-2" v-if="featuredProjects.length">
                <ProjectCard v-for="project in featuredProjects" :key="project.id" :project="project" />
            </div>

            <div v-else>
                <div class="text-muted-foreground text-center text-sm">There are no projects yet</div>
            </div>

            <div class="mt-12 text-center">
                <Button as-child variant="secondary" size="lg">
                    <Link href="/projects">
                        {{ t('VIEW_ALL_PROJECTS') }}
                    </Link>
                </Button>
            </div>
        </div>
    </section>
</template>
