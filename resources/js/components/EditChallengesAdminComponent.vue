<template>
    <div>
        <!-- Modal --><!--
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edition d'un challenge</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="title" >Titre : </label>
                                <input id="title" type="text" v-model="dataChallenges.title"><br><br>
                                <p style="color: red" v-if="errors.title" v-text="errors.title[0]"></p>
                                <label for="description">Description : </label><br>
                                <textarea name="description" id="description" rows="4" class="form-control" v-model="dataChallenges.description"></textarea><br>
                                <p style="color: red" v-if="errors.description" v-text="errors.description[0]"></p>
                                <label for="points">Points : </label>
                                <input id="points" type="number" min="0" max="100" v-model="dataChallenges.points"><br><br>
                                <p style="color: red" v-if="errors.points" v-text="errors.points[0]"></p>

                                <label for="session_id">Session : </label>
                                <select id="session_id" v-model="session_id">
                                   <option v-for="session in sessions.data" :key="session.id"
                                            :value="session.id">{{session.title}}
                                    </option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger"   data-bs-dismiss="modal">Fermer</button>
                        <button type="button" class="btn btn-success" @click="updateChallenge">Enregistrer</button>
                    </div>
                </div>
            </div>
        </div>-->
    </div>
</template>

<script>
export default {
name: "EditChallengesAdminComponent",

   /* props : ['dataChallenges'],
    data(){
        return{
            sessions: {},
            session_id: '',
            errors: {}
        }
    },
    mounted() {
        axios.get('http://127.0.0.1:8000/sessionsList')
            .then(response => this.sessions = response.data)
            .catch(error => error);
        console.log("ok");
    },
    methods: {
        updateChallenge(id) {
            axios.patch('http://127.0.0.1:8000/admin/challenges/edit/' + this.dataChallenges.id, {
                title: this.dataChallenges.title,
                description: this.dataChallenges.description,
                points: this.dataChallenges.points,
                session_id: this.session_id
            })
                .then(response => console.log(response))
                .catch(error => {
                    this.errors = error.response.data.errors
                })

        },



    },*/


}
</script>


