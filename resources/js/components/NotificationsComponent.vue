<template>
    <div class="card">
        <div class="card-header">Live Notifications</div>

        <div class="card-body">
            <div class="alert alert-success" role="alert" v-text="status" v-if="status"></div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                status: ''
            }
        },

        mounted() {
            console.log('Component mounted.');

            Echo.channel('channel')
                .listen('ImportChunkReady', (e) => {
                    let count = (e.chunk + 1) * 100;
                    this.status = count + ' rows processed';
                });

            Echo.channel('channel')
                .listen('ImportReady', (e) => {
                    this.status = e.file + ' processed';
                });

            Event.$on('process-started', message => this.statusMessage(message));
        },

        methods: {
            statusMessage(message) {
                this.status = message;
            }
        }
    }
</script>
