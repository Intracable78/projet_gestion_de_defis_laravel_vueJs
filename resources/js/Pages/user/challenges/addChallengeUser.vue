<template>

    <app-layout>
        <div class="flex justify-center text-yellow-500 mt-3">
            <h2 v-if="Object.keys(completedChallenge).length === 1" class="font-serif text-uppercase">Challenge à valider</h2>
            <h2  v-else class="font-serif text-uppercase">Challenge validé</h2>

        </div>
        <div class="h-screen bg-white flex flex-col space-y-10 justify-center items-center">
                <form class="space-y-5 mt-5" @submit.prevent="submit">
                    <div class="h-screen bg-white flex flex-col space-y-10 justify-center items-center">
                        <div class="bg-gray-50 w-96 shadow-xl rounded p-5 mb-1">
                            <img src="/images/logo.png" alt="image On the road" class="mb-4">
                            <input  v-if="Object.keys(completedChallenge).length === 1" type="text" id="comment" class=" w-full h-12 border border-gray-800 rounded mb-2" placeholder="Commentaire sur le challenge" v-model="form.comment"/>
                            <label v-if="Object.keys(completedChallenge).length === 1" class="w-full flex flex-col items-center px-4 py-6 bg-white text-yellow-500 rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-yellow-600">
                                <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                </svg>
                                <span class="mt-2 text-base leading-normal">Select a file</span>
                                <input accept="image/*" id="" type="file" class="hidden" @input="form.image = $event.target.files[0]"/>
                            </label>


                    <button v-if="Object.keys(completedChallenge).length === 1"  class="text-center w-full bg-yellow-500 rounded-md text-white py-3 font-medium" type="submit">Envoyer la preuve</button>
                            <button v-if="Object.keys(completedChallenge).length !== 1"  class="text-center w-full bg-yellow-500 rounded-md text-white py-3 font-medium" type="submit">Le challenge a été validé</button>
                        </div>
                    </div>
                </form>
            </div>
    </app-layout>
</template>

<script>
import { useForm } from '@inertiajs/inertia-vue3'
import AppLayout from '@/Layouts/AppLayout'
export default {
name: "addChallengeUser",
    props: ['challenge', 'picture', 'completedChallenge'],
    components: {AppLayout},
    setup() {
        const form = useForm({
            comment: null,
            image: null
        })

        function submit()
        {
            form.post(("session/user/challenges/"), {
                forceFormData: true
            })
        }



        return { form, submit};
    },
    mounted() {
    console.log(Object.keys(this.completedChallenge))
    }

}
</script>

<style scoped>

</style>
