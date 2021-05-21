<template>
    <app-layout>
        <div class="flex justify-center text-yellow-500 mt-3">
            <h2 class="font-serif">Liste des sessions</h2>
        </div>
        <div class="mt-2">
            <table class="min-w-full table-auto">
                <thead class="justify-between">
                <tr class="bg-yellow-500">

                    <th class="px-16 py-2">
                        <span class="text-black">Titre</span>
                    </th>
                    <th class="px-16 py-2">
                        <span class="text-black">description</span>
                    </th>
                    <th class="px-16 py-2">
                        <span class="text-black">Début de la sessions</span>
                    </th>

                    <th class="px-16 py-2">
                        <span class="text-black">Fin de la session</span>
                    </th>
                    <th class="px-16 py-2">
                        <span class="text-black">Action</span>
                    </th>
                </tr>
                </thead>
                <tbody class="bg-gray-200">
                <tr class="bg-white border-4 border-gray-200"  v-for="session in sessions" :key="session.id">
                    <td>
                        <span class="text-center ml-2 font-semibold">{{ session.title }}</span>
                    </td>
                    <td class="px-16 py-2" >
                        <!--description-->{{session.description}}
                    </td>
                    <td class="px-16 py-2">
                        <!--date début-->{{session.start}}
                    </td>
                    <td class="px-16 py-2">
                        <!--date fin-->{{session.end}}
                    </td>
                    <td class="px-16 py-2">
                        <button v-if="session.id != user.session_id && user.session_id != ''" class="bg-yellow-500 text-white px-4 py-2 border rounded-md" @click="submit(session.id)">
                            S'inscrire
                        </button>
                        <button v-else class="bg-yellow-500 text-white px-4 py-2 border rounded-md">
                           Vous participez déjà à une session
                        </button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

    </app-layout>
    <footer-final></footer-final>

</template>

<script>
import AppLayout from '@/Layouts/AppLayout'
import FooterFinal from "@/Layouts/footerFinal";
export default {
name: "Index",
    components: {
        FooterFinal,
    AppLayout,
    },
    props: ['sessions', 'user'],
    methods: {
        submit(id){
            this.$inertia.patch('/sessions/user/edit/'+ id);
        },
    },
    mounted() {
    console.log(this.sessions
    )
    }


}
</script>

<style scoped>

</style>
