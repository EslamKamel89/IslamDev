<script setup lang="ts">
const props = defineProps<{
    hideAnimation?: boolean;
}>();
</script>
<template>
    <div
        class="h-full w-full"
        v-motion
        :initial="{
            opacity: 0,
            y: 200,
        }"
        :enter="
            !hideAnimation
                ? undefined
                : {
                      opacity: 1,
                      y: 0,
                      transition: {
                          type: 'spring',
                          stiffness: '100',
                          delay: 100,
                      },
                  }
        "
        :visible-once="
            hideAnimation
                ? undefined
                : {
                      opacity: 1,
                      y: 0,
                      transition: {
                          type: 'spring',
                          stiffness: '100',
                          delay: 100,
                      },
                  }
        "
    >
        <slot />
    </div>
</template>
