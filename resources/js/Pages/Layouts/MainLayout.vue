<template>
    <div>
        <Link href="/">Index Page</Link>&nbsp;
        <Link href="/hello">Show Page</Link>
        <div>Mi page witch time: {{ timer }}</div>

        <div v-if="successMessage" class="success"> {{ successMessage }}</div>


        <slot></slot>
    </div>
</template>

<script setup>
import { Link, usePage} from "@inertiajs/vue3";
import {computed} from "vue";
import {ref} from "vue";

const page = usePage();

const successMessage = computed(() => {
    return page.props.flash
})

const timer = ref(0)
setInterval(() => timer.value++, 1000)
</script>

<style scoped>

.success{
    background-color: olivedrab;
    padding: 10px;
    border: 1px solid darkgreen;
    border-radius: 5px;
    color: white;
}
</style>
