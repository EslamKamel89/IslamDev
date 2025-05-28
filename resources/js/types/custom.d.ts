export interface Category {
    id?: number;
    name: string;
    slug?: string;
    description?: Localization[];
    skills?: Skill[];
}

export interface Localization {
    locale: string;
    key: string;
    value: string;
}

export interface Skill {
    id: number;
    skill_category_id: number;
    name: string;
    slug: string;
    emoji: string;
    icon: string;
    image: any;
    proficiency: number;
    description: Localization[];
    category?: Category;
}

export interface Project {
    id: number;
    slug: string;
    thumbnail: string;
    live_url: string;
    github_url: string;
    playstore_url: string;
    applestore_url: string;
    start_date: string;
    end_date: string;
    is_featured: boolean;
    order: number;
    status: string;
    videos: string[];
    images: string[];
    title: Localization[];
    description: Localization[];
    features: Localization[];
    skills: Skill[];
}

export interface Feedback {
    id: number;
    rating: number;
    quote: Localization[];
    name: Localization[];
    title: Localization[];
    contact: Localization[];
}

export type ResumeData = {
    personal: {
        name: string;
        phone: string;
        email: string;
        website: string;
        links: {
            label: string;
            url: string;
            icon?: string; // Optional emoji or SVG name
        }[];
    };

    sections: {
        id: string;
        title: Record<string, string>; // { en: "...", ar: "..." }
        items: ResumeSectionItem[];
    }[];
};

type ResumeSectionItem =
    | ResumeWorkExperience
    | ResumeEducation
    | ResumeSkillGroup
    | ResumeProject
    | ResumeCertification
    | ResumeLanguage
    | ResumeAdditionalInfo;

// Example Section Items

interface ResumeWorkExperience {
    company: string;
    location?: string;
    role: Record<string, string>;
    dates: {
        start: string;
        end?: string;
    };
    description: Record<string, string>;
    tools: string[];
}

interface ResumeEducation {
    institution: string;
    degree: string;
    dates: {
        start: string;
        end?: string;
    };
    description?: Record<string, string>;
}

interface ResumeSkillGroup {
    category: string;
    skills: string[];
}

interface ResumeProject {
    title: Record<string, string>;
    role: string;
    year: string;
    liveUrl?: string;
    githubUrl?: string;
    description: Record<string, string>;
}

interface ResumeCertification {
    issuer: string;
    issueDate: string;
    expiryDate?: string;
    title: Record<string, string>;
}

interface ResumeLanguage {
    name: string;
    level: string;
}

interface ResumeAdditionalInfo {
    key: string;
    value: string;
}
