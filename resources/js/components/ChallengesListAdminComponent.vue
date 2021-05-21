<template>
    <div class="container">
        <!--<table class="table table-striped" >
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
                <td><button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal" @click="getChallengeEdit(challenge.id)">
                    Edit
                </button>
                    <button type="button" class="btn btn-danger" @click="deleteChallenge(challenge.id)">
                        Delete
                    </button></td>
            </tr>
            <edit-challenge v-bind:dataChallenges="dataChallenges"></edit-challenge>
            </tbody>
        </table>-->
    </div>
</template>

<script>
export default {
    name: "ChallengesListAdminComponent",
    /*data() {
        return {
            challenges: {},
            dataChallenges: {},

        }
    },

    created(){
        axios.get('http://127.0.0.1:8000/challengesList')
            .then(response => this.challenges = response.data)
            .catch(error => error);
    },
    methods: {
        deleteChallenge(id){
            axios.delete('http://127.0.0.1:8000/admin/challenges/delete/'+id)
                .then(response => console.log(response.data))
                .catch(error => console.log(error));
                location.reload();
        },
        getChallengeEdit(id){
            axios.get('http://127.0.0.1:8000/admin/challenges/edit/'+id)
                .then(response =>  this.dataChallenges = response.data)
                .catch(error => console.log(error));
        }
    }*/
}
</script>


