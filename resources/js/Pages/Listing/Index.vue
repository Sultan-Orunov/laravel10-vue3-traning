<template>
<div v-for="listing in listings" :key="listing.id">
    <div class="wrap">
        <Link :href="route('listing.show', listing.id)">
            <ListingAddress :listing="listing" />
        </Link>&nbsp;&nbsp;&nbsp;
    </div>
    <div>
        <Link class="edit" :href="route('listing.edit', listing.id)">Редактировать</Link>&nbsp;&nbsp;
        <Link class="delete" :href="route('listing.destroy', listing.id)" method="delete" as="button">Удалить</Link>
    </div>
</div>
</template>

<script setup>
import {Link} from "@inertiajs/vue3";
import ListingAddress from "@/Components/ListingAddress.vue";
defineProps({
    listings: Array
})
</script>

<style scoped>
.wrap{
    width: 50%;
    border-top: 1px solid gray;
    padding: 10px 0 ;
    margin-top: 10px;
}
.edit{
    color: green;
}
.delete{
    color: red;
}
</style>

