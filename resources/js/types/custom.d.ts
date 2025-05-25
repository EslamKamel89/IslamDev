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
    title: string;
    slug: string;
    thumbnail: string;
    live_url: string;
    github_url: string;
    start_date: string;
    end_date: string;
    is_featured: boolean;
    order: number;
    status: string;
    videos: string[];
    images: string[];
    description: Localization[];
    features: Localization[];
    skills: Skill[];
}
