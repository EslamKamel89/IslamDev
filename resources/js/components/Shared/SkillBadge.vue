<script setup lang="ts">
import type { Skill } from '@/types/custom';
import { defineProps } from 'vue';
defineProps<{
    skill: Skill;
}>();
</script>
<template>
    <div
        class="border-border bg-muted hover:bg-primary hover:text-primary-foreground inline-flex transform items-center gap-2 rounded-full border px-4 py-2 text-sm font-medium transition-all duration-300 ease-in-out hover:-translate-y-1 hover:shadow-md"
    >
        <span class="text-xl" aria-hidden="true">{{ skill.icon }}</span>
        <span>{{ skill.name }}</span>
    </div>
</template>
