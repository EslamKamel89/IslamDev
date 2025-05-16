<script setup lang="ts">
import { useAppearance } from '@/composables/useAppearance';
import type { HTMLAttributes } from 'vue';
import { nextTick, ref, watch } from 'vue';

defineOptions({
    inheritAttrs: false,
});

interface Props {
    className?: HTMLAttributes['class'];
}

defineProps<Props>();
const { theme } = useAppearance();
const image = ref(theme.value == 'light' ? '/assets/images/logo_icon.png' : '/assets/images/logo_icon_dark.png');
watch(
    () => theme.value,
    () => {
        nextTick(() => {
            image.value = theme.value == 'light' ? '/assets/images/logo_icon.png' : '/assets/images/logo_icon_dark.png';
        });
    },
);
</script>

<template>
    <img :src="image" :class="className" v-bind="$attrs" />
</template>
