<template>
    <header class="l-header">
        <div
            class="container d-flex align-items-center justify-content-between"
        >
            <Link :href="route('top')">
                <img
                    src="/public/img/logo.png"
                    alt="ロゴ"
                    class="l-logo"
                    height="100"
                />
            </Link>

            <!-- ログイン時 -->
            <div v-if="user" class="d-flex align-items-center gap-4">
                <div class="text-muted">{{ user.name }}</div>
                <Link :href="route('topics.index')" class="c-btn l-header-btn">
                    <i class="bi bi-archive pe-1"></i>
                    お題の管理
                </Link>
                <Link
                    :href="route('logout')"
                    method="delete"
                    class="c-btn l-header-btn"
                >
                    <i class="bi bi-box-arrow-in-left pe-1"></i>
                    ログアウト
                </Link>
            </div>

            <div v-else class="d-flex align-items-center gap-3 text-center">
                <Link :href="route('login.index')" class="c-btn l-header-btn">
                    <i class="bi bi-box-arrow-in-right pe-1"></i>
                    ログイン
                </Link>
                <Link
                    :href="route('register.index')"
                    class="c-btn l-header-btn"
                >
                    <i class="bi bi-person-circle pe-1"></i>
                    会員登録
                </Link>
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
