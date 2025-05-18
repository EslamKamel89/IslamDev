<template>
    <div
        class="group bg-card relative transform overflow-hidden rounded-lg border p-4 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-md"
    >
        <img :src="project.thumbnail" :alt="project.title" class="mb-4 h-40 w-full rounded object-cover" />
        <h3 class="mb-2 text-xl font-bold">{{ project.title }}</h3>
        <p class="text-muted-foreground mb-4 text-sm">{{ project.description }}</p>

        <div class="mb-4 flex flex-wrap gap-2">
            <span v-for="tech in project.technologies" :key="tech" class="bg-primary text-primary-foreground rounded-full px-2 py-1 text-xs">
                {{ tech }}
            </span>
        </div>

        <div class="mt-auto flex gap-2">
            <Button v-if="project.liveUrl" variant="outline" size="sm" as-child>
                <a :href="project.liveUrl" target="_blank">Live Demo</a>
            </Button>
            <Button v-if="project.githubUrl" variant="secondary" size="sm" as-child>
                <a :href="project.githubUrl" target="_blank">GitHub</a>
            </Button>
        </div>
    </div>
</template>

<script setup lang="ts">
import { defineProps } from 'vue';
import Button from '../ui/button/Button.vue';

defineProps<{
    project: any;
}>();
</script>
