<template>
    <MainLayout>
        <div>Index Page</div>
        <Link href="/hello">Show Page</Link>
        <div>message from controller: {{ message }}</div>
    </MainLayout>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import MainLayout from "../Layouts/MainLayout.vue";
defineProps(["message"]);
</script>
