<template>
    <Header />

    <div v-if="flashMessage" class="c-flash text-center mt-5 p-2">
        {{ flashMessage }}
    </div>
    <div class="container l-container">
        <slot></slot>
    </div>

    <Footer />
</template>

<script setup>
import Header from "./Header.vue";
import Footer from "./Footer.vue";
import { usePage } from "@inertiajs/vue3";
import { computed } from "vue";

const page = usePage();

const flashMessage = computed(() => page.props.flash.success);
</script>
