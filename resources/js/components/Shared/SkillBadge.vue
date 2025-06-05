<script setup lang="ts">
import { useLocale } from '@/composables/useLocale';
import type { Skill } from '@/types/custom';
import { getLocalization } from '@/utils/getLocalization';
import { computed, defineProps } from 'vue';
import DescriptionTooltip from './DescriptionTooltip.vue';
const props = defineProps<{
    skill: Skill;
}>();
const { locale } = useLocale();
const description = computed(() => {
    return getLocalization(props.skill.description, locale.value);
});
</script>
<template>
    <DescriptionTooltip :description="description">
        <div
            class="border-border bg-muted hover:bg-primary hover:text-primary-foreground inline-flex transform items-center gap-2 rounded-full border px-4 py-2 text-sm font-medium transition-all duration-300 ease-in-out hover:-translate-y-1 hover:shadow-md"
            v-motion
            :initial="{
                opacity: 0,
                y: 25,
            }"
            :visible="{
                opacity: 1,
                y: 0,
                transition: {
                    type: 'spring',
                    stiffness: '100',
                    delay: 100,
                },
            }"
        >
            <span class="text-xl" aria-hidden="true">{{ skill.emoji }}</span>
            <span>{{ skill.name }}</span>
        </div>
    </DescriptionTooltip>
</template>
