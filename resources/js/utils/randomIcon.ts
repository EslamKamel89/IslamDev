import { Bike, Bird, BriefcaseBusiness, Car, CircleGauge, Dumbbell, Plane, Rocket, StepForward, TreePine, Trophy, Volleyball } from 'lucide-vue-next';

const listItemIcons = [Rocket, Volleyball, StepForward, BriefcaseBusiness, TreePine, Plane, Bird, Car, Bike, Trophy, CircleGauge, Dumbbell];

export function getRandomIcon() {
    const randomIndex = Math.floor(Math.random() * listItemIcons.length);
    return listItemIcons[randomIndex];
}
