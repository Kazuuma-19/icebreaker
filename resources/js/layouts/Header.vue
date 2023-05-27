<template>
    <header class="l-header">
        <div
            class="container d-flex align-items-center justify-content-between"
        >
            <img src="../../../public/img/logo.png" alt="ロゴ" class="l-logo" />

            <Link href="/show" class="c-btn">会員登録・ログイン</Link>
        </div>
    </header>
</template>
<script setup>
import { Link } from "@inertiajs/vue3";
</script>
