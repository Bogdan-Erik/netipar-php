<template>
    <Layout :title="title">
        <form @submit.prevent="submit">
            <label for="name">Név kiválasztása:</label>
            <div class="relative">
                <select v-model="form.name"
                    class="block appearance-none w-full bg-grcay-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="name">
                    <option v-for="option in names" :value="option.id">
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
        </form>
    </Layout>
</template>

<script setup>
import Layout from '@/Layouts/Layout.vue'
import { reactive } from 'vue'

const form = reactive({
    name: null,
})


defineProps({
    title: String,
    names: Array[String],
})
</script>
