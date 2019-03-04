<template>
    <div class="card">
        <div class="card-header">Example Component</div>

        <div class="card-body">
            I'm an example component.
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.');

            Echo.channel('channel')
                .listen('ImportChunkReady', (e) => {
                    console.log(e.chunk);
                });
        }
    }
</script>
