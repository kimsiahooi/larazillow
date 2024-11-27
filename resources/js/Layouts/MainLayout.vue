<template>
    <Link href="/">Main Page</Link>&nbsp;
    <Link href="/hello">Show Page</Link>
    <div>The page with time {{ timer }}</div>
    <slot></slot>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
</script>
