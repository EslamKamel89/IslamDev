<template>
    <AppLayout class="">
        <div class="mx-auto grid max-w-5xl items-start gap-12 md:grid-cols-2">
            <!-- Left Column - Info & Links -->
            <div class="space-y-8">
                <h2 class="text-3xl font-bold sm:text-4xl">Get in Touch</h2>
                <p class="text-muted-foreground text-lg">
                    Whether you're looking to collaborate, hire me, or just want to say hi — feel free to reach out!
                </p>

                <!-- Illustration / Avatar -->
                <div class="mt-6 flex justify-center md:justify-start">
                    <img :src="illustrationUrl" alt="Contact Illustration" class="h-32 w-32 opacity-70" />
                </div>

                <!-- Contact Info -->
                <div class="space-y-6">
                    <!-- Email -->
                    <div class="flex items-start gap-4">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="20"
                            height="20"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        >
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                        <div>
                            <p class="font-medium">Email</p>
                            <a href="mailto:eslamkamel89@gmail.com" class="text-primary hover:underline">eslamkamel89@gmail.com</a>
                        </div>
                    </div>

                    <!-- Social Links -->
                    <SocialLinks />

                    <!-- Resume Download -->
                    <div class="mt-6">
                        <Button size="lg" as-child>
                            <a href="/resume.pdf" download>Download Resume</a>
                        </Button>
                    </div>
                </div>
            </div>

            <!-- Right Column - Contact Form -->
            <div class="bg-card rounded-lg border p-6 shadow-md">
                <h3 class="mb-4 text-xl font-semibold">Send Me a Message</h3>
                <ContactForm />
            </div>
        </div>
    </AppLayout>
</template>

<script setup lang="ts">
import ContactForm from '@/components/Contact/ContactForm.vue';
import SocialLinks from '@/components/Contact/SocialLinks.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import { ref } from 'vue';

const illustrationUrl = ref('/placeholder/contact.svg');
</script>
