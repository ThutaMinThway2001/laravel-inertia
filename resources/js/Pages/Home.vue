<template>
    <div id="home">
        <h1>Hello {{name}}</h1>

        <p>In This series, we will use the following frameworks.</p>
        <ul >
            <li v-for="framework of frameworks" :key="framework">
                {{framework}}
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    props: {
        name: String,
        frameworks: Array
    }
}
</script>
