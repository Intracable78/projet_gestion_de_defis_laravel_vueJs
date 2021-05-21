<template>
<nav-bar-index></nav-bar-index>
    <div class="flex justify-center text-yellow-500 mt-3">
        <h2 class="font-serif">LeaderBoard des utilisateurs de la session {{session.title}}</h2>
    </div>
    <div class="mt-2">
        <table class="min-w-full table-auto">
            <thead class="justify-between">
            <tr class="bg-yellow-500">

                <th class="px-16 py-2">
                    <span class="text-black">Classement</span>
                </th>
                <th class="px-16 py-2">
                    <span class="text-black">nom du participant</span>
                </th>
                <th class="px-16 py-2">
                    <span class="text-black">points gagnés</span>
                </th>

            </tr>
            </thead>
            <tbody class="bg-gray-200">
            <tr class="bg-white border-4 border-gray-200" v-for="(user, index) in users" :key="user.id">
                <td>
                    <span class="text-center ml-2 font-semibold">{{ index + 1}}</span>
                </td>
                <td class="px-16 py-2" >
                    <!--description-->{{user.name}}
                </td>
                <td class="px-16 py-2">
                    <!--date début-->{{user.points_won}}
                </td>


            </tr>
            </tbody>
        </table>
    </div>
    <footer-final></footer-final>
</template>

<script>
import NavBarIndex from "@/Layouts/navBarIndex";
import FooterFinal from "@/Layouts/footerFinal";
export default {
name: "Show",
    components: {FooterFinal, NavBarIndex},
    props: {
    session: String,
        users: String,
    }
}
</script>

<style scoped>

</style>
