<template>
    <MainLayout>
        <div class="p-top-wrapper">
            <div class="text-center">
                <h2 class="p-top-title mb-5">TOPIC</h2>
            </div>

            <div class="p-top-box p-4 text-center">
                <div class="p-top-content">
                    <div>
                        <div class="p-top-content__ttl p-2 mb-4">
                            {{ topic.topic }}
                        </div>
                    </div>

                    <!-- 自分のお題のみ表示 -->
                    <a
                        v-if="isUser"
                        class="p-top-content__btn"
                        @click="display"
                    >
                        Display
                    </a>
                    <!-- 全ユーザーのお題を表示 -->
                    <a v-else class="p-top-content__btn" @click="displayAll">
                        Display All
                    </a>
                </div>
            </div>

            <!-- userが存在していれば処理 -->
            <div v-if="user" class="text-center mt-5">
                <button
                    class="p-top-change-btn me-5"
                    :class="{ active: isUser }"
                    @click="userTopics"
                >
                    自分のみ
                </button>
                <button
                    class="p-top-change-btn"
                    :class="{ active: isAllUser }"
                    @click="allTopics"
                >
                    全ユーザー
                </button>
            </div>
        </div>
    </MainLayout>
</template>

<script setup>
import { usePage } from "@inertiajs/vue3";
import axios from "axios";
import { computed, ref } from "vue";
import MainLayout from "../layouts/MainLayout.vue";

const page = usePage();

// ログインしているuser情報
const user = computed(() => page.props.user);

// お題一覧
const topic = ref([]);

// 表示するお題を切り替え（初期値：allUser）
const isAllUser = ref(true);
const isUser = ref(false);

// ユーザーのお題を表示
const getUserTopics = () => {
    axios
        .get(route("userTopics"))
        .then((response) => {
            topic.value = response.data;
        })
        .catch((error) => console.log(error));
};
const display = async () => {
    await getUserTopics();
};

// 全てのお題を表示
const getTopics = () => {
    axios
        .get(route("allTopics"))
        .then((response) => {
            topic.value = response.data;
        })
        .catch((error) => console.log(error));
};
const displayAll = async () => {
    await getTopics();
};

// 自分のみボタンをクリック
const userTopics = () => {
    isAllUser.value = false;
    isUser.value = true;
};
// 全ユーザーボタンをクリック
const allTopics = () => {
    isUser.value = false;
    isAllUser.value = true;
};
</script>
