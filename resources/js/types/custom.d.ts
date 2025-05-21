export interface Category {
    id: number;
    name: string;
    slug: string;
    description: Description[];
    skills: Skill[];
}

export interface Description {
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
}
