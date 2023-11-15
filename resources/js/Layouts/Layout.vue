
<template>
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="flex gap-3 text-lg mb-[30px]">
                <Link class="text-indigo-400 hover:text-indigo-600" :href="$route('names.index')">Nevek</Link>
                <Link class="text-indigo-400 hover:text-indigo-600" :href="$route('names.create')">Új név felvétele</Link>
            </div>
            <div>
                <div v-if="$page.props.flash.message" class="alert border-[1px] border-gray-600 bg-gray-200 p-3 mb-[30px]">
                    {{ $page.props.flash.message }}
                </div>
            </div>

            <div
                class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        {{ title }}
                    </h1>
                    <slot />
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'

defineProps({
    title: String,
})
</script>
