<script setup lang="ts">
import { useLocale } from '@/composables/useLocale';
import { Project } from '@/types/custom';
import { getLocalization } from '@/utils/getLocalization';
import { Maximize2, Minimize2 } from 'lucide-vue-next';
import { computed, defineProps, ref } from 'vue';
import SkillBadge from '../Shared/SkillBadge.vue';
import Button from '../ui/button/Button.vue';
const props = defineProps<{
    project: Project;
}>();
const { locale } = useLocale();
const features = computed(() => {
    return JSON.parse(getLocalization(props.project.features, locale.value)) as string[];
});
const showFullImage = ref(false);
const fixFullHeight = ref(false);
</script>
<template>
    <div
        class="group bg-card relative transform overflow-hidden rounded-lg border p-4 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-md"
    >
        <div class="relative w-full">
            <img
                :src="project.thumbnail"
                alt="project image"
                class="mb-4 w-full rounded object-cover transition-all duration-700"
                :class="{
                    'h-40': !fixFullHeight,
                    'shadow-primary mt-5 mb-10 scale-105 rounded-lg border shadow-2xl': fixFullHeight,
                }"
            />
            <div class="absolute inset-x-0 inset-y-0">
                <div class="flex h-full w-full items-center justify-center">
                    <component
                        :is="fixFullHeight ? Minimize2 : Maximize2"
                        class="cursor-pointer rounded-full border p-2 text-white transition-all duration-700"
                        :class="{
                            'bg-primary shadow-primary absolute end-0 top-0 h-9 w-9 scale-105 shadow-lg lg:h-12 lg:w-12': fixFullHeight,
                            'bg-primary/30 h-16 w-16 lg:h-24 lg:w-24': !fixFullHeight,
                        }"
                        @click="fixFullHeight = !fixFullHeight"
                    />
                </div>
            </div>
        </div>
        <h3 class="mb-2 text-lg font-bold">{{ getLocalization(project.title, locale) }}</h3>
        <p class="mb-4 text-gray-800 dark:text-gray-100">{{ getLocalization(project.description, locale) }}</p>
        <!--
            <ul class="my-4 space-y-2">
                <li v-for="feature in features" :key="feature" class="flex items-center space-x-2 text-sm text-muted-foreground">
                    <component :is="getRandomIcon()" class="w-6 h-6 text-primary border-primary" />
                    <div>{{ feature }}</div>
                </li>
            </ul>
        -->
        <div class="mb-4 flex flex-wrap gap-2">
            <span v-for="skill in project.skills" :key="skill.id">
                <SkillBadge :skill="skill" />
            </span>
        </div>

        <div class="mt-auto flex gap-2">
            <Button v-if="project.live_url" variant="outline" size="sm" as-child>
                <a :href="project.live_url" target="_blank">Live Demo</a>
            </Button>
            <Button v-if="project.github_url" variant="secondary" size="sm" as-child>
                <a :href="project.github_url" target="_blank">GitHub</a>
            </Button>
        </div>
    </div>
</template>
