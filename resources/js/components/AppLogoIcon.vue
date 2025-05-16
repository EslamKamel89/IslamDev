<script setup lang="ts">
import { useAppearance } from '@/composables/useAppearance';
import type { HTMLAttributes } from 'vue';
import { computed } from 'vue';

defineOptions({
    inheritAttrs: false,
});

interface Props {
    className?: HTMLAttributes['class'];
}

defineProps<Props>();
const { appearance } = useAppearance();
const image = computed(() => (appearance.value == 'light' ? '/assets/images/logo.png' : '/assets/images/logo_dark.png'));
</script>

<template>
    <div class="w-28" :class="className" v-bind="$attrs">
        <img :src="image" class="object-cover" />
    </div>
</template>
