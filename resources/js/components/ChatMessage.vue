<template>
    <div>
        <p>{{ message.message }}</p>
        <small>{{ message.user.name }}</small>
    </div>
</template>

<script>
    export default {
        name: "ChatMessage",
        props: ['message']
    }
</script>

<style scoped>

</style>