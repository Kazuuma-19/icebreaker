<template>
    <header class="l-header">
        <div
            class="container d-flex align-items-center justify-content-between"
        >
            <Link href="/">
                <img
                    src="../../../public/img/logo.png"
                    alt="ロゴ"
                    class="l-logo"
                />
            </Link>

            <!-- ログイン時 -->
            <div v-if="user" class="d-flex align-items-center gap-4">
                <div class="text-muted">{{ user.name }}</div>
                <Link href="topics" class="c-btn l-header-btn">
                    お題の管理
                </Link>
                <Link href="logout" method="delete" class="c-btn l-header-btn">
                    ログアウト
                </Link>
            </div>

            <div v-else class="d-flex align-items-center gap-3 text-center">
                <Link href="login" class="c-btn l-header-btn">ログイン</Link>
                <Link href="register" class="c-btn l-header-btn">会員登録</Link>
            </div>
        </div>
    </header>
</template>
<script setup>
import { Link, usePage } from "@inertiajs/vue3";
import { computed } from "vue";

const page = usePage();
const user = computed(() => page.props.user);
</script>
