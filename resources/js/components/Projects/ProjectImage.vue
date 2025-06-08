<script setup lang="ts">
import { Loader } from 'lucide-vue-next';
import { ref, watch } from 'vue';

const props = defineProps<{
    isFullHeight: boolean;
    src: string;
}>();
const imgRef = ref<HTMLImageElement | null>(null);
const loading = ref(false);
const error = ref(false);
function onImageLoad() {
    loading.value = false;
    const el = imgRef.value;
    if (el) {
        el.style.opacity = '1';
    }
}
function onLoadStart() {
    loading.value = true;
    const el = imgRef.value;
    if (el) {
        el.style.opacity = '0.5';
    }
}
function onImageError() {
    loading.value = false;
    error.value = true;
}
watch(
    () => props.src,
    () => {
        onLoadStart();
    },
);
</script>
<template>
    <img
        ref="imgRef"
        :src="src"
        alt="project image"
        class="mb-4 w-full rounded-lg object-cover opacity-50 transition-all duration-700"
        :class="{
            'h-40': !isFullHeight,
            'shadow-primary mt-5 mb-10 border shadow-2xl': isFullHeight,
        }"
        @load="onImageLoad"
        @error="onImageError"
    />
    <div v-if="loading" class="absolute inset-0 flex animate-pulse items-center justify-center bg-gray-200 dark:bg-gray-700">
        <Loader />
    </div>

    <!-- Error State -->
    <div
        v-if="error"
        class="absolute inset-0 flex items-center justify-center bg-red-100 font-medium text-red-600 dark:bg-red-900/30 dark:text-red-300"
    >
        Failed to load image
    </div>
</template>
