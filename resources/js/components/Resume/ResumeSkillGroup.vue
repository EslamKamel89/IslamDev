<template>
    <div>
        <h3 class="mb-2 font-medium">{{ item.category }}</h3>
        <div class="flex flex-wrap gap-1">
            <span v-for="skill in item.skills" :key="skill" class="bg-muted rounded px-2 py-1 text-xs">
                {{ skill }}
            </span>
        </div>
    </div>
</template>

<script setup lang="ts">
defineProps<{
    item: any;
    lang: string;
}>();
</script>
