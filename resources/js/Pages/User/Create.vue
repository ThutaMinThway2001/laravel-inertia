<template>
    <Head title="Create User"></Head>

    <h1 class="text-3xl">Create New User</h1>

    <form @submit.prevent="handlerSubmit" method="POST" action="/" class="max-w-md mx-auto mt-8" >
        
        <div class="mb-4">
            <label for="name" class="block mt-10 uppercase font-bold text-xs text-gray-700">
                Name
            </label>
            <input v-model="form.name" type="text" class="border border-gray-400 p-2 w-full" name="name" id="name">
            <div v-if="form.errors.name" v-text="form.errors.name" class="text-red-500 text-xs"></div>
        </div>

        <div class="mb-4">
            <label for="email" class="block mt-10 uppercase font-bold text-xs text-gray-700">
                Email
            </label>
            <input v-model="form.email" type="email" class="border border-gray-400 p-2 w-full" name="email" id="email">
            <div v-if="form.errors.email" v-text="form.errors.email" class="text-red-500 text-xs"></div>
        </div>

        <div class="mb-4">
            <label for="password" class="block mt-10 uppercase font-bold text-xs text-gray-700">
                password
            </label>
            <input  v-model="form.password" type="password" class="border border-gray-400 p-2 w-full" name="password" id="password">
            <div v-if="form.errors.password" v-text="form.errors.password" class="text-red-500 text-xs"></div>
        </div>

        <div class="mb-4">
            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-400" :disabled="form.processing">Submit</button>
        </div>
    </form>
</template>

<script setup>
import { reactive } from "@vue/reactivity";
import {Inertia} from '@inertiajs/inertia';
import {useForm} from '@inertiajs/inertia-vue3';
    defineProps({
        errors: Object
    })

    let form = useForm({
        name: '',
        email: '',
        password: ''
    })

    let handlerSubmit = () => {
        form.post('/users');
    }
</script>

<style>

</style>