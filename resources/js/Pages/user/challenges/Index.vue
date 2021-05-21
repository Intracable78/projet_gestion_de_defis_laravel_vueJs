<template>
    <app-layout>
        <div class="flex justify-center text-yellow-500 mt-3">
<h2 class="font-serif text-uppercase">Liste des challenges à réaliser</h2>
        </div>
        <div class="mt-2">
            <table class="min-w-full table-auto">
                <thead class="justify-between">
                <tr class="bg-yellow-500">

                    <th class="px-16 py-2">
                        <span class="text-black">Titre</span>
                    </th>
                    <th class="px-16 py-2">
                        <span class="text-black">Description</span>
                    </th>
                    <th class="px-16 py-2">
                        <span class="text-black">Points</span>
                    </th>

                    <th class="px-16 py-2">
                        <span class="text-black">Action</span>
                    </th>
                </tr>
                </thead>
                <tbody class="bg-gray-200">
                <tr class="bg-white border-4 border-gray-200"  v-for="challenge in challenges" :key="challenge.id">
                    <td>
                        <span class="text-center ml-2 font-semibold">{{ challenge.title }}</span>
                    </td>
                    <td class="px-16 py-2" >
                        <!--description-->{{challenge.description}}
                    </td>
                    <td class="px-16 py-2">
                        <!--date début-->{{challenge.points}}
                    </td>
                    <td class="px-16 py-2">
                        <a :href="'/session/user/challenges/' + challenge.id"><button  class="bg-yellow-500 text-white px-4 py-2 border rounded-md" @click="">
                            Voir le challenge
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
name: "Index",
    components: {
        AppLayout,
    },
props: ['challenges'],

}
</script>

<style scoped>

</style>
