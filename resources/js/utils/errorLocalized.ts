export default function errorLocalized(error: string, locale: string) {
    const errors = error.split('|');
    if (errors.length < 2) return error;
    if (locale == 'ar') return errors[1];
    return errors[0];
}
