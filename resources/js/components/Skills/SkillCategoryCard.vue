<template>
    <VisibleAnimation :hide-animation="index < 2">
        <div
            class="group bg-background/60 relative rounded-2xl border p-6 backdrop-blur-xl transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"
        >
            <div
                class="from-primary/5 absolute inset-0 -z-10 rounded-2xl bg-gradient-to-br to-transparent opacity-0 transition-opacity duration-300 group-hover:opacity-100"
            ></div>

            <h3 class="text-primary mb-6 text-lg font-semibold tracking-wide">
                {{ title }}
            </h3>

            <div class="space-y-4">
                <SkillItem v-for="skill in skills" :key="skill.name" :skill="skill" />
            </div>
        </div>
    </VisibleAnimation>
</template>

<script setup lang="ts">
import { Skill } from '@/types/custom';
import { defineProps } from 'vue';
import VisibleAnimation from '../Shared/VisibleAnimation.vue';
import SkillItem from './SkillItem.vue';

defineProps<{
    title: string;
    skills: Skill[];
    index: number;
}>();
</script>
