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
                            トピックが入ります
                        </div>
                    </div>
                    <a class="l-topic-content__btn">Display</a>
                </div>
            </div>
        </div>
    </MainLayout>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import MainLayout from "../layouts/MainLayout.vue";
</script>
