<template>
    <div class="mb-8">
        <h3 :class="color" class="mb-4 text-xl font-semibold">{{ title }}</h3>
        <div class="space-y-2">
            <SkillItem v-for="skill in skills" :key="skill.name" :skill="skill" :icon="getIcon(skill)" />
        </div>
    </div>
</template>

<script setup lang="ts">
import { defineProps } from 'vue';
import SkillItem from './SkillItem.vue';

const props = defineProps<{
    title: string;
    color: string;
    skills: Array<{
        name: string;
        emoji: string;
        proficiency: number;
    }>;
}>();

function getIcon(skill: any) {
    return skill.icon || '';
}
</script>
