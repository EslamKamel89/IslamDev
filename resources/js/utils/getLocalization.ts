import { Localization } from '@/types/custom';

export const getLocalization = (localizations: Localization[], locale: string): string => {
    return localizations.filter((l) => l.locale == locale)[0].value;
};
