<script setup lang="ts">
import { useAppearance } from '@/composables/useAppearance';
import { Moon, Sun } from 'lucide-vue-next';
import { onMounted } from 'vue';

const { appearance, updateAppearance } = useAppearance();
const toggleApperance = () => {
    if (appearance.value == 'light') {
        updateAppearance('dark');
    } else {
        updateAppearance('light');
    }
};
onMounted(() => {
    updateAppearance('dark');
});
</script>

<template>
    <div class="space-y-6">
        <component :is="appearance == 'dark' ? Sun : Moon" class="-ml-1 h-4 w-4" @click="toggleApperance" />
    </div>
</template>
