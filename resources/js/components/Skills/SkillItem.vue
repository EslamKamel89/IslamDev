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
        <div class="group hover:bg-accent/40 flex items-center gap-4 rounded-lg px-3 py-3 transition-all duration-300">
            <!-- Emoji -->
            <div
                class="bg-primary/10 flex h-10 w-10 items-center justify-center rounded-xl text-xl transition-transform duration-300 group-hover:scale-110"
            >
                {{ skill.emoji }}
            </div>

            <!-- Skill Content -->
            <div class="min-w-0 flex-1">
                <div class="flex items-center justify-between">
                    <p class="truncate text-sm font-medium">
                        {{ skill.name }}
                    </p>
                    <span class="text-muted-foreground text-xs font-medium"> {{ skill.proficiency }}% </span>
                </div>

                <div class="bg-muted mt-2 h-1.5 w-full overflow-hidden rounded-full">
                    <div
                        class="bg-primary h-1.5 rounded-full transition-all duration-500 group-hover:h-2"
                        :style="{ width: skill.proficiency + '%' }"
                    ></div>
                </div>
            </div>
        </div>
    </DescriptionTooltip>
</template>
