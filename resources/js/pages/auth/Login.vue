<template>
    <div class="p-form-wrapper p-5">
        <h2 class="c-form-title text-center mb-4">ログイン</h2>

        <form @submit.prevent="login">
            <div class="form-group mb-4">
                <label for="email" class="mb-1 c-form-label">
                    メールアドレス
                </label>
                <input
                    v-model="form.email"
                    type="email"
                    class="form-control c-form-input mb-1"
                    id="email"
                    aria-describedby="emailHelp"
                    placeholder="Enter email"
                />
                <div v-if="form.errors.email" class="text-danger">
                    {{ form.errors.email }}
                </div>
            </div>

            <div class="form-group mb-4">
                <label for="password" class="mb-1 c-form-label">
                    パスワード
                </label>
                <input
                    v-model="form.password"
                    type="password"
                    class="form-control c-form-input mb-1"
                    id="password"
                    placeholder="Password"
                />
                <div v-if="form.errors.password" class="text-danger">
                    {{ form.errors.password }}
                </div>
            </div>

            <div class="l-login-message mb-5 text-center">
                アカウントをもっていない場合は
                <Link href="register" class="l-login-message__link">
                    会員登録
                </Link>
                をしてください
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary c-form-btn">
                    ログイン
                </button>
            </div>
        </form>
    </div>
</template>

<script setup>
import { Link, useForm } from "@inertiajs/vue3";

const form = useForm({
    email: null,
    password: null,
});

const login = () => form.post(route("login.store"));
</script>
