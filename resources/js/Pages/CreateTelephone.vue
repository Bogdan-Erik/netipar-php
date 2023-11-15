<template>
    <Layout :title="title">
        <form @submit.prevent="submit">
            <div class="flex flex-col gap-3">
                <div class="text-sm"> <span class="font-bold">Kiválasztott név:</span> {{ name.name }}</div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefonszám</label>
                    <input type="text" name="telephone" id="telephone" v-model="form.telephone"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Telefonszám" required="">
                </div>
                <div>
                    <button type="submit"
                        class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Hozzáadás</button>
                </div>
                <div>
                    <Link as="button" class="w-full font-medium text-center text-indigo-400 hover:text-indigo-600"
                        :href="$route('names.index')">
                    Vissza</Link>
                </div>
            </div>
        </form>
    </Layout>
</template>

<script setup>
import { router, Link } from '@inertiajs/vue3'
import Layout from '@/Layouts/Layout.vue'
import { reactive } from 'vue'

const props = defineProps({
    title: String,
    name: Object,
})

const form = reactive({
    telephone: null,
})

function submit() {
    router.post(`/telephones/store/${props.name.id}`, form)
}

</script>
