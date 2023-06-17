<template>
    <MainLayout>
        <h2 class="l-topic-title text-center mb-5">お題の一覧</h2>

        <table class="table text-center mb-5">
            <thead>
                <tr class="l-topic-header">
                    <th scope="col">お題</th>
                    <th scope="col">カテゴリー</th>
                    <th scope="col">公開</th>
                    <th scope="col">編集・削除</th>
                </tr>
            </thead>

            <tbody>
                <tr v-for="topic in topics">
                    <!-- 編集 -->
                    <template v-if="isEdit == topic">
                        <td>
                            <input
                                v-model="topic.topic"
                                type="text"
                                class="l-topic-input px-1 py-2"
                            />
                        </td>
                        <td>
                            <input
                                v-model="topic.category"
                                type="text"
                                class="l-topic-input px-1 py-2"
                            />
                        </td>
                        <td>
                            <div class="form-switch text-center">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    role="switch"
                                    :checked="topic.public"
                                />
                            </div>
                        </td>
                        <td class="d-flex justify-content-center gap-2">
                            <button
                                type="submit"
                                class="btn l-topic-btn l-topic-btn--edit c-topic-btn"
                                @click="update(topic)"
                            >
                                完了
                            </button>

                            <button
                                type="submit"
                                class="btn btn-secondary l-topic-btn l-topic-btn--delete c-topic-btn"
                                @click="editTopic"
                            >
                                キャンセル
                            </button>
                        </td>
                    </template>

                    <!-- 一覧 -->
                    <template v-else>
                        <td>{{ topic.topic }}</td>
                        <td>{{ topic.category }}</td>
                        <td>
                            <div class="form-switch text-center">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    role="switch"
                                    :checked="topic.public"
                                    disabled
                                />
                            </div>
                        </td>
                        <td class="d-flex justify-content-center gap-2">
                            <button
                                type="submit"
                                class="btn l-topic-btn l-topic-btn--edit c-topic-btn"
                                @click="editTopic(topic)"
                            >
                                編集
                            </button>
                            <button
                                type="submit"
                                class="btn btn-danger l-topic-btn l-topic-btn--delete c-topic-btn"
                                @click="remove(topic.id)"
                            >
                                削除
                            </button>
                        </td>
                    </template>
                </tr>

                <!-- 登録 -->
                <tr>
                    <td>
                        <input
                            v-model="form.topic"
                            type="text"
                            class="l-topic-input px-1 py-2"
                        />
                    </td>
                    <td>
                        <input
                            v-model="form.category"
                            type="text"
                            class="l-topic-input px-1 py-2"
                        />
                    </td>
                    <td>
                        <div class="form-switch text-center">
                            <input
                                v-model="form.public"
                                class="form-check-input"
                                type="checkbox"
                                role="switch"
                            />
                        </div>
                    </td>
                    <td>
                        <button
                            type="submit"
                            class="btn l-topic-btn l-topic-btn--register c-topic-btn"
                            @click="create"
                        >
                            登録
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="text-center">
            <Link href="/" class="c-btn">トップへ</Link>
        </div>
    </MainLayout>
</template>

<script setup>
import { Link, router, useForm, usePage } from "@inertiajs/vue3";
import { computed, ref } from "vue";
import MainLayout from "../../layouts/MainLayout.vue";

const page = usePage();
const form = useForm({
    topic: null,
    category: null,
    public: true,
});

const topics = computed(() => page.props.topics);

const isEdit = ref();

// 登録
const create = () => {
    form.post("topics");
};
// 編集状態の変更
const editTopic = (topic) => {
    isEdit.value = topic;
};
// 編集完了
const update = (topic) => {
    router.put(`topics/${topic.id}`, topic);
};
// 削除
const remove = (id) => {
    router.delete(`topics/${id}`, {
        onBefore: () => confirm("本当に削除しますか？"),
    });
};
</script>
