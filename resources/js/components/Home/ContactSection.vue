<template>
    <section class="from-background to-muted text-foreground bg-gradient-to-br px-6 py-16">
        <div class="mx-auto grid max-w-6xl items-center gap-12 md:grid-cols-2">
            <!-- Left Column - Illustration & Info -->
            <div class="space-y-8">
                <h2 class="text-3xl font-bold sm:text-4xl">Let’s Work Together</h2>
                <p class="text-muted-foreground text-lg">
                    Whether you're looking to build a product, feature, or just want to say hi – feel free to reach out!
                </p>

                <!-- Resume Download -->
                <div class="mt-6 flex flex-col gap-4 sm:flex-row">
                    <Button size="lg" as-child>
                        <a href="/resume.pdf" download>Download Resume</a>
                    </Button>
                    <Button size="lg" variant="outline" as-child>
                        <a href="mailto:eslamkamel89@gmail.com">Send Email</a>
                    </Button>
                </div>

                <!-- Social Links -->
                <div class="mt-6 flex gap-4">
                    <a href="https://linkedin.com/in/eslamkamel89/ " target="_blank" aria-label="LinkedIn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.454C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.225 0z"
                            />
                        </svg>
                    </a>
                    <a href="https://github.com/EslamKamel89 " target="_blank" aria-label="GitHub">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"
                            />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Right Column - Contact Form -->
            <div class="bg-card rounded-lg border p-6 shadow-md">
                <form @submit.prevent="submitForm" class="space-y-4">
                    <h3 class="text-xl font-semibold">Send Me a Message</h3>

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

                    <!-- Success/Error Message -->
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
            </div>
        </div>
    </section>
</template>

<script setup lang="ts">
import { Textarea } from '@/components/ui/textarea';
import { ref } from 'vue';
import Button from '../ui/button/Button.vue';
import Input from '../ui/input/Input.vue';

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
