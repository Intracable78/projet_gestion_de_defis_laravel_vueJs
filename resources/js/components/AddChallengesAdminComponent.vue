<template>
    <div class="container">

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Créer un challenge
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Création d'un challenge pour une session Home a Game</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form @submit.prevent="submit">
                            <div class="form-group">
                                <label for="title" >Titre : </label>
                                <input id="title" type="text" v-model="form.title"><br><br>


                                <label for="description">Description : </label><br>
                                <textarea name="description" id="description" rows="4" class="form-control" v-model="form.description"></textarea><br>

                                <label for="points">Points : </label>
                                <input id="points" type="number" min="0" max="100" v-model="form.points"><br><br>

                                <div class="form-group">
                                    <label for="session_id">Session : </label><br>
                                    <select id="session_id" v-model="form.session_id">
                                        <option v-for="session in allSessions" :key="session.id"
                                                :value="session.id">{{session.title}}
                                        </option>
                                    </select>
                                </div>

                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                        <button type="button" class="btn btn-success" @click="submit">Créer le challenge</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
export default {
    name: "AddChallengesAdminComponent",
  props: {
      allSessions: String,
},


    data() {
        return {
            form: {
              title: null,
              description: null,
              points: null,
              session_id: null,
            }
          }

        },

methods: {
  submit(){
    this.$inertia.post('/challengesList', this.form);
      location.reload();
  }
},
}
</script>

