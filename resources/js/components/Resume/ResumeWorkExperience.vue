<template>
    <div class="border-primary border-l-4 pl-4">
        <div class="font-medium">{{ item.role[lang] }}</div>
        <div class="text-muted-foreground text-sm">
            {{ item.company }}, {{ item.location }} • {{ formatDate(item.dates.start) }} –
            {{ item.dates.end ? formatDate(item.dates.end) : 'Present' }}
        </div>
        <p class="mt-2 text-sm">{{ item.description[lang] }}</p>
        <div class="mt-2 flex flex-wrap gap-1">
            <span v-for="tool in item.tools" :key="tool" class="bg-primary text-primary-foreground mr-1 rounded px-2 py-0.5 text-xs">
                {{ tool }}
            </span>
        </div>
    </div>
</template>

<script setup lang="ts">
import { defineProps } from 'vue';

const props = defineProps<{
    item: any;
    lang: string;
}>();

function formatDate(dateString: string): string {
    if (!dateString) return '';
    const date = new Date(dateString);
    return date.toLocaleDateString(undefined, { year: 'numeric', month: 'short' });
}
</script>
