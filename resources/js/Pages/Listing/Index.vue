<template>
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
        <Box v-for="listing in listings" :key="listing.id">
            <div>
                <Link :href="route('listing.show', listing.id)">
                <ListingSpace :listing="listing" class="text-lg" />
                <ListingAddress :listing="listing" class="text-gray-500" />
                </Link>
            </div>
            <div>
                <Link :href="route('listing.edit', listing.id)">Edit</Link>
            </div>
            <div>
                <Link :href="route('listing.destroy', listing.id)" method="delete" as="button">Delete</Link>
            </div>
        </Box>
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import ListingAddress from '@/Components/ListingAddress.vue';
import ListingSpace from '@/Components/ListingSpace.vue';
import Box from '@/Components/UI/Box.vue';

defineProps({
    listings: Array
});
</script>