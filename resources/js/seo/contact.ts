import { SharedData } from '@/types';
import { usePage } from '@inertiajs/vue3';

export default function useSeoCv() {
    const page = usePage<SharedData>();
    const baseUrl = page.props.ziggy.url;
    return {};
}
