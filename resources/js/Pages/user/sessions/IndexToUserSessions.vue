<template>
    <app-layout>
        <div class="flex justify-center text-yellow-500 mt-3">
            <h2 class="font-serif">Votre session</h2>
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
                <tr class="bg-white border-4 border-gray-200">
                    <td>
                        <span class="text-center ml-2 font-semibold">{{ sessions.title }}</span>
                    </td>
                    <td class="px-16 py-2" >
                        <!--description-->{{sessions.description}}
                    </td>
                    <td class="px-16 py-2">
                        <!--date début-->{{sessions.start}}
                    </td>
                    <td class="px-16 py-2">
                        <!--date fin-->{{sessions.end}}
                    </td>
                    <td class="px-16 py-2">
                        <a :href="'/session/user/challenges/'"><button  class="bg-yellow-500 text-white px-4 py-2 border rounded-md" @click="">
                            Voir les challenges
                        </button></a>

                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </app-layout>
</template>
<script>
import AppLayout from '@/Layouts/AppLayout'
export default {
name: "IndexToUserSessions",
    components: {
        AppLayout,
    },
    props: ['sessions'],
}
</script>

<style scoped>

</style>
