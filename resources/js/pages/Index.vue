<template>
    <MainLayout>
        <div class="l-topic-wrapper">
            <div class="text-center">
                <h2 class="l-topic-title mb-5">TOPIC</h2>
            </div>

            <div class="l-topic-box p-4 text-center">
                <div class="l-topic-content">
                    <div>
                        <div class="l-topic-content__ttl p-2 mb-4">
                            {{ topic.topic }}
                        </div>
                    </div>

                    <!-- 自分のお題のみ表示 -->
                    <a
                        v-if="isUser"
                        class="l-topic-content__btn"
                        @click="display"
                    >
                        Display
                    </a>
                    <!-- 全ユーザーのお題を表示 -->
                    <a v-else class="l-topic-content__btn" @click="displayAll">
                        Display All
                    </a>
                </div>
            </div>

            <!-- userが存在していれば処理 -->
            <div v-if="user" class="text-center mt-4">
                <button
                    class="l-topic-change-btn me-5"
                    :class="{ active: isUserActive }"
                    @click="userTopics"
                >
                    自分のみ
                </button>
                <button
                    class="l-topic-change-btn"
                    :class="{ active: !isUserActive }"
                    @click="allTopics"
                >
                    全ユーザー
                </button>
            </div>
        </div>
    </MainLayout>
</template>

<script setup>
import { Link, usePage } from "@inertiajs/vue3";
import axios from "axios";
import { computed, ref } from "vue";
import MainLayout from "../layouts/MainLayout.vue";

const page = usePage();

// ログインしているかどうか（trueのものを表示）
const user = computed(() => page.props.user);

// 表示するお題を切り替え
const isUser = ref(true);
const isAllUser = ref(false);

// ボタンを切り替え
const isUserActive = ref(true);

// お題一覧
const topic = ref([]);

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
        .get(route("topics"))
        .then((response) => {
            topic.value = response.data;
            console.log(topic.value);
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

    if (!isUserActive.value) {
        isUserActive.value = !isUserActive.value;
    }
};
// 全ユーザーボタンをクリック
const allTopics = () => {
    isUser.value = false;
    isAllUser.value = true;

    if (isUserActive.value) {
        isUserActive.value = !isUserActive.value;
    }
};
</script>
