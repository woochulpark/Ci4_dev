<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <!-- Vue.js -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <!-- lodash -->
    <script src="https://unpkg.com/lodash@4.13.1/lodash.min.js"></script>
</head>
<body>
<div id="app">
    {{ value }}
    <button v-on:click="minus">minus</button>
    <button v-on:click="plus">plus</button>
</div>
<script>
    new Vue({
        el: "#app",
        data: {
            value: 0
        },
        methods: {
            minus() {
                this.value--;
            },
            plus() {
                this.value++;
            },
        }
    });
</script>
</body>
</html>