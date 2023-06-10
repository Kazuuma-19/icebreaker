<template>
    <header class="l-header">
        <div
            class="container d-flex align-items-center justify-content-between"
        >
            <a href="#">
                <img
                    src="../../../public/img/logo.png"
                    alt="ロゴ"
                    class="l-logo"
                />
            </a>

            <div v-if="user" class="d-flex align-items-center gap-3">
                <div class="text-muted">{{ user.name }}</div>
                <Link href="login" class="c-btn">ログアウト</Link>
            </div>
            <div v-else>
                <Link href="login" class="c-btn">会員登録・ログイン</Link>
            </div>
        </div>
    </header>
</template>
<script setup>
import { Link } from "@inertiajs/vue3";
import { usePage } from "@inertiajs/vue3";
import { computed } from "vue";

const page = usePage();
const user = computed(() => page.props.user);
</script>
