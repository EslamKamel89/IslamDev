<script setup lang="ts">
import { useLocale } from '@/composables/useLocale';
import { SharedData } from '@/types';
import { usePage } from '@inertiajs/vue3';
import SkillBadge from '../Shared/SkillBadge.vue';

const categories = usePage<SharedData>().props.categories;
const { t } = useLocale();
</script>

<template>
    <section class="from-background via-muted/30 to-background text-foreground relative overflow-hidden bg-gradient-to-b px-6 py-24">
        <!-- Decorative Glow -->
        <div class="pointer-events-none absolute inset-0 -z-10 flex items-start justify-center">
            <div class="bg-primary/10 h-[500px] w-[800px] rounded-full blur-3xl"></div>
        </div>

        <!-- Header -->
        <div class="mx-auto mb-20 max-w-4xl text-center">
            <h2 class="mb-6 text-4xl leading-tight font-bold tracking-tight sm:text-5xl">
                {{ t('MY_TECH_STACK') }}
            </h2>

            <p class="text-muted-foreground mx-auto max-w-2xl text-lg sm:text-xl">
                {{ t('TECH_STACK_INTRO') }}
            </p>
        </div>

        <!-- Categories -->
        <div class="mx-auto max-w-6xl space-y-14">
            <div
                v-for="(category, index) in categories"
                :key="category.id"
                class="animate-fade-in-up group border-border/40 bg-background/60 relative rounded-3xl border p-10 shadow-sm backdrop-blur-xl transition-all duration-500 hover:-translate-y-1 hover:shadow-2xl"
                :style="{ animationDelay: `${index * 120}ms` }"
            >
                <!-- Subtle top gradient line -->
                <div
                    class="via-primary/50 absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent to-transparent opacity-0 transition-opacity duration-500 group-hover:opacity-100"
                ></div>

                <h3 class="mb-10 text-center text-2xl font-semibold tracking-wide capitalize">
                    {{ category.name }}
                </h3>

                <!-- Skill Badges -->
                <div class="flex flex-wrap justify-center gap-4">
                    <SkillBadge v-for="skill in category.skills" :key="skill.name" :skill="skill" />
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
.animate-fade-in-up {
    opacity: 0;
    transform: translateY(30px);
    animation: fadeInUp 0.7s ease forwards;
}

@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>
