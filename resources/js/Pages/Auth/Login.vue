<template>
    <Head title="Create User"></Head>

    <main class="grid place-items-center min-h-screen">
        <section class="bg-white p-8 rounded-xl max-w-md mx-auto mt-8 border">
            <h1 class="text-3xl">Login</h1>
            <form @submit.prevent="handlerSubmit" method="POST" class="" >

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
        </section>
    </main>
</template>

<script>
export default {
    layout: null
}
</script>

<script setup>
    import {useForm} from '@inertiajs/inertia-vue3';

    let form = useForm({
        email: '',
        password: ''
    })

    let handlerSubmit = () => {
        form.post('/login');
    }
</script>

<style>
</style>