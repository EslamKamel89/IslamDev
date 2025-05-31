<script setup lang="ts">
import AppContent from '@/components/AppContent.vue';
import AppHeader from '@/components/AppHeader.vue';
import AppShell from '@/components/AppShell.vue';
import type { BreadcrumbItemType, SharedData } from '@/types';
import { showErrorToaster, showSuccessToaster } from '@/utils/showToast';
import { usePage } from '@inertiajs/vue3';
import { nextTick, watch } from 'vue';
import { Toaster } from 'vue-sonner';
import Footer from '../Footer.vue';
interface Props {
    breadcrumbs?: BreadcrumbItemType[];
}

withDefaults(defineProps<Props>(), {
    breadcrumbs: () => [],
});
const page = usePage<SharedData>();
watch(
    () => [page.props?.flash?.error, page.props?.flash?.success],
    async () => {
        await nextTick();
        const error = page?.props?.flash?.error;
        const success = page?.props?.flash?.success;
        if (error) {
            showErrorToaster({ title: error.title ?? '', description: error.content ?? '' });
        }
        if (success) {
            showSuccessToaster({ title: success.title ?? '', description: success.content ?? '' });
        }
    },
    { deep: true, immediate: true },
);
</script>

<template>
    <AppShell class="flex-col">
        <AppHeader :breadcrumbs="breadcrumbs" />
        <AppContent>
            <slot />
            <Toaster />
        </AppContent>
        <Footer />
    </AppShell>
</template>
