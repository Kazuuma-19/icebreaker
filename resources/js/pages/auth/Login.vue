<template>
    <div class="p-form-wrapper p-5">
        <div class="text-center mb-5">
            <img
                src="/public/img/logo.png"
                alt="ロゴ"
                class="l-logo"
                height="100"
            />
        </div>

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
                    placeholder="Email Address"
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

            <div class="c-login-message mb-5 text-center">
                アカウントをもっていない場合は
                <Link
                    :href="route('register.index')"
                    class="c-login-message__link"
                >
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
