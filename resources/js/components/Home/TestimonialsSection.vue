<script setup lang="ts">
import { useLocale } from '@/composables/useLocale';
import { onMounted, ref } from 'vue';
export type Testimonial = {
    id: number;
    quote: string;
    name: string;
    title: string;
    rating: number;
    contactInfo?: string;
};

const testimonials = [
    {
        id: 1,
        quote: 'Islam is an exceptional developer who delivered our project ahead of schedule. His attention to detail and communication were top-notch.',
        name: 'Ahmed Mohamed',
        title: 'CTO @ TechNova',
        rating: 5,
    },
    {
        id: 2,
        quote: 'Working with Islam was a pleasure. He understood our needs quickly and built a scalable Laravel backend that integrates seamlessly with our frontend.',
        name: 'Fatima Al-Sayed',
        title: 'Project Manager @ DevEdge',
        rating: 5,
    },
    {
        id: 3,
        quote: 'Highly recommend Islam for any full-stack or mobile development work. He’s reliable, skilled, and always delivers quality code.',
        name: 'Youssef Karim',
        title: 'Co-founder @ Appify',
        rating: 4,
    },
];
const { locale, isRtl, t } = useLocale();
const currentIndex = ref(0);
const currentTestimonial = ref(testimonials[0]);
const interval = ref<number | null>(null);

const goTo = (index: number) => {
    currentIndex.value = index;
    currentTestimonial.value = testimonials[index];
};

const next = () => {
    currentIndex.value = (currentIndex.value + 1) % testimonials.length;
    currentTestimonial.value = testimonials[currentIndex.value];
};

const prev = () => {
    currentIndex.value = (currentIndex.value - 1 + testimonials.length) % testimonials.length;
    currentTestimonial.value = testimonials[currentIndex.value];
};

// Auto-play
onMounted(() => {
    interval.value = window.setInterval(next, 5000);
});
</script>

<template>
    <section class="bg-background text-foreground px-6 py-16">
        <div class="mx-auto mb-12 max-w-5xl text-center">
            <h2 class="text-3xl font-bold sm:text-4xl">{{ t('CLIENT_FEEDBACK') }}</h2>
            <p class="text-muted-foreground mt-2">{{ t('WHAT_PEOPLE_SAY') }}</p>
        </div>

        <!-- Testimonial Slider -->
        <div class="relative mx-auto max-w-3xl">
            <!-- Quote Icon Background -->
            <div class="pointer-events-none absolute inset-0 flex items-center justify-center opacity-5">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="text-primary h-32 w-32">
                    <path
                        d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"
                    />
                </svg>
            </div>

            <!-- Slider Content -->
            <transition name="fade" mode="out-in">
                <div :key="currentTestimonial.id" class="bg-card relative z-10 rounded-lg p-8 shadow-md">
                    <!-- Avatar -->
                    <div class="mb-4 flex items-center gap-4">
                        <img
                            :src="`https://ui-avatars.com/api/?name= ${encodeURIComponent(currentTestimonial.name)}&background=random`"
                            alt="Avatar"
                            class="h-12 w-12 rounded-full object-cover"
                        />
                        <div class="text-left">
                            <h4 class="font-semibold">{{ currentTestimonial.name }}</h4>
                            <p class="text-muted-foreground text-sm">{{ currentTestimonial.title }}</p>
                        </div>
                    </div>

                    <!-- Stars -->
                    <div class="mb-4 flex gap-1">
                        <span v-for="n in 5" :key="n" class="text-yellow-400">
                            <svg
                                v-if="n <= currentTestimonial.rating"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                class="h-5 w-5"
                            >
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                />
                            </svg>
                            <svg
                                v-else
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                class="text-muted-foreground h-5 w-5"
                            >
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                />
                            </svg>
                        </span>
                    </div>

                    <!-- Quote Text -->
                    <blockquote class="text-lg italic">"{{ currentTestimonial.quote }}"</blockquote>
                </div>
            </transition>

            <!-- Slider Controls -->
            <div class="mt-6 flex items-center justify-between">
                <button @click="prev" class="hover:bg-muted rounded-full p-2 transition-colors" aria-label="Previous testimonial">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
                        <path fill-rule="evenodd" d="M12 22l-10-10 10-10L13.414 3.414 6.828 10H22v4H6.828l6.586 6.586L12 22z" clip-rule="evenodd" />
                    </svg>
                </button>

                <div class="flex space-x-2">
                    <button
                        v-for="(testimonial, index) in testimonials"
                        :key="testimonial.id"
                        @click="goTo(index)"
                        class="h-3 w-3 rounded-full transition-all"
                        :class="currentIndex === index ? 'bg-primary w-6' : 'bg-muted'"
                        :aria-label="'Go to testimonial ' + (index + 1)"
                    ></button>
                </div>

                <button @click="next" class="hover:bg-muted rounded-full p-2 transition-colors" aria-label="Next testimonial">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
                        <path fill-rule="evenodd" d="M12 2l10 10-10 10-1.414-1.414L17.172 14H2V10h15.172l-6.586-6.586L12 2z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>
    </section>
</template>

<style scoped>
.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.5s ease;
}
.fade-enter-from,
.fade-leave-to {
    opacity: 0;
}
</style>
