<template>
    <MainLayout>
        <h2 class="p-topic-title text-center mb-5">お題の一覧</h2>

        <table class="table text-center mb-5">
            <thead>
                <tr class="p-topic-header">
                    <th scope="col">お題</th>
                    <th scope="col">カテゴリー</th>
                    <th scope="col">公開</th>
                    <th scope="col">編集・削除</th>
                </tr>
            </thead>

            <tbody>
                <!-- 登録 -->
                <tr>
                    <td>
                        <input
                            v-model="form.topic"
                            type="text"
                            class="p-topic-input px-1 py-2"
                        />
                    </td>
                    <td>
                        <input
                            v-model="form.category"
                            type="text"
                            class="p-topic-input px-1 py-2"
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
                            class="btn c-btn p-topic-btn p-topic-btn--register c-topic-btn"
                            @click="create"
                        >
                            <i class="bi bi-plus-circle-dotted pe-1"></i>
                            追加
                        </button>
                    </td>
                </tr>

                <tr v-for="topic in topics" :key="topic.id">
                    <!-- 編集 -->
                    <template v-if="isEdit == topic">
                        <td>
                            <input
                                v-model="topic.topic"
                                type="text"
                                class="p-topic-input px-1 py-2"
                            />
                        </td>
                        <td>
                            <input
                                v-model="topic.category"
                                type="text"
                                class="p-topic-input px-1 py-2"
                            />
                        </td>
                        <td>
                            <div class="form-switch text-center">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    role="switch"
                                    :checked="topic.public"
                                    @change="topic.public = !topic.public"
                                />
                            </div>
                        </td>
                        <td class="d-flex justify-content-center gap-2">
                            <button
                                type="submit"
                                class="btn p-topic-btn p-topic-btn--edit"
                                @click="update(topic)"
                            >
                                <i class="bi bi-check-square pe-1"></i>
                                完了
                            </button>

                            <button
                                type="submit"
                                class="btn btn-secondary p-topic-btn"
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
                                class="btn c-btn p-topic-btn p-topic-btn--edit"
                                @click="editTopic(topic)"
                            >
                                <i class="bi bi-pen pe-1"></i>
                                編集
                            </button>
                            <button
                                type="submit"
                                class="btn c-btn p-topic-btn p-topic-btn--delete"
                                @click="remove(topic.id)"
                            >
                                <i class="bi bi-trash pe-1"></i>
                                削除
                            </button>
                        </td>
                    </template>
                </tr>
            </tbody>
        </table>

        <div class="text-center">
            <Link :href="route('top')" class="btn c-btn p-topic-top-btn">
                <i class="bi bi-house pe-1"></i>
                トップへ
            </Link>
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

// お題の追加
const create = () => {
    form.post("topics");
    form.reset();
};
// お題の編集状態を切り替え
const editTopic = (topic) => {
    isEdit.value = topic;
};
// お題を編集
const update = (topic) => {
    router.put(`topics/${topic.id}`, topic);
};
// お題の削除
const remove = (id) => {
    router.delete(`topics/${id}`, {
        onBefore: () => confirm("本当に削除しますか？"),
    });
};
</script>
