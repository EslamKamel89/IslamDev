<script setup lang="ts">
import { useLocale } from '@/composables/useLocale';
import { Project } from '@/types/custom';
import { getLocalization } from '@/utils/getLocalization';
import { computed, defineProps, ref, watch } from 'vue';
import SkillBadge from '../Shared/SkillBadge.vue';
import Button from '../ui/button/Button.vue';

const props = defineProps<{
    project: Project;
}>();

const { locale } = useLocale();

const features = computed(() => {
    return JSON.parse(getLocalization(props.project.features, locale.value)) as string[];
});

const fixFullHeight = ref(false);

/* Lock background scroll when modal open */
watch(fixFullHeight, (value) => {
    document.body.style.overflow = value ? 'hidden' : '';
});
</script>

<template>
    <!-- Card -->
    <div
        class="group hover:shadow-primary/20 relative overflow-hidden rounded-3xl border border-white/10 bg-white/5 p-6 shadow-xl backdrop-blur-xl transition-all duration-500 hover:shadow-2xl"
    >
        <!-- Image Section -->
        <div class="relative mb-6">
            <div class="relative h-52 overflow-hidden rounded-2xl">
                <img
                    :src="project.thumbnail"
                    alt="project image"
                    class="h-full w-full object-cover transition duration-700 ease-out group-hover:scale-[1.03]"
                />
            </div>

            <!-- Soft Gradient Overlay -->
            <div class="pointer-events-none absolute inset-0 rounded-2xl bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>

            <!-- Expand Button -->
            <!--
                <div class="absolute top-4 right-4">
                    <button
                    @click="fixFullHeight = true"
                    class="flex items-center gap-2 px-4 py-2 text-sm font-medium text-white transition-all duration-300 rounded-full shadow-lg group bg-primary shadow-primary/30 hover:shadow-primary/40 hover:scale-105 hover:shadow-xl"
                    >
                    <Maximize2 class="w-4 h-4 transition-transform duration-300 group-hover:rotate-6" />
                    <span>Expand</span>
                </button>
            </div>
        --></div>

        <!-- Content -->
        <h3 class="mb-3 text-xl font-semibold dark:text-white">
            {{ getLocalization(project.title, locale) }}
        </h3>

        <p class="mb-6 leading-relaxed dark:text-white/70">
            {{ getLocalization(project.description, locale) }}
        </p>

        <!-- Skills -->
        <div class="mb-6 flex flex-wrap gap-2">
            <span v-for="skill in project.skills" :key="skill.id">
                <SkillBadge :skill="skill" />
            </span>
        </div>

        <!-- Actions -->
        <div class="mt-auto flex flex-wrap gap-3">
            <Button v-if="project.live_url" variant="outline" size="sm" as-child>
                <a :href="project.live_url" target="_blank">Live Demo</a>
            </Button>

            <Button v-if="project.github_url" variant="secondary" size="sm" as-child>
                <a :href="project.github_url" target="_blank">GitHub</a>
            </Button>
        </div>
    </div>
</template>
