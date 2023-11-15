<template>
    <Layout :title="title">
        <form @submit.prevent="submit">
            <div class="flex flex-col gap-3">
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Név</label>
                    <input type="name" name="name" id="name" v-model="form.name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Teljes név" required="">
                </div>
                <div>
                    <label for="picture" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kép</label>
                    <input type="file" @input="form.picture = $event.target.files[0]" name="picture" id="picture"/>
                </div>
                <div>
                    <button type="submit"
                        class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Hozzáadás</button>
                </div>
            </div>
        </form>
    </Layout>
</template>

<script setup>
import { router, useForm } from '@inertiajs/vue3'
import Layout from '@/Layouts/Layout.vue'

const form = useForm({
    name: null,
    picture: null,
})

function submit() {
    router.post('/names/store', form)
}

defineProps({
    title: String,
    names: Array[String],
})
</script>
