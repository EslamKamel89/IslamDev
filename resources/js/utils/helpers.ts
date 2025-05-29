export function getKey(value: Record<string, any>): string {
    return Object.keys(value)[0];
}
export function getValue<T>(value: Record<string, T>): T {
    return Object.values(value)[0];
}
