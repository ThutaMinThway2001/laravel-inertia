<template>
    <div id="home">
        <h1>Users</h1>
    </div>
    <Nav></Nav>
    <div style="margin-top: 400px">
        <p>The current time is {{time}}</p>
        <Link href="/users" class="text-blue-500" preserve-scroll>Refresh</Link>
    </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'
import Nav from "../Shared/Nav.vue"
export default {
    components:{ Nav, Link },
    props:{
        time: String
    }
}
</script>
