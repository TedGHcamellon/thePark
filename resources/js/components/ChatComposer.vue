<template>
    <div class="chat-composer">
        <input type="text" v-model="messageText" @keydown.enter="sendMessage">
        <button class="btn btn-primary" @click="sendMessage">Enviar</button>
    </div>
</template>

<script>
    export default {
        name: "ChatComposer",
        data() {
            return {
                messageText: ''
            }
        },
        methods: {
            sendMessage() {
                console.log(this.messageText);
                this.$emit('messagesent', {
                    message: this.messageText,
                    user: {
                        name: "Peter"
                    }
                });
                this.messageText = '';
            }
        }
    }
</script>

<style scoped>

</style>