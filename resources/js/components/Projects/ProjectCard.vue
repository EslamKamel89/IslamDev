<script setup lang="ts">
import { useLocale } from '@/composables/useLocale';
import { Project } from '@/types/custom';
import { getLocalization } from '@/utils/getLocalization';
import { getRandomIcon } from '@/utils/randomIcon';
import { Apple, Maximize2, Minimize2, Smartphone, StepBack, StepForward } from 'lucide-vue-next';
import { computed, defineProps, ref } from 'vue';
import SkillBadge from '../Shared/SkillBadge.vue';
import VisibleAnimation from '../Shared/VisibleAnimation.vue';
import Button from '../ui/button/Button.vue';
import ProjectImage from './ProjectImage.vue';
const props = defineProps<{
    project: Project;
}>();
const { locale } = useLocale();
const features = computed(() => {
    return JSON.parse(getLocalization(props.project.features, locale.value)) as string[];
});
const showFullImage = ref(false);
const images = computed<string[]>(() => {
    return [props.project.thumbnail, ...props.project.images];
});
const selectedImageIndex = ref(0);
const handleNextImage = () => {
    selectedImageIndex.value++;
    if (selectedImageIndex.value >= images.value.length) {
        selectedImageIndex.value = 0;
    }
};
const handlePrevImage = () => {
    selectedImageIndex.value--;
    if (selectedImageIndex.value <= 0) {
        selectedImageIndex.value = images.value.length - 1;
    }
};
const handleMouseEnter = () => {
    // showFullImage.value = fixFullHeight.value || true
};
const handleMouseLeave = () => {
    // showFullImage.value = fixFullHeight.value || false;
};
const fixFullHeight = ref(false);
</script>
<template>
    <VisibleAnimation>
        <div
            class="group bg-card relative transform overflow-hidden rounded-lg border p-4 pt-16 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-md"
        >
            <div dir="ltr" class="relative" @mouseenter="handleMouseEnter" @mouseleave="handleMouseLeave">
                <ProjectImage :src="images[selectedImageIndex]" :is-full-height="fixFullHeight" />

                <!--
            <div class="absolute inset-x-0 inset-y-0 left-0 right-0 w-full">
                <div class="flex items-center justify-center w-full h-full">
                    <component
                        :is="fixFullHeight ? Minimize2 : Maximize2"
                        class="w-12 h-12 p-2 text-white transition-all duration-700 border rounded-full cursor-pointer"
                        :class="{
                            'bg-primary shadow-primary scale-105 shadow-lg': fixFullHeight,
                            'bg-primary/60': !fixFullHeight,
                        }"
                        @click="fixFullHeight = !fixFullHeight"
                    />
                </div>
            </div>
            -->
                <div class="absolute inset-x-0 inset-y-0">
                    <div class="flex h-full w-full items-center justify-between">
                        <div
                            class="bg-primary/10 hover:bg-primary/30 flex h-full cursor-pointer items-center justify-center rounded-s-lg px-1 transition-all duration-700"
                            @click="handlePrevImage"
                        >
                            <StepBack
                                class="bg-primary/60 hover:bg-primary hover:shadow-primary h-9 w-9 rounded-full border p-2 text-white transition-all duration-700 hover:scale-105 hover:shadow-lg lg:h-12 lg:w-12"
                            />
                        </div>
                        <component
                            :is="fixFullHeight ? Minimize2 : Maximize2"
                            class="cursor-pointer rounded-full border p-2 text-white transition-all duration-700"
                            :class="{
                                'bg-primary shadow-primary absolute end-0 top-0 h-9 w-9 scale-105 shadow-lg lg:h-12 lg:w-12': fixFullHeight,
                                'bg-primary/30 h-16 w-16 lg:h-24 lg:w-24': !fixFullHeight,
                            }"
                            @click="fixFullHeight = !fixFullHeight"
                        />
                        <div
                            class="bg-primary/5 hover:bg-primary/30 flex h-full cursor-pointer items-center justify-center rounded-e-lg px-1 transition-all duration-700"
                            @click="handleNextImage"
                        >
                            <StepForward
                                class="bg-primary/60 hover:bg-primary hover:shadow-primary h-9 w-9 cursor-pointer rounded-full border p-2 text-white transition-all duration-700 hover:scale-105 hover:shadow-lg lg:h-12 lg:w-12"
                            />
                        </div>
                    </div>
                </div>
            </div>
            <h3 class="mb-2 text-lg font-bold">{{ getLocalization(project.title, locale) }}</h3>
            <p class="mb-4 text-gray-800 dark:text-gray-100">{{ getLocalization(project.description, locale) }}</p>

            <ul class="my-4 space-y-2">
                <li
                    v-for="feature in features"
                    :key="feature"
                    class="text-muted-foreground hover:bg-primary flex w-fit cursor-pointer items-center space-x-2 rounded-lg px-2 py-1 text-sm transition-all duration-700 hover:py-4 hover:!text-white"
                >
                    <component :is="getRandomIcon()" class="border-primary h-6 w-6" />
                    <div>{{ feature }}</div>
                </li>
            </ul>
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

                <Button v-if="project.playstore_url" variant="secondary" size="sm" as-child class="flex items-center gap-2">
                    <a :href="project.playstore_url" target="_blank" class="inline-flex items-center gap-2">
                        <Smartphone class="h-4 w-4"></Smartphone>
                        <span>Play Store</span>
                    </a>
                </Button>

                <Button v-if="project.applestore_url" variant="secondary" size="sm" as-child class="flex items-center gap-2">
                    <a :href="project.applestore_url" target="_blank" class="inline-flex items-center gap-2">
                        <Apple class="h-4 w-4"></Apple>
                        <span>App Store</span>
                    </a>
                </Button>
            </div>
        </div>
    </VisibleAnimation>
</template>
