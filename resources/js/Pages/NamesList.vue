<template>
    <Layout :title="title">
        <form @submit.prevent="submit">
            <label for="name">Név kiválasztása:</label>
            <div class="relative">
                <select v-model="selectedName"
                    class="block appearance-none w-full bg-grcay-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="name">
                    <option v-for="option in names" :key="option.id" :value="option">
                        {{ option.name }}
                    </option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"
                    id="grid-state">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                    </svg>
                </div>
            </div>
            <div v-if="selectedName" class="mt-[30px]">
                <div class="font-bold">Kiválasztott név</div>
                <div class="flex">
                    <div class="mr-[10px]" v-if="selectedName.picture_url"><img :src="selectedName.picture_url"
                            class="w-8 h-8 rounded-full" /></div>
                    <div>{{ selectedName.name }}</div>
                </div>
                <div class="flex text-sm text-[#666666] w-full gap-4">
                    <div>
                        <Link class="text-indigo-400 hover:text-indigo-600"
                            :href="$route('names.modify', { id: selectedName.id })">Módosítás</Link>
                    </div>
                    <div>
                        <Link class="text-indigo-400 hover:text-indigo-600"
                            :href="$route('names.delete', { id: selectedName.id })">Törlés</Link>
                    </div>
                </div>
                <div class="mt-[30px] flex flex-col gap-[30px]">
                    <EmailList :selectedName="selectedName"></EmailList>
                    <TelephoneList :selectedName="selectedName"></TelephoneList>

                </div>
            </div>
        </form>
    </Layout>
</template>

<script setup>
import Layout from '@/Layouts/Layout.vue'
import EmailList from '@/Components/EmailList.vue'
import TelephoneList from '@/Components/TelephoneList.vue'
import { ref } from 'vue'
import { Link } from '@inertiajs/vue3'

const selectedName = ref(null)

defineProps({
    title: String,
    names: Array[String],
})
</script>
