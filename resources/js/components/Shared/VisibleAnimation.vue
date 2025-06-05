<script setup lang="ts"></script>
<template>
    <div
        class="h-full w-full"
        v-motion
        :initial="{
            opacity: 0,
            y: 200,
        }"
        :visible-once="{
            opacity: 1,
            y: 0,
            transition: {
                type: 'spring',
                stiffness: '100',
                delay: 100,
            },
        }"
    >
        <slot />
    </div>
</template>
