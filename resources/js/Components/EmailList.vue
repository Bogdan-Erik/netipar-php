<template>
    <div>
        <div>
            <div class="font-bold">Email címek</div>
            <div v-for="option in selectedName.emails">{{ option.email }} -
                <Link class="text-indigo-400 hover:text-indigo-600 text-sm"
                    :href="$route('emails.delete', { id: option.id })">Törlés</Link>
            </div>
            <div v-if="!selectedName.emails.length">Nincs megjeleníthető elem</div>
        </div>
        <div class="flex text-sm text-[#666666] w-full gap-4">
            <div>
                <Link class="text-indigo-400 hover:text-indigo-600" :href="$route('emails.create', { id: selectedName.id })">
                Hozzáadás</Link>
            </div>
        </div>
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'

defineProps({
    selectedName: Object,
})
</script>
