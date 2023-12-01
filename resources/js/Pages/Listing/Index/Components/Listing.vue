<template>
    <Box>
        <div>
            <Link :href="route('listing.show', listing.id)">
                <div class="flex items-center gap-2">
                    <Price :price="listing.price" class="text-2xl font-bold"/>
                    <div class="text-xs text-gray-500">
                        <Price :price="monthlyPayment" /> pm
                    </div>
                </div>
                <ListingSpace :listing="listing" class="text-lg"/>
                <ListingAddress :listing="listing" class="text-gray-500"/>
            </Link>&nbsp;&nbsp;&nbsp;
        </div>
        <div>
            <Link :href="route('listing.edit', listing.id)"
            >Редактировать</Link
            >&nbsp;&nbsp;
            <Link
                :href="route('listing.destroy', listing.id)"
                method="delete"
                as="button"
            >Удалить</Link
            >
        </div>
    </Box>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import ListingAddress from "@/Components/ListingAddress.vue";
import Box from "@/Components/UI/Box.vue";
import ListingSpace from "@/Components/ListingSpace.vue";
import Price from "@/Components/Price.vue";
import {useMonthlyPayment} from "@/Composables/useMonthlyPayment.js";


const props = defineProps({listing: Object})
const {monthlyPayment} = useMonthlyPayment(props.listing.price, 2.5, 25)
</script>
