<template>
        <div>Show Page</div>
        <Link href="/">Main Page</Link>

</template>

<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<script>
import MainLayout from "@/Pages/Layouts/MainLayout.vue";

export default {
    layout: MainLayout
}
</script>
