<template>
    <PostLayout>
        <div class="flex justify-between items-center">
            <h1 class="text-5xl mb-6">Post detail</h1>
            <Link :href="route('post.index')" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Назад</Link>
        </div>
        <div v-if="post">
            <div class="mb-4 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <span>{{ post.date }}</span>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ post.title }}</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ post.description }}</p>
                <div class="inline-flex rounded-md shadow-sm" role="group">
                    <button type="button"
                            class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                        Profile
                    </button>
                    <button type="button"
                            class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                        Settings
                    </button>
                    <button type="button"
                            class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                        Messages
                    </button>
                </div>
            </div>
        </div>
        <div v-else>
            Нет постов
        </div>
    </PostLayout>
</template>

<script setup>
import {Link} from '@inertiajs/vue3'
import {defineOptions, defineProps} from 'vue'
import PostLayout from "@/Layouts/PostLayout.vue";

defineProps({
    post: Object
})
</script>

<style scoped>

</style>
