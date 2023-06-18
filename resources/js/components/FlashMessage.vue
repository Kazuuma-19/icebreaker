<template>
    <div v-if="flashMessage" class="c-flash text-center mt-5 p-2">
        {{ flashMessage }}
    </div>
</template>

<script setup>
import { usePage } from "@inertiajs/vue3";
import { computed } from "vue";

const page = usePage();

const flashMessage = computed(() => page.props.flash.success);
</script>
