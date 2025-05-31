import { toast } from 'vue-sonner';
export function showSuccessToaster(options: { title: string; description: string }) {
    toast(options.title, {
        description: options.description,
        class: '!bg-green-700 rounded shadow !text-white px-3 py-2 m-4 ',
    });
}
export function showErrorToaster(options: { title: string; description: string }) {
    toast(options.title ?? '', {
        description: options.description ?? '',
        class: '!bg-red-700 rounded shadow !text-white px-3 py-2 m-4 ',
    });
}
