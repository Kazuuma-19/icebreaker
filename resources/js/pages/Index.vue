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

                    <a class="l-topic-content__btn" @click="display">Display</a>
                </div>
            </div>
        </div>
    </MainLayout>
</template>

<script setup>
import { Link, usePage } from "@inertiajs/vue3";
import { ref, toRefs } from "vue";
import MainLayout from "../layouts/MainLayout.vue";

const page = usePage();
const topic = ref([]);

// お題を表示
const display = () => {
    // お題を取得
    const topics = page.props.topics;

    // お題が存在する場合
    if (topics.length > 0) {
        const index = Math.floor(Math.random() * topics.length);
        topic.value = topics[index];
    }
};
</script>
