<script setup lang="ts">
import ResumeProjectCard from '@/components/Resume/ResumeProjectCard.vue';
import ResumeSection from '@/components/Resume/ResumeSection.vue';
import ResumeSkillGroup from '@/components/Resume/ResumeSkillGroup.vue';
import ResumeWorkExperience from '@/components/Resume/ResumeWorkExperience.vue';
import { useLocale } from '@/composables/useLocale';
import AppLayout from '@/layouts/AppLayout.vue';
import { SharedData } from '@/types';
import type { RAdditionalInfo, RCertification, REducation, RLanguage, RProject, RSkillGroup, RWorkExperience } from '@/types/custom';
import { ResumeData } from '@/types/custom';
import { usePage } from '@inertiajs/vue3';
import { computed } from 'vue';
const castRWorkExperience = (value: any) => value as RWorkExperience[];
const castREducation = (value: any) => value as REducation[];
const castRSkillGroup = (value: any) => value as RSkillGroup[];
const castRProject = (value: any) => value as RProject[];
const castRCertification = (value: any) => value as RCertification[];
const castRLanguage = (value: any) => value as RLanguage[];
const castRAdditionalInfo = (value: any) => value as RAdditionalInfo[];
const { locale: lang } = useLocale();

const page = usePage<SharedData & { resumeData: ResumeData }>();
const resume = computed(() => page.props.resumeData);
</script>
<template>
    <AppLayout>
        <section class="bg-background text-foreground mx-auto max-w-5xl px-6 py-12">
            <!-- Download Button -->
            <div class="mb-8 text-right">
                <a
                    href="/Islam_Ahmed_Resume.docx"
                    download
                    class="bg-primary text-primary-foreground hover:bg-primary/90 inline-flex items-center gap-2 rounded-lg px-4 py-2 transition-colors"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1M12 15v5m-6-10h12a2 2 0 002-2V7a2 2 0 00-2-2H6a2 2 0 00-2 2v5a2 2 0 002 2z"
                        />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4M12 12h.01" />
                    </svg>
                    <span>Download Resume</span>
                </a>
            </div>

            <!-- Personal Info -->
            <div class="border-border mb-10 border-b pb-6 text-center">
                <h1 class="text-3xl font-bold">{{ resume.personal.name }}</h1>
                <div class="text-muted-foreground mt-2 flex flex-wrap justify-center gap-6 text-sm">
                    <a :href="`tel:${resume.personal.phone}`" class="flex items-center gap-1">
                        {{ resume.personal.phone }}
                    </a>
                    <a :href="`mailto:${resume.personal.email}`" class="flex items-center gap-1">
                        {{ resume.personal.email }}
                    </a>
                    <a :href="resume.personal.website" target="_blank" class="flex items-center gap-1">
                        {{ resume.personal.website }}
                    </a>
                    <div v-for="link in resume.personal.links" :key="link.label" class="flex items-center gap-1">
                        <a :href="link.url" target="_blank">{{ link.label }}</a>
                    </div>
                </div>
            </div>

            <!-- Sections -->
            <div v-for="section in resume.sections" :key="section.id" class="mb-10">
                <ResumeSection :title="section.title[lang]" :id="section.id">
                    <!-- Work Experience -->
                    <div v-if="section.id === 'experience'" class="space-y-6">
                        <ResumeWorkExperience v-for="item in castRWorkExperience(section.items)" :key="item.company" :item="item" :lang="lang" />
                    </div>

                    <!-- Skills -->
                    <div v-else-if="section.id === 'skills'" class="grid grid-cols-1 gap-4 md:grid-cols-2">
                        <ResumeSkillGroup v-for="item in castRSkillGroup(section.items)" :key="item.category" :item="item" :lang="lang" />
                    </div>

                    <!-- Projects -->
                    <div v-else-if="section.id === 'projects'" class="grid grid-cols-1 gap-6">
                        <ResumeProjectCard v-for="item in castRProject(section.items)" :key="item.title.en" :item="item" :lang="lang" />
                    </div>

                    <!-- Education / Certifications / Languages / Additional Info -->
                    <div v-else class="space-y-4">
                        <div v-for="item in section.items as any" :key="item.degree || item.title?.en || item.name || item.key" class="text-sm">
                            <!-- Education -->
                            <div v-if="section.id === 'education'">
                                <p class="font-medium">{{ item.institution }}</p>
                                <p class="text-muted-foreground">{{ item.degree }}</p>
                                <p class="mt-1">{{ item.dates.start }} – {{ item.dates.end || 'Present' }}</p>
                                <p class="mt-2">{{ item.description[lang] }}</p>
                            </div>

                            <!-- Certifications -->
                            <div v-if="section.id === 'certifications'">
                                <p class="font-medium">{{ item.title[lang] }}</p>
                                <p class="text-muted-foreground">Issued by {{ item.issuer }} • {{ item.issueDate }}</p>
                            </div>

                            <!-- Languages -->
                            <div v-if="section.id === 'languages'">
                                <p class="font-medium">{{ item.name }} – {{ item.level }}</p>
                            </div>

                            <!-- Additional Info -->
                            <div v-if="section.id === 'additional'">
                                <p>
                                    <strong>{{ item.key }}:</strong> <a :href="item.value" target="_blank" class="underline">{{ item.value }}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </ResumeSection>
            </div>
        </section>
    </AppLayout>
</template>
