<script setup lang="ts">
import { useLocale } from '@/composables/useLocale';
import errorLocalized from '@/utils/errorLocalized';
import { showSuccessToaster } from '@/utils/showToast';
import { useForm } from '@inertiajs/vue3';
import Button from '../ui/button/Button.vue';
import Input from '../ui/input/Input.vue';
import Textarea from '../ui/textarea/Textarea.vue';
const props = defineProps<{
    to: string;
}>();
const form = useForm({
    name: '',
    email: '',
    content: '',
});

const { locale, t } = useLocale();
const submitForm = async () => {
    form.transform((data) => ({ ...data, to: props.to }));
    form.post(route('contact.store'), {
        preserveScroll: true,
        onSuccess: () => {
            form.reset();
            showSuccessToaster({
                title: t('MESSAGE_SEND'),
                description: t('MESSAGE_SEND_DESCRIPTION'),
            });
        },
    });
};
</script>
<template>
    <form @submit.prevent="submitForm" class="space-y-4">
        <!-- Name -->
        <div class="space-y-1">
            <label for="name" class="text-sm font-medium">Name</label>
            <Input id="name" v-model="form.name" placeholder="Your name" />
            <div class="mx-3 text-xs text-red-700 dark:text-red-500" v-if="form.errors.name">{{ errorLocalized(form.errors.name, locale) }}</div>
        </div>

        <!-- Email -->
        <div class="space-y-1">
            <label for="email" class="text-sm font-medium">Email</label>
            <Input id="email" type="email" v-model="form.email" placeholder="your@email.com" />
            <div class="mx-3 text-xs text-red-700 dark:text-red-500" v-if="form.errors.email">{{ errorLocalized(form.errors.email, locale) }}</div>
        </div>

        <!-- Message -->
        <div class="space-y-1">
            <label for="message" class="text-sm font-medium">Message</label>
            <Textarea id="message" v-model="form.content" rows="4" placeholder="Tell me how I can help..." />
            <div class="mx-3 text-xs text-red-700 dark:text-red-500" v-if="form.errors.content">
                {{ errorLocalized(form.errors.content, locale) }}
            </div>
        </div>

        <!-- Submit Button -->
        <Button type="submit" class="w-full" :disabled="form.processing">Send Message</Button>
    </form>
</template>
