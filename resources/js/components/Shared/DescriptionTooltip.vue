<script setup lang="ts">
import { Tooltip, TooltipContent, TooltipProvider, TooltipTrigger } from '@/components/ui/tooltip';
defineProps<{
    description: string;
}>();
</script>

<template>
    <TooltipProvider>
        <Tooltip>
            <TooltipTrigger as-child>
                <slot />
            </TooltipTrigger>
            <TooltipContent>
                <p class="max-w-sm text-center leading-loose text-white">{{ description }}</p>
            </TooltipContent>
        </Tooltip>
    </TooltipProvider>
</template>
