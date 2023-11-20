<template>

    <div>Index Page</div>
    <Link href="/hello">Show Page</Link>
    <div>message from controller: {{ message }}</div>

</template>

<script setup>
import {Link} from "@inertiajs/vue3";

defineProps(["message"]);
</script>
