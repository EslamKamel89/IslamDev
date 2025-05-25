<script setup lang="ts">
import type { SharedData } from '@/types';
import { Category, Project } from '@/types/custom';
import { Link, usePage } from '@inertiajs/vue3';
import { computed, ref } from 'vue';
import Button from '../ui/button/Button.vue';
import ProjectCard from './ProjectCard.vue';

const { projects, categories } = usePage<SharedData & { projects: Project[] }>().props;
const allCategories = computed<Category[]>(() => {
    return [{ name: 'All' }, ...categories].filter((category) => !(category.name == 'Databases' || category.name == 'DevOps / Tools'));
});
const filter = ref(allCategories.value[0].name);
const filteredProjects = computed(() => {
    if (filter.value == 'All') return projects.slice(0, 2);
    return projects.filter((project) => project.skills.findIndex((skill) => skill.category?.name == filter.value) != -1).slice(0, 2);
});
</script>

<template>
    <section class="bg-background text-foreground px-6 py-16">
        <div class="mx-auto max-w-6xl">
            <div class="mb-12 text-center">
                <h2 class="text-3xl font-bold sm:text-4xl">Projects</h2>
                <p class="text-muted-foreground mt-2">Explore some of my featured work</p>
            </div>

            <div class="mb-8 flex flex-wrap justify-center gap-2">
                <Button
                    v-for="category in allCategories"
                    :key="category.id"
                    :variant="filter === category.name ? 'default' : 'outline'"
                    @click="filter = category.name"
                    size="sm"
                >
                    {{ category.name }}
                </Button>
            </div>
            <div class="grid grid-cols-1 gap-6 lg:grid-cols-2" v-if="filteredProjects.length">
                <ProjectCard v-for="project in filteredProjects" :key="project.id" :project="project" />
            </div>
            <div v-else>
                <div class="text-muted-foreground text-center text-sm">There are no projects yet</div>
            </div>

            <div class="mt-12 text-center">
                <Button as-child variant="secondary" size="lg">
                    <Link href="/projects"> View All Projects </Link>
                </Button>
            </div>
        </div>
    </section>
</template>
