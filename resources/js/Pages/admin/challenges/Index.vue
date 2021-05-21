<template>
    <navbar-admin-component></navbar-admin-component>
    <add-challenges-admin-component v-bind:allSessions="allSessions"></add-challenges-admin-component>
    <div class="container">

        <table class="table table-striped" >
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">points</th>
                <th scope="col">session id</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="challenge in challenges" :key="challenge.id">
                <td>{{challenge.id}}</td>
                <td>{{challenge.title}}</td>
                <td>{{challenge.points}}</td>
                <td>{{challenge.session_id}}</td>
                <td>
                    <a :href="'/challengesList/edit/'+challenge.id" class="btn btn-warning" role="button" aria-disabled="true">Edit</a>
                    <button class="btn btn-danger  ml-2" role="button" aria-disabled="true" @click="deleteChallenge(challenge.id)">Delete</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import NavbarAdminComponent from "@/components/navbarAdminComponent";
import AddChallengesAdminComponent from "@/components/AddChallengesAdminComponent";
export default {
name: "Index",
    components: {AddChallengesAdminComponent, NavbarAdminComponent},
props: ['challenges', 'sessions'],

    methods: {
    deleteChallenge(id){
        this.$inertia.delete('/challengesList/delete/' + id );
    }
    },
    data(){
    return {
        allSessions : this.sessions,
    }
    }
}
</script>

<style scoped>

</style>
