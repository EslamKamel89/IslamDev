<template>
    <AppLayout>
        <section class="">
            <div class="mb-12 text-center">
                <h1 class="text-3xl font-bold sm:text-4xl">My Tech Stack</h1>
                <p class="text-muted-foreground mt-2">Here are the tools and technologies I work with regularly.</p>
            </div>

            <!-- Categories -->
            <div class="space-y-12">
                <SkillCategoryCard
                    v-for="category in categories"
                    :key="category.title"
                    :title="category.title"
                    :color="category.color"
                    :skills="category.skills"
                />
            </div>
        </section>
    </AppLayout>
</template>

<script setup lang="ts">
import SkillCategoryCard from '@/components/Skills/SkillCategoryCard.vue';
import AppLayout from '@/layouts/AppLayout.vue';

type Skill = {
    name: string;
    emoji: string;
    icon?: string; // Iconify ID like "logos:vue"
    proficiency: number; // Out of 100
};

const skillCategories = [
    {
        title: 'Frontend',
        color: 'text-blue-500',
        skills: [
            { name: 'Vue.js', emoji: '🌀', icon: 'logos:vue', proficiency: 90 },
            { name: 'Nuxt.js', emoji: '🔷', icon: 'logos:nuxt-icon', proficiency: 85 },
            { name: 'Tailwind CSS', emoji: '📘', icon: 'logos:tailwindcss-icon', proficiency: 80 },
            { name: 'JavaScript', emoji: '(JS)', proficiency: 85 },
            { name: 'TypeScript', emoji: 'TS', icon: 'logos:typescript-icon', proficiency: 75 },
        ],
    },
    {
        title: 'Backend',
        color: 'text-purple-500',
        skills: [
            { name: 'Laravel', emoji: '🔌', icon: 'logos:laravel', proficiency: 90 },
            { name: 'Livewire', emoji: '⚡', icon: 'logos:laravel-livewire', proficiency: 85 },
            { name: 'PHP', emoji: '🐘', icon: 'logos:php', proficiency: 90 },
            { name: 'Node.js', emoji: '🟢', icon: 'logos:nodejs-icon', proficiency: 70 },
        ],
    },
    {
        title: 'Mobile',
        color: 'text-green-500',
        skills: [{ name: 'Flutter', emoji: '📱', icon: 'logos:flutter', proficiency: 85 }],
    },
    {
        title: 'DevOps & Tools',
        color: 'text-yellow-500',
        skills: [
            { name: 'Git', emoji: '🐙', icon: 'logos:git-icon', proficiency: 80 },
            { name: 'GitHub Actions', emoji: '⚙️', icon: 'logos:github-actions', proficiency: 75 },
            { name: 'Docker', emoji: '🐋', icon: 'logos:docker-icon', proficiency: 70 },
        ],
    },
    {
        title: 'Databases',
        color: 'text-red-500',
        skills: [
            { name: 'MySQL', emoji: '🐬', icon: 'logos:mysql', proficiency: 80 },
            { name: 'PostgreSQL', emoji: '🐘', icon: 'logos:postgresql', proficiency: 75 },
            { name: 'Firebase', emoji: '🔥', icon: 'logos:firebase', proficiency: 70 },
            { name: 'MongoDB', emoji: '🍃', icon: 'logos:mongodb', proficiency: 65 },
        ],
    },
];

const categories = skillCategories;
</script>
