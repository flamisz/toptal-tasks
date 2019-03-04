<template>
    <div>
        <button class="btn btn-sm btn-primary" @click.prevent="start">Start process</button>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Start mounted.');
        },

        methods: {
            start() {
                axios.post('/bill');
                Event.$emit('process-started', 'Process started.');
            }
        }
    }
</script>
