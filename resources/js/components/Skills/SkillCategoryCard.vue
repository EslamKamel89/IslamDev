<template>
    <div class="mb-8">
        <h3 class="bg-primary/10 mb-4 w-fit rounded-lg px-2 py-1 text-xl font-semibold">{{ title }}</h3>
        <div class="space-y-2">
            <SkillItem v-for="skill in skills" :key="skill.name" :skill="skill" :icon="getIcon(skill)" />
        </div>
    </div>
</template>

<script setup lang="ts">
import { Skill } from '@/types/custom';
import { defineProps } from 'vue';
import SkillItem from './SkillItem.vue';

const props = defineProps<{
    title: string;
    skills: Skill[];
}>();

function getIcon(skill: Skill) {
    return skill.emoji || '';
}
</script>
