<script setup lang="ts">
import QuoteSvg from '@/components/Home/QuoteSvg.vue';
import { useLocale } from '@/composables/useLocale';
import { SharedData } from '@/types';
import type { Feedback } from '@/types/custom';
import { getLocalization } from '@/utils/getLocalization';
import { usePage } from '@inertiajs/vue3';
import { StepBack, StepForward } from 'lucide-vue-next';
import { computed, onDeactivated, onMounted, ref } from 'vue';
import Button from '../ui/button/Button.vue';
import Rating from './Rating.vue';
import TestimonialHeader from './TestimonialHeader.vue';
const page = usePage<SharedData & { feedbacks: Feedback[] }>();
const feedbacks = computed(() => page.props.feedbacks ?? []);
const { locale, isRtl, t } = useLocale();
const currentIndex = ref(0);
const currentTestimonial = ref(feedbacks.value[0]);
const interval = ref<number | null>(null);

const goTo = (index: number) => {
    currentIndex.value = index;
    currentTestimonial.value = feedbacks.value[index];
};

const next = () => {
    currentIndex.value = (currentIndex.value + 1) % feedbacks.value?.length;
    currentTestimonial.value = feedbacks.value[currentIndex.value];
};

const prev = () => {
    currentIndex.value = (currentIndex.value - 1 + feedbacks.value.length) % feedbacks.value.length;
    currentTestimonial.value = feedbacks.value[currentIndex.value];
};
const contactDetails = computed(() => {
    return JSON.parse(getLocalization(currentTestimonial.value.contact, locale.value)) as Record<string, string>;
});

onMounted(() => {
    interval.value = window.setInterval(next, 5000);
});
onDeactivated(() => {
    clearInterval(interval.value!);
});
</script>

<template>
    <section class="bg-background text-foreground px-6 py-16">
        <TestimonialHeader />
        <div class="relative mx-auto max-w-3xl">
            <QuoteSvg />
            <transition name="fade" mode="out-in">
                <div :key="currentTestimonial.id" class="bg-card relative z-10 rounded-lg p-8 shadow-md">
                    <div class="flex w-full justify-between">
                        <div>
                            <div class="mb-4 flex items-center gap-4">
                                <img
                                    :src="`https://ui-avatars.com/api/?name= ${encodeURIComponent(getLocalization(currentTestimonial.name, locale))}&background=random`"
                                    alt="Avatar"
                                    class="h-12 w-12 rounded-full object-cover"
                                />
                                <div class="text-start">
                                    <h4 class="font-semibold">{{ getLocalization(currentTestimonial.name, locale) }}</h4>
                                    <p class="text-muted-foreground text-sm">{{ getLocalization(currentTestimonial.title, locale) }}</p>
                                </div>
                            </div>
                            <Rating :rating="currentTestimonial.rating" />
                        </div>
                    </div>

                    <blockquote class="text-lg italic">"{{ getLocalization(currentTestimonial.quote, locale) }}"</blockquote>
                    <div class="text-muted-foreground mt-4 w-full border-t pt-2 text-xs overflow-ellipsis md:text-sm">
                        <div v-for="(contactDetail, index) in contactDetails" :key="index">
                            <span v-if="contactDetail" class="text-bold">{{ index }}:</span> {{ contactDetail }}
                        </div>
                    </div>
                </div>
            </transition>

            <div class="mt-6 flex items-center justify-between">
                <Button @click="prev" variant="ghost" size="icon" class="" aria-label="Previous testimonial">
                    <StepBack v-if="!isRtl()" class="!h-9 !w-9 p-1" />
                    <StepForward v-else class="!h-9 !w-9 p-1" :size="9" />
                </Button>

                <div class="flex space-x-2">
                    <button
                        v-for="(feedback, index) in feedbacks"
                        :key="feedback.id"
                        @click="goTo(index)"
                        class="h-3 w-3 rounded-full transition-all"
                        :class="currentIndex === index ? 'bg-primary w-6' : 'bg-muted'"
                        :aria-label="'Go to testimonial ' + (index + 1)"
                    ></button>
                </div>

                <Button @click="next" variant="ghost" size="icon" class="" aria-label="Next testimonial">
                    <StepForward v-if="!isRtl()" class="!h-9 !w-9 p-1" :size="9" />
                    <StepBack v-else class="!h-9 !w-9 p-1" />
                </Button>
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
