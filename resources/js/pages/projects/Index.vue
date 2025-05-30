<script setup lang="ts">
import ProjectCard from '@/components/Projects/ProjectCard.vue';
import Button from '@/components/ui/button/Button.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import type { SharedData } from '@/types';
import { Project } from '@/types/custom';
import { getKey, getValue } from '@/utils/helpers';
import { usePage } from '@inertiajs/vue3';
import { computed, ref } from 'vue';

const { projects, categories, projectFilters } = usePage<SharedData & { projects: Project[] }>().props;

const selectedFilter = ref(getKey(projectFilters[0]));
const filteredProjects = computed(() => {
    return projects.filter((project) => project.filter == selectedFilter.value);
});
</script>

<template>
    <AppLayout>
        <section class="bg-background text-foreground px-6 py-16">
            <div class="mx-auto max-w-6xl">
                <div class="mb-12 text-center">
                    <h2 class="text-3xl font-bold sm:text-4xl">Projects</h2>
                    <p class="text-muted-foreground mt-2">Explore some of my featured work</p>
                </div>

                <div class="mb-8 flex flex-wrap justify-center gap-2">
                    <Button
                        v-for="filter in projectFilters"
                        :variant="getKey(filter) === selectedFilter ? 'default' : 'outline'"
                        @click="selectedFilter = getKey(filter)"
                        :key="getKey(filter)"
                        size="sm"
                    >
                        {{ getValue(filter) }}
                    </Button>
                </div>
                <div class="grid grid-cols-1 gap-6" v-if="filteredProjects.length">
                    <ProjectCard v-for="project in filteredProjects" :key="project.id" :project="project" />
                </div>
                <div v-else>
                    <div class="text-muted-foreground text-center text-sm">There are no projects yet</div>
                </div>
            </div>
        </section>
    </AppLayout>
</template>
