<template>
    <div class="bg-card rounded-lg border p-4 shadow-md transition-shadow duration-300 hover:shadow-lg">
        <!-- Thumbnail -->
        <img :src="project.thumbnail" :alt="project.title" class="mb-4 h-40 w-full rounded object-cover" />

        <!-- Title -->
        <h3 class="mb-2 text-xl font-bold">{{ project.title }}</h3>

        <!-- Description -->
        <p class="text-muted-foreground mb-4 text-sm">{{ project.description }}</p>

        <!-- Technologies -->
        <div class="mb-4 flex flex-wrap gap-1.5">
            <span v-for="tech in project.technologies" :key="tech" class="bg-primary text-primary-foreground rounded-full px-2 py-1 text-xs">
                {{ tech }}
            </span>
        </div>

        <!-- Tags -->
        <div class="text-muted-foreground mb-4 text-xs">
            {{ project.tags.join(' ') }}
        </div>

        <!-- Links -->
        <div class="mt-auto flex gap-2">
            <a
                v-if="project.liveUrl"
                :href="project.liveUrl"
                target="_blank"
                rel="noopener noreferrer"
                class="text-primary hover:text-primary/80 text-sm"
                >Live Demo</a
            >
            <span v-if="project.liveUrl && project.githubUrl">&bull;</span>
            <a
                v-if="project.githubUrl"
                :href="project.githubUrl"
                target="_blank"
                rel="noopener noreferrer"
                class="text-primary hover:text-primary/80 text-sm"
                >GitHub</a
            >
        </div>
    </div>
</template>

<script setup lang="ts">
import { defineProps } from 'vue';

defineProps<{
    project: {
        title: string;
        description: string;
        thumbnail: string;
        technologies: string[];
        tags: string[];
        liveUrl?: string;
        githubUrl?: string;
    };
}>();
</script>
