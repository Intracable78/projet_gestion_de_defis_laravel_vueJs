<template>
<app-layout>
    <div class="flex justify-center text-yellow-500 mt-3">
        <h2  class="font-serif text-uppercase">Challenge à valider</h2>
    </div>
    <div class="h-screen bg-white flex flex-col space-y-10 justify-center items-center">
        <div class="bg-gray-50 w-96 shadow-xl rounded p-5">
            <img src="/images/logo.png" alt="image On the road">
            <h1 class="text-lg font-sm flex justify-center mt-2">Titre : {{challenge.title}}</h1>
            <p class="text flex justify-center"> Description : {{challenge.description}}</p>
            <p class="text flex justify-center"> Points à gagner : {{challenge.points}}</p>
            <a  :href="'/session/user/challenges/' + challenge.id +'/post/'" class="flex justify-center">
                <button class="bg-yellow-500 text-white px-4 py-2 border rounded-md ">Participer au challenge</button>
            </a>

        </div>
    </div>
</app-layout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout'
import Button from "../../../../../vendor/laravel/jetstream/stubs/inertia/resources/js/Jetstream/Button";
export default {
name: "IndexChallenge",

    components: {
        Button,
        AppLayout,
    },
    props: ['challenge', 'picture'],

    data() {
        return {
            form: {
                description: null,
                image: null
            }
        }

    },



}
</script>

<style scoped>

</style>
