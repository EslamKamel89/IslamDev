<script setup lang="ts">
import Avatar from '@/components/ui/avatar/Avatar.vue';
import AvatarFallback from '@/components/ui/avatar/AvatarFallback.vue';
import AvatarImage from '@/components/ui/avatar/AvatarImage.vue';
import {
    DropdownMenu,
    DropdownMenuContent,
    DropdownMenuItem,
    DropdownMenuLabel,
    DropdownMenuSeparator,
    DropdownMenuTrigger,
} from '@/components/ui/dropdown-menu';
import { getInitials } from '@/composables/useInitials';
import { SharedData } from '@/types';
import { Link, router, usePage } from '@inertiajs/vue3';
import { KeyRound, LogIn, LogOut, Settings, UserRoundPlus } from 'lucide-vue-next';
import { computed } from 'vue';
const page = usePage<SharedData>();
const user = computed(() => page.props.auth.user);
const handleLogout = () => {
    router.flushAll();
};
</script>
<template>
    <div>
        <DropdownMenu>
            <DropdownMenuTrigger class="translate-y-0.5">
                <KeyRound class="h-4 w-4 cursor-pointer hover:scale-110" />
            </DropdownMenuTrigger>
            <DropdownMenuContent>
                <template v-if="user">
                    <div class="flex items-center space-x-1">
                        <Avatar class="size-8 overflow-hidden rounded-full">
                            <AvatarImage v-if="user.avatar" :src="user.avatar" :alt="user.name" />
                            <AvatarFallback class="rounded-lg bg-neutral-200 font-semibold text-black dark:bg-neutral-700 dark:text-white">
                                {{ getInitials(user?.name) }}
                            </AvatarFallback>
                        </Avatar>
                        <DropdownMenuLabel
                            ><div class="text-xs">{{ page.props.auth.user.email }}</div></DropdownMenuLabel
                        >
                    </div>
                    <DropdownMenuSeparator />
                    <DropdownMenuItem>
                        <Link class="flex w-full space-x-2" :href="route('profile.edit')" prefetch as="button">
                            <Settings />
                            <div>Settings</div>
                        </Link>
                    </DropdownMenuItem>
                    <DropdownMenuItem>
                        <Link class="flex w-full space-x-2" method="post" :href="route('logout')" @click="handleLogout" as="button">
                            <LogOut />
                            <div>Logout</div>
                        </Link>
                    </DropdownMenuItem>
                </template>
                <template v-else>
                    <DropdownMenuItem>
                        <Link class="flex w-full space-x-2" :href="route('login')" prefetch as="button">
                            <LogIn />
                            <div>Login</div>
                        </Link>
                    </DropdownMenuItem>
                    <DropdownMenuItem>
                        <Link class="flex w-full space-x-2" :href="route('register')" prefetch as="button">
                            <UserRoundPlus />
                            <div>Register</div>
                        </Link>
                    </DropdownMenuItem>
                </template>
            </DropdownMenuContent>
        </DropdownMenu>
    </div>
</template>
