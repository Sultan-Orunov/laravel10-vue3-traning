<template>
    <div>
        <Link href="/">Index Page</Link>&nbsp;
        <Link href="/hello">Show Page</Link>

        <slot></slot>
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
</script>
