<template>
    <AppLayout>
        <div class="mb-12 text-center">
            <h1 class="text-3xl font-bold sm:text-4xl">My Projects</h1>
            <p class="text-muted-foreground mt-2">Explore some of my work across different stacks.</p>
        </div>

        <!-- Filters -->
        <CategoryFilter selected="selectedFilter" />

        <!-- Masonry Grid -->
        <div class="grid auto-rows-fr grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
            <ProjectCard
                v-for="project in filteredProjects"
                :key="project.id"
                :project="project"
                class="transform transition-transform hover:-translate-y-1"
            />
        </div>
    </AppLayout>
</template>

<script setup lang="ts">
import CategoryFilter from '@/components/Projects/CategoryFilter.vue';
import ProjectCard from '@/components/Projects/ProjectCard.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import { computed, ref } from 'vue';
type Project = {
    id: number;
    title: string;
    description: string;
    thumbnail: string; // placeholder URL or local path
    technologies: string[];
    tags: string[]; // e.g., ['#FullStack', '#Mobile']
    liveUrl?: string;
    githubUrl?: string;
    categories: ('Laravel' | 'Vue' | 'Flutter' | 'VILT stack' | 'TALL stack' | 'Nuxt.js')[];
};

const projects: Project[] = [
    {
        id: 1,
        title: 'E-commerce Dashboard',
        description: 'A Vue-based admin panel integrated with Laravel backend.',
        thumbnail: '/placeholder/project1.jpg',
        technologies: ['Vue', 'Laravel', 'Tailwind'],
        tags: ['#Dashboard', '#Admin Panel'],
        liveUrl: 'https://example.com ',
        githubUrl: 'https://github.com/eslamkamel89/ecommerce-dashboard ',
        categories: ['Vue', 'Laravel', 'TALL stack'],
    },
    {
        id: 2,
        title: 'Flutter Task Manager',
        description: 'Cross-platform todo app with Firebase sync.',
        thumbnail: '/placeholder/project2.jpg',
        technologies: ['Flutter', 'Firebase'],
        tags: ['#Mobile', '#Productivity'],
        githubUrl: 'https://github.com/eslamkamel89/flutter-todo ',
        categories: ['Flutter'],
    },
    {
        id: 3,
        title: 'API Monitoring Tool',
        description: 'Monitors uptime and response time of REST APIs.',
        thumbnail: '/placeholder/project3.jpg',
        technologies: ['Node.js', 'Express', 'MongoDB'],
        tags: ['#Tool', '#Monitoring'],
        liveUrl: 'https://api-monitoring.example.com ',
        githubUrl: 'https://github.com/eslamkamel89/api-monitor ',
        categories: ['Laravel', 'VILT stack'],
    },
    {
        id: 4,
        title: 'Nuxt.js Blog Platform',
        description: 'Content-driven blog built with Nuxt 3 and Content module.',
        thumbnail: '/placeholder/project4.jpg',
        technologies: ['Nuxt.js', 'TypeScript', 'Tailwind'],
        tags: ['#Blog', '#SSG'],
        liveUrl: 'https://nuxt-blog.example.com ',
        githubUrl: 'https://github.com/eslamkamel89/nuxt-blog ',
        categories: ['Nuxt.js', 'Vue', 'VILT stack'],
    },
    {
        id: 5,
        title: 'Realtime Chat App',
        description: 'Livewire-powered real-time chat with push notifications.',
        thumbnail: '/placeholder/project5.jpg',
        technologies: ['Laravel', 'Livewire', 'Alpine.js'],
        tags: ['#Chat', '#Realtime'],
        githubUrl: 'https://github.com/eslamkamel89/livewire-chat ',
        categories: ['Laravel', 'TALL stack'],
    },
];

const selectedFilter = ref('All');

const filteredProjects = computed(() => {
    if (selectedFilter.value === 'All') return projects;
    return projects.filter((p) => p.categories.includes(selectedFilter.value as any));
});
</script>
