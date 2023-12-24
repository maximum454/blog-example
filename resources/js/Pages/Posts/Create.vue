<script setup>
import { Link, router } from '@inertiajs/vue3'
import { reactive } from "vue";
import PostLayout from "@/Layouts/PostLayout.vue";


const form = reactive({
    title: null,
    description: null,
})

function submit(){
    console.log(form)
    router.post('/posts', form)
}

</script>

<template>
    <PostLayout>

        <div class="flex justify-between items-center">
            <h1 class="text-5xl mb-6">Create Post</h1>
            <Link :href="route('post.index')" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Назад</Link>
        </div>

        <form class="max-w-sm mx-auto" @submit.prevent="submit">
            <div class="mb-4">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Название поста</label>
                <input v-model="form.title" type="text" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Как назовем" required>
            </div>
            <div class="mb-4">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Описание</label>
                <textarea v-model="form.description" id="message" rows="4" class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Про что пост"></textarea>
            </div>

            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Добавить</button>
        </form>
    </PostLayout>
</template>



<style scoped>

</style>
