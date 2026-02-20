<script setup lang="ts">
import ResumeProjectCard from '@/components/Resume/ResumeProjectCard.vue';
import ResumeSection from '@/components/Resume/ResumeSection.vue';
import ResumeSkillGroup from '@/components/Resume/ResumeSkillGroup.vue';
import ResumeWorkExperience from '@/components/Resume/ResumeWorkExperience.vue';
import VisibleAnimation from '@/components/Shared/VisibleAnimation.vue';
import { useLocale } from '@/composables/useLocale';
import AppLayout from '@/layouts/AppLayout.vue';
import useSeoCv from '@/seo/contact';
import SeoHead from '@/seo/SeoHead.vue';
import { SharedData } from '@/types';
import type { RAdditionalInfo, RCertification, REducation, RLanguage, RProject, RSkillGroup, RWorkExperience } from '@/types/custom';
import { ResumeData } from '@/types/custom';
import { usePage } from '@inertiajs/vue3';
import { FileHeart } from 'lucide-vue-next';
import { computed } from 'vue';
const castRSummaryDescription = (value: any) => value as { description: Record<string, string> }[];
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
const { t } = useLocale();
const baseUrl = page.props.ziggy.url;
useSeoCv();
</script>
<template>
    <AppLayout>
        <SeoHead
            title="CV-Resume - Backend Engineer | FastAPI, Django & Laravel"
            :description="'Explore backend-focused production projects built with FastAPI, Django, and Laravel — emphasizing scalable APIs, background processing systems, and modern backend architecture.'"
            :keywords="'FastAPI, Django, Laravel, Backend Engineer, API Development, System Design, Background Jobs, Python Backend'"
            :url="`${baseUrl}/resume`"
            :image="`${baseUrl}/assets/seo/images/logo.png`"
        />

        <section class="">
            <!-- Download Button -->
            <div class="mb-8 text-right">
                <a
                    href="/assets/files/cv.pdf"
                    target="_blank"
                    class="bg-primary text-primary-foreground hover:bg-primary/90 inline-flex items-center gap-2 rounded-lg px-4 py-2 transition-colors"
                >
                    <FileHeart />
                    <span>{{ t('DOWNLOAD_RESUME') }}</span>
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
            <div v-for="(section, index) in resume.sections" :key="section.id" class="mb-10">
                <VisibleAnimation :hide-animation="index < 2">
                    <ResumeSection :title="section.title[lang]" :id="section.id">
                        <div v-if="section.id === 'summary'" class="space-y-6">
                            <div v-for="(item, index) in castRSummaryDescription(section.items)" :key="index">
                                <div>{{ item.description[lang] }}</div>
                            </div>
                        </div>
                        <div v-if="section.id === 'experience'" class="space-y-6">
                            <ResumeWorkExperience v-for="item in castRWorkExperience(section.items)" :key="item.company" :item="item" :lang="lang" />
                        </div>
                        <div v-else-if="section.id === 'skills'" class="grid grid-cols-1 gap-4 md:grid-cols-2">
                            <ResumeSkillGroup v-for="item in castRSkillGroup(section.items)" :key="item.category" :item="item" :lang="lang" />
                        </div>
                        <div v-else-if="section.id === 'projects'" class="grid grid-cols-1 gap-6">
                            <ResumeProjectCard v-for="item in castRProject(section.items)" :key="item.title.en" :item="item" :lang="lang" />
                        </div>
                        <template v-else-if="section.id == 'education'">
                            <div class="space-y-4">
                                <div v-for="item in castREducation(section.items)" :key="item.degree" class="text-sm">
                                    <!-- Education -->
                                    <div>
                                        <p class="font-medium">{{ item.institution }}</p>
                                        <p class="text-muted-foreground">{{ item.degree }}</p>
                                        <p class="mt-1">{{ item.dates.start }} – {{ item.dates.end || 'Present' }}</p>
                                        <p class="mt-2" v-if="item.description">{{ item.description[lang] }}</p>
                                    </div>
                                </div>
                            </div>
                        </template>
                        <template v-else-if="section.id == 'certifications'">
                            <div class="space-y-4">
                                <div v-for="item in castRCertification(section.items)" :key="item.title?.en" class="text-sm">
                                    <!-- Certifications -->
                                    <div>
                                        <p class="font-medium">{{ item.title[lang] }}</p>
                                        <p class="text-muted-foreground">Issued by {{ item.issuer }} • {{ item.issueDate }}</p>
                                    </div>
                                </div>
                            </div>
                        </template>
                        <template v-else-if="section.id == 'languages'">
                            <div class="space-y-4">
                                <div v-for="item in castRLanguage(section.items)" :key="item.name" class="text-sm">
                                    <!-- Languages -->
                                    <div>
                                        <p class="font-medium">{{ item.name }} – {{ item.level }}</p>
                                    </div>
                                </div>
                            </div>
                        </template>
                        <template v-else-if="section.id == 'additional'">
                            <div class="space-y-4">
                                <div v-for="item in castRAdditionalInfo(section.items)" :key="item.key" class="text-sm">
                                    <!-- Additional Info -->
                                    <div v-if="section.id === 'additional'">
                                        <p>
                                            <strong>{{ item.key }}:</strong>
                                            <a :href="item.value" target="_blank" class="underline">{{ item.value }}</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </ResumeSection>
                </VisibleAnimation>
            </div>
        </section>
    </AppLayout>
</template>
