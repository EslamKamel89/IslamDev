<script setup lang="ts">
import Button from '@/components/ui/button/Button.vue';
import { useAppearance } from '@/composables/useAppearance';
import { useLocale } from '@/composables/useLocale';
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';

const logoUrl = ref('/logo.svg'); // You can change this path to your actual logo
const { appearance, updateAppearance } = useAppearance();

const scrollToTop = () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth',
    });
};
const { t } = useLocale();
</script>
<template>
    <footer class="bg-background text-foreground border-t px-6 py-12">
        <div class="mx-auto grid max-w-7xl grid-cols-1 gap-8 md:grid-cols-4">
            <!-- Column 1: Brand & Logo -->
            <div class="space-y-4">
                <div class="flex items-center space-x-2">
                    <img :src="appearance == 'dark' ? '/assets/images/logo_dark.png' : '/assets/images/logo.png'" alt="IslamDev Logo" class="w-32" />
                    <h3 class="text-xl font-bold"></h3>
                </div>
                <p class="text-muted-foreground text-sm">{{ t('FOOTER_INTRO') }}</p>
                <p class="text-muted-foreground text-xs">{{ `&copy; ${new Date().getFullYear()} Islam Ahmed. ${t('ALL_RIGHT_RESERVED')}` }}</p>

                <!-- Social Media Icons -->
                <div class="mt-2 flex gap-4">
                    <a href="https://linkedin.com/in/eslamkamel89/ " target="_blank" aria-label="LinkedIn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452z"
                            />
                        </svg>
                    </a>
                    <a href="https://github.com/EslamKamel89 " target="_blank" aria-label="GitHub">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"
                            />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Column 2: Quick Links -->
            <div>
                <h4 class="mb-4 font-semibold">{{ t('QUICK_LINKS') }}</h4>
                <ul class="space-y-2 text-sm">
                    <li>
                        <Link href="/" class="hover:text-primary transition-colors">{{ t('home') }}</Link>
                    </li>
                    <li>
                        <Link href="/resume" class="hover:text-primary transition-colors">{{ t('CV') }}</Link>
                    </li>
                    <li>
                        <Link href="/projects" class="hover:text-primary transition-colors">{{ t('PROJECTS') }}</Link>
                    </li>
                    <li>
                        <Link href="/contact" class="hover:text-primary transition-colors">{{ t('CONTACT') }}</Link>
                    </li>
                </ul>
            </div>

            <!-- Column 3: About -->
            <div>
                <h4 class="mb-4 font-semibold">{{ t('ABOUT') }}</h4>
                <ul class="space-y-2 text-sm">
                    <li>
                        <a href="/assets/files/cv.pdf" target="_blank" class="hover:text-primary transition-colors">{{ t('DOWNLOAD_RESUME') }}</a>
                    </li>
                    <li>
                        <Link href="/skills" class="hover:text-primary transition-colors">{{ t('SKILLS') }}</Link>
                    </li>
                </ul>
            </div>

            <!-- Column 4: Contact / Newsletter -->
            <div>
                <h4 class="mb-4 font-semibold">{{ t('STAY_CONNECTED') }}</h4>
                <p class="text-muted-foreground mb-4 text-sm">{{ t('GET_IN_TOUCH_2') }}</p>
                <Button variant="outline" as-child class="w-full">
                    <Link href="/contact">{{ t('CONTACT') }}</Link>
                </Button>
            </div>
        </div>

        <!-- Back to Top Button -->
        <div class="mt-8 flex justify-center">
            <Button
                @click="scrollToTop"
                class="bg-primary text-primary-foreground hover:bg-primary/90 rounded-full p-2 shadow-md transition-colors"
                aria-label="Scroll back to top"
            >
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
                    <polyline points="18 15 12 9 6 15"></polyline>
                </svg>
            </Button>
        </div>
    </footer>
</template>
