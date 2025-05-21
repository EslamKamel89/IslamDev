<script setup lang="ts">
import { useAppearance } from '@/composables/useAppearance';
import { Moon, Sun } from 'lucide-vue-next';
import { onMounted } from 'vue';

const { appearance, updateAppearance } = useAppearance();
const toggleApperance = () => {
    if (appearance.value == 'light') {
        updateAppearance('dark');
        appearance.value = 'dark';
    } else {
        updateAppearance('light');
        appearance.value = 'light';
    }
};
onMounted(() => {
    // updateAppearance('dark');
    // appearance.value = 'dark';
});
</script>

<template>
    <div class="cursor-pointer space-y-6 hover:scale-110">
        <component :is="appearance == 'dark' ? Sun : Moon" class="-ml-1 h-4 w-4" @click="toggleApperance" />
    </div>
</template>
