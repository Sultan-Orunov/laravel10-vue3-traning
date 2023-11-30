<template>
    <form @submit.prevent="create">
        <div class="grid grid-cols-6 gap-4">
            <div class="col-span-2">
                <label class="label">Beds</label>
                <input class="input" type="text" v-model.number="form.beds" />
                <div v-if="form.errors.beds" class="error-message">{{ form.errors.beds }}</div>
            </div>

            <div class="col-span-2">
                <label class="label">Baths</label>
                <input class="input" type="text" v-model.number="form.baths" />
                <div v-if="form.errors.baths" class="error-message">{{ form.errors.baths }}</div>
            </div>

            <div class="col-span-2">
                <label class="label">Area</label>
                <input class="input" type="text" v-model.number="form.area" />
                <div v-if="form.errors.area" class="error-message">{{ form.errors.area }}</div>
            </div>

            <div class="col-span-4">
                <label class="label">City</label>
                <input class="input" type="text" v-model="form.city" />
                <div v-if="form.errors.city" class="error-message">{{ form.errors.city }}</div>
            </div>

            <div class="col-span-2">
                <label class="label">Post Code</label>
                <input class="input" type="text" v-model="form.code" />
                <div v-if="form.errors.code" class="error-message">{{ form.errors.code }}</div>
            </div>

            <div class="col-span-4">
                <label class="label">Street</label>
                <input class="input" type="text" v-model="form.street" />
                <div v-if="form.errors.street" class="error-message">{{ form.errors.street }}</div>
            </div>

            <div class="col-span-2">
                <label class="label">Street Nr</label>
                <input class="input" type="text" v-model="form.street_nr" />
                <div v-if="form.errors.street_nr" class="error-message">{{ form.errors.street_nr }}</div>
            </div>

            <div class="col-span-6">
                <label class="label">Price</label>
                <input class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500" type="text" v-model.number="form.price" />
                <div v-if="form.errors.price" class="error-message">{{ form.errors.price }}</div>
            </div>

            <div class="col-span-6">
                <button type="submit" class="btn-primary">Create</button>
            </div>
        </div>
    </form>
</template>

<script setup>
import {useForm} from "@inertiajs/vue3";

const form = useForm({
    beds: 0,
    baths: 0,
    area: 0,
    city: null,
    code: null,
    street: null,
    street_nr: null,
    price: 0
})
const create = () => form.post(route('listing.store'))
</script>

<style scoped>
.error-message{
    width: 300px;
    color: red;
    margin: 5px;
    padding: 5px;
    border: 1px solid red;
    border-radius: 3px;
}
label {
    margin-right: 2em;
}

div {
    padding: 2px
}
</style>
