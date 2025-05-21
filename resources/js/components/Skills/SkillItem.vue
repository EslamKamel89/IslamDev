<script setup lang="ts">
import { useLocale } from '@/composables/useLocale';
import { Skill } from '@/types/custom';
import { getLocalization } from '@/utils/getLocalization';
import { computed, defineProps } from 'vue';
import DescriptionTooltip from '../Shared/DescriptionTooltip.vue';

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
        <div class="group hover:bg-accent flex items-center gap-3 rounded-lg p-2 transition-colors">
            <!-- Emoji or Icon -->
            <div class="text-xl">
                <span v-if="true">{{ skill.emoji }}</span>
                <i v-else :data-icon="skill.icon" class="inline-block align-middle text-xl"></i>
            </div>

            <!-- Skill Name and Progress -->
            <div class="min-w-0 flex-1">
                <p class="truncate text-sm font-medium">{{ skill.name }}</p>
                <div class="bg-muted mt-1 h-1.5 w-full rounded-full">
                    <div class="bg-primary h-1.5 rounded-full transition-all group-hover:h-2.5" :style="{ width: skill.proficiency + '%' }"></div>
                </div>
                <p class="text-muted-foreground mt-1 text-right text-xs">{{ skill.proficiency }}%</p>
            </div>
        </div>
    </DescriptionTooltip>
</template>
