<template>
    <Header />

    <FlashMessage />

    <div class="container l-container">
        <slot></slot>
    </div>

    <Footer />
</template>

<script setup>
import Header from "./Header.vue";
import Footer from "./Footer.vue";
import FlashMessage from "../components/FlashMessage.vue";
</script>
