<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { computed, ref } from 'vue';
import Button from '../ui/button/Button.vue';
import ProjectCard from './ProjectCard.vue';
export type Project = {
    id: number;
    title: string;
    description: string;
    thumbnail: string; // placeholder for now
    technologies: string[];
    liveUrl: string | null;
    githubUrl: string | null;
    tags: string[]; // e.g., ['FullStack', 'Mobile']
    category: CategoryType;
};
export type CategoryType = 'All' | 'Web' | 'Mobile' | 'Backend';
const projects: Project[] = [
    {
        id: 1,
        title: 'E-commerce Dashboard',
        description: 'A Vue-based admin panel integrated with Laravel backend.',
        thumbnail: '/placeholder/project1.jpg',
        technologies: ['Vue', 'Laravel', 'Tailwind'],
        liveUrl: 'https://example.com ',
        githubUrl: 'https://github.com/eslamkamel89/ecommerce-dashboard ',
        tags: ['Dashboard', 'Admin Panel'],
        category: 'Web',
    },
    {
        id: 2,
        title: 'Flutter Task Manager',
        description: 'Cross-platform todo app with Firebase sync.',
        thumbnail: '/placeholder/project2.jpg',
        technologies: ['Flutter', 'Firebase'],
        liveUrl: null,
        githubUrl: 'https://github.com/eslamkamel89/flutter-todo ',
        tags: ['Mobile', 'Productivity'],
        category: 'Mobile',
    },
    {
        id: 3,
        title: 'API Monitoring Tool',
        description: 'Monitors uptime and response time of REST APIs.',
        thumbnail: '/placeholder/project3.jpg',
        technologies: ['Node.js', 'Express', 'MongoDB'],
        liveUrl: 'https://api-monitoring.example.com ',
        githubUrl: 'https://github.com/eslamkamel89/api-monitor ',
        tags: ['Tool', 'Monitoring'],
        category: 'Backend',
    },
];
const filter = ref<CategoryType>('All');

const categories: CategoryType[] = ['All', 'Web', 'Mobile', 'Backend'];

const filteredProjects = computed(() => {
    return filter.value === 'All' ? projects : projects.filter((project) => project.category === filter.value);
});
</script>

<template>
    <section class="bg-background text-foreground px-6 py-16">
        <div class="mx-auto max-w-6xl">
            <!-- Heading -->
            <div class="mb-12 text-center">
                <h2 class="text-3xl font-bold sm:text-4xl">Projects</h2>
                <p class="text-muted-foreground mt-2">Explore some of my featured work</p>
            </div>

            <!-- Filters -->
            <div class="mb-8 flex flex-wrap justify-center gap-2">
                <Button
                    v-for="category in categories"
                    :key="category"
                    :variant="filter === category ? 'default' : 'outline'"
                    @click="filter = category"
                    size="sm"
                >
                    {{ category }}
                </Button>
            </div>

            <!-- Grid -->
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                <ProjectCard v-for="project in filteredProjects" :key="project.id" :project="project" />
            </div>

            <!-- CTA -->
            <div class="mt-12 text-center">
                <Button as-child variant="secondary" size="lg">
                    <Link href="/projects">View All Projects</Link>
                </Button>
            </div>
        </div>
    </section>
</template>
