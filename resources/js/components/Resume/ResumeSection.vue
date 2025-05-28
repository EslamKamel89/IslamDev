<template>
    <div>
        <h2 class="border-border mb-4 border-b pb-1 text-xl font-semibold">{{ title }}</h2>
        <slot />
    </div>
</template>

<script setup lang="ts">
defineProps<{
    title: string;
    id: string;
}>();
</script>
