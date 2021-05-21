<template>
    <div class="container">

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Créer une session
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Création d'une session Home a Game</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form  @submit.prevent="submit">
                            <div class="form-group">
                            <label for="title" >Titre : </label>
                            <input id="title" type="text" v-model="this.form.title"><br><br>
                            <label for="description">Description : </label><br>
                            <textarea name="description" id="description" rows="4" class="form-control" v-model="this.form.description"></textarea><br>
                                <label for="start">Début de la session : </label>
                                <input id="start" type="date" v-model="this.form.start"><br><br>
                                <label for="end">Fin de la session : </label>
                                <input id="end" type="date" v-model="this.form.end">
                                </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                        <button type="button" class="btn btn-success" @click="submit">Créer la session</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
export default {
    mounted() {
        console.log('Component mounted.')
    },
    data() {
        return {
            form: {
                title: null,
                description: null,
                start: null,
                end: null,
            }
        }

    },
    methods: {
        submit(){
            this.$inertia.post('/sessionsList', this.form);
            location.reload();
        }
    },
}
</script>
