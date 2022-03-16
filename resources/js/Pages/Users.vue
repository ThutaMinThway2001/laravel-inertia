<template>
    <Head title="Users">

    </Head>
    <div class="text-4xl font-bold">
        <h1>Users</h1>
    </div>
    <ul>
        <li v-for="user in users" :key="user.id">
            {{user.name}}
        </li>
    </ul>
</template>

<script setup>
    defineProps({users: Array})
</script>
