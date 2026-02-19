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

const fixFullHeight = ref(false);
</script>

<template>
    <VisibleAnimation :hide-animation="true">
        <div
            class="group hover:shadow-primary/20 relative overflow-hidden rounded-3xl border border-white/10 bg-white/5 p-6 shadow-xl backdrop-blur-xl transition-all duration-500 hover:shadow-2xl"
        >
            <!-- Image Section -->
            <div class="relative mb-6">
                <ProjectImage :src="images[selectedImageIndex]" :is-full-height="fixFullHeight" />

                <!-- Bottom Center Glass Navigation -->
                <div
                    class="absolute bottom-4 left-1/2 flex -translate-x-1/2 items-center gap-4 rounded-full border border-white/20 bg-white/10 px-6 py-2 shadow-lg backdrop-blur-md"
                >
                    <StepBack class="h-5 w-5 cursor-pointer text-white/80 transition hover:scale-110 hover:text-white" @click="handlePrevImage" />

                    <div class="flex gap-2">
                        <div
                            v-for="(img, index) in images"
                            :key="index"
                            class="h-2 w-2 rounded-full transition-all duration-300"
                            :class="{
                                'scale-125 bg-white': selectedImageIndex === index,
                                'bg-white/40': selectedImageIndex !== index,
                            }"
                        />
                    </div>

                    <StepForward class="h-5 w-5 cursor-pointer text-white/80 transition hover:scale-110 hover:text-white" @click="handleNextImage" />
                </div>

                <!-- Prominent Expand / Minimize Button -->
                <div class="absolute top-4 right-4">
                    <button
                        @click="fixFullHeight = !fixFullHeight"
                        class="group bg-primary shadow-primary/30 hover:shadow-primary/40 flex items-center gap-2 rounded-full px-4 py-2 text-sm font-medium text-white shadow-lg transition-all duration-300 hover:scale-105 hover:shadow-xl"
                    >
                        <component
                            :is="fixFullHeight ? Minimize2 : Maximize2"
                            class="h-4 w-4 transition-transform duration-300 group-hover:rotate-6"
                        />
                        <span>
                            {{ fixFullHeight ? 'Minimize' : 'Expand' }}
                        </span>
                    </button>
                </div>
            </div>

            <!-- Content -->
            <h3 class="mb-3 text-xl font-semibold text-white">
                {{ getLocalization(project.title, locale) }}
            </h3>

            <p class="mb-6 leading-relaxed text-white/70">
                {{ getLocalization(project.description, locale) }}
            </p>

            <!-- Features -->
            <ul class="mb-6 space-y-3">
                <li v-for="feature in features" :key="feature" class="flex items-center gap-3 text-sm text-white/70 transition hover:text-white">
                    <component :is="getRandomIcon()" class="text-primary h-4 w-4" />
                    <span>{{ feature }}</span>
                </li>
            </ul>

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

                <Button v-if="project.playstore_url" variant="secondary" size="sm" as-child>
                    <a :href="project.playstore_url" target="_blank" class="flex items-center gap-2">
                        <Smartphone class="h-4 w-4" />
                        Play Store
                    </a>
                </Button>

                <Button v-if="project.applestore_url" variant="secondary" size="sm" as-child>
                    <a :href="project.applestore_url" target="_blank" class="flex items-center gap-2">
                        <Apple class="h-4 w-4" />
                        App Store
                    </a>
                </Button>
            </div>
        </div>
    </VisibleAnimation>
</template>
