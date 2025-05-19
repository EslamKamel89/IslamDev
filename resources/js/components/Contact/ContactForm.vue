<template>
    <form @submit.prevent="submitForm" class="space-y-4">
        <!-- Name -->
        <div class="space-y-1">
            <label for="name" class="text-sm font-medium">Name</label>
            <Input id="name" v-model="form.name" required placeholder="Your name" />
        </div>

        <!-- Email -->
        <div class="space-y-1">
            <label for="email" class="text-sm font-medium">Email</label>
            <Input id="email" type="email" v-model="form.email" required placeholder="your@email.com" />
        </div>

        <!-- Message -->
        <div class="space-y-1">
            <label for="message" class="text-sm font-medium">Message</label>
            <Textarea id="message" v-model="form.message" rows="4" required placeholder="Tell me how I can help..." />
        </div>

        <!-- Submit Button -->
        <Button type="submit" class="w-full">Send Message</Button>

        <!-- Status Message -->
        <div
            v-if="formStatus"
            :class="{
                'text-green-500': formStatus === 'success',
                'text-red-500': formStatus === 'error',
            }"
            class="mt-2 text-sm"
        >
            {{ formStatus === 'success' ? 'Message sent successfully!' : 'Something went wrong. Please try again.' }}
        </div>
    </form>
</template>

<script setup lang="ts">
import { ref } from 'vue';
import Button from '../ui/button/Button.vue';
import Input from '../ui/input/Input.vue';
import Textarea from '../ui/textarea/Textarea.vue';

const form = ref({
    name: '',
    email: '',
    message: '',
});

const formStatus = ref<'initial' | 'success' | 'error'>('initial');

const submitForm = () => {
    // Simulate successful submission
    console.log('Form submitted:', form.value);

    // Reset status
    formStatus.value = 'initial';

    // For now, simulate success
    setTimeout(() => {
        formStatus.value = 'success';
        form.value = { name: '', email: '', message: '' };
    }, 500);
};
</script>
