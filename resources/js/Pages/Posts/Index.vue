<template>
    <PostLayout>
        <div class="flex justify-between items-center">
            <h1 class="text-5xl mb-6">Post</h1>
            <Link :href="route('post.create')"
               class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Создать
                пост</Link>
        </div>
        <div v-if="posts">
            <div v-for="post in posts"
                 :key="post.id"
                 class="mb-4 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <span>{{ post.date }}</span>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ post.title }}</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ post.description }}</p>
                <div class="inline-flex rounded-md shadow-sm" role="group">
                    <Link :href="route('post.detail', post.id)" type="button"
                            class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                        Подробнее
                    </Link>
                    <Link :href="route('post.edit', post.id)"
                            class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                        Редактировать
                    </Link>
                    <button
                        type="button"
                        @click="postDelete(post.id)"
                        class="px-4 py-2 text-sm font-medium text-white bg-red-600 border border-red-200 rounded-e-lg hover:bg-red-400 focus:z-10 focus:ring-2  dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                        Удалить
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
import {Link, router} from '@inertiajs/vue3'
import {defineProps, defineOptions} from 'vue'
import PostLayout from "@/Layouts/PostLayout.vue";

defineProps({
    posts: Object
})

function postDelete(id){
    if (confirm("Вы точно хотите удалить пост")) {
        router.delete(`/posts/${id}`)
    }
}
</script>

<style scoped>

</style>
