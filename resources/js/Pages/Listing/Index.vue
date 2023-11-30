<template>
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
        <Box v-for="listing in listings" :key="listing.id">
            <div>
                <Link :href="route('listing.show', listing.id)">
                    <ListingAddress :listing="listing" /> </Link
                >&nbsp;&nbsp;&nbsp;
            </div>
            <div>
                <Link class="edit" :href="route('listing.edit', listing.id)"
                >Редактировать</Link
                >&nbsp;&nbsp;
                <Link
                    class="delete"
                    :href="route('listing.destroy', listing.id)"
                    method="delete"
                    as="button"
                >Удалить</Link
                >
            </div>
        </Box>
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import ListingAddress from "@/Components/ListingAddress.vue";
import Box from "@/Components/UI/Box.vue";
defineProps({
    listings: Array,
});
</script>

<style scoped>
.edit {
    color: green;
}
.delete {
    color: red;
}
</style>
