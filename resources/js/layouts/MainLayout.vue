<template>
    <Header />

    <div class="container l-container">
        <slot></slot>
    </div>

    <Footer />
</template>

<script setup>
import Header from "./Header.vue";
import Footer from "./Footer.vue";
</script>
