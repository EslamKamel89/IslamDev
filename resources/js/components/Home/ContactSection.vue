<template>
    <section class="from-background to-muted text-foreground bg-gradient-to-br px-6 py-16">
        <div class="mx-auto grid max-w-6xl items-center gap-12 md:grid-cols-2">
            <!-- Left Column - Illustration & Info -->
            <div class="space-y-8">
                <h2 class="text-3xl font-bold sm:text-4xl">Let’s Work Together</h2>
                <p class="text-muted-foreground text-lg">
                    Whether you're looking to build a product, feature, or just want to say hi – feel free to reach out!
                </p>

                <SocialLinks />
            </div>

            <ContactForm to="home" />
        </div>
    </section>
</template>

<script setup lang="ts">
import { ref } from 'vue';
import ContactForm from '../Contact/ContactForm.vue';
import SocialLinks from '../Contact/SocialLinks.vue';

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
