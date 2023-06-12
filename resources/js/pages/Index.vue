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

                    <a
                        v-if="user"
                        class="l-topic-content__btn"
                        @click="display"
                    >
                        Display
                    </a>
                    <a v-else class="l-topic-content__btn" @click="displayAll">
                        hello
                    </a>
                </div>
            </div>

            <div v-if="user" class="text-center mt-4">
                <a href="" class="l-topic-change-btn me-5">自分のみ</a>
                <a href="" class="l-topic-change-btn active">全ユーザー</a>
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
const user = computed(() => page.props.user);

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
</script>
