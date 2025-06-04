<script setup lang="ts">
import { useLocale } from '@/composables/useLocale';
import { SharedData } from '@/types';
import { usePage } from '@inertiajs/vue3';
import SkillBadge from '../Shared/SkillBadge.vue';

const categories = usePage<SharedData>().props.categories;

const { t } = useLocale();
</script>
<template>
    <section class="bg-background text-foreground px-6 py-16">
        <div class="mx-auto mb-12 max-w-5xl text-center">
            <h2 class="mb-4 text-3xl font-bold sm:text-4xl">{{ t('MY_TECH_STACK') }}</h2>
            <p class="text-muted-foreground mx-auto max-w-2xl text-lg">
                {{ t('TECH_STACK_INTRO') }}
            </p>
        </div>

        <!-- Categories -->
        <div class="space-y-10">
            <div
                v-for="(category, index) in categories"
                :key="category.id"
                class="animate-fade-in-up w-full"
                :style="{ animationDelay: `${index * 100}ms` }"
            >
                <h3 class="mb-4 text-xl font-semibold capitalize">{{ category.name }}</h3>
                <div class="mx-auto flex w-fit flex-col items-center gap-3 lg:flex-row lg:flex-wrap">
                    <SkillBadge v-for="skill in category.skills" :key="skill.name" :skill="skill" />
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
.animate-fade-in-up {
    opacity: 0;
    transform: translateY(20px);
    animation: fadeInUp 0.6s ease forwards;
    animation-delay: var(--delay, 0s);
}

@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>
