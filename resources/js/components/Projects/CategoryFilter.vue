<template>
    <div class="mb-8 flex flex-wrap justify-center gap-2">
        <button
            v-for="category in categories"
            :key="category"
            @click="filter = category"
            :class="{
                'bg-primary text-white': filter === category,
                'bg-muted': filter !== category,
            }"
            class="hover:bg-primary/10 rounded-full px-4 py-1.5 text-sm font-medium transition-colors"
        >
            {{ category }}
        </button>
    </div>
</template>

<script setup lang="ts">
import { ref } from 'vue';

const categories = ['All', 'Laravel', 'Vue', 'Flutter', 'VILT stack', 'TALL stack', 'Nuxt.js'];
const filter = ref<string>('All');

defineProps<{
    selected: string;
}>();

defineEmits<{
    (e: 'update:filter', value: string): void;
}>();
</script>
