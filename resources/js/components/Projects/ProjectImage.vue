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
        el.style.opacity = '0.7';
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
    <div class="relative overflow-hidden rounded-2xl">
        <!-- Image -->
        <img
            ref="imgRef"
            :src="src"
            alt="project image"
            class="w-full rounded-2xl object-cover opacity-70 transition-all duration-700 ease-out group-hover:scale-[1.04]"
            :class="{
                'h-52': !isFullHeight,
                'shadow-primary/20 mt-6 mb-12 border shadow-2xl': isFullHeight,
            }"
            @load="onImageLoad"
            @error="onImageError"
        />

        <!-- Soft Gradient Overlay -->
        <div class="pointer-events-none absolute inset-0 rounded-2xl bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>

        <!-- Loader -->
        <div v-if="loading" class="absolute inset-0 flex items-center justify-center bg-white/10 backdrop-blur-sm">
            <Loader class="h-6 w-6 animate-spin text-white" />
        </div>

        <!-- Error -->
        <div v-if="error" class="absolute inset-0 flex items-center justify-center bg-red-500/20 font-medium text-red-200 backdrop-blur-sm">
            Failed to load image
        </div>
    </div>
</template>
