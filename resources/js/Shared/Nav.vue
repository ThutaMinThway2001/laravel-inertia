<template>
    <nav class="ml-6">
        <ul class="flex space-x-4 list-inside">
            <li>
                <NavLink href='/' :active="$page.component === 'Home'">
                HOME
                </NavLink>
            </li>
            
            <li>
                <NavLink href='/users' :active="$page.component === 'Users'">
                USERS
                </NavLink>
            </li>
            
            <li>
                <NavLink href="/setting" :active="$page.component === 'Setting'">
                SETTING
                </NavLink>
            </li>
        </ul>
    </nav>
</template>

<script>
import NavLink from './NavLink.vue'

export default {
    components:{
        NavLink
    }
}
</script>

<style>

</style>