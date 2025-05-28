<template>
    <div class="bg-card border-border rounded-md border p-4 shadow-sm transition-shadow hover:shadow-md">
        <h3 class="font-medium">{{ item.title[lang] }}</h3>
        <p class="text-muted-foreground text-sm">{{ item.role }} • {{ item.year }}</p>
        <p class="mt-2 text-sm">{{ item.description[lang] }}</p>
        <div class="mt-3 flex gap-4 text-sm">
            <a v-if="item.liveUrl" :href="item.liveUrl" target="_blank" class="hover:text-primary">Live Demo</a>
            <a v-if="item.githubUrl" :href="item.githubUrl" target="_blank" class="hover:text-primary">GitHub</a>
        </div>
    </div>
</template>

<script setup lang="ts">
defineProps<{
    item: any;
    lang: string;
}>();
</script>
