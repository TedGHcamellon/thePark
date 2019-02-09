<template>
    <div class="chat-log">
        <chat-message v-for="message in messages" :message="message"></chat-message>
        <div class="empty" v-show="messages.length === 0">No tienes mensajes.</div>
    </div>
</template>

<script>
    export default {
        name: "ChatLog",
        props: ['messages']
    }
</script>

<style scoped>

</style>