<template>
<div>
    <!-- Modal --><!--
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edition d'une session Home a Game</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="title" >Titre : </label>
                            <input id="title" type="text" v-model="dataSession.title"><br><br>
                            <label for="description" >Description : </label><br>
                            <textarea name="description" id="description" rows="4" class="form-control" v-model="dataSession.description"></textarea><br>
                            <label for="startdate">Début de la session : </label>
                            <input id="startdate" type="text" v-model="dataSession.start"><br><br>
                            <label for="endDate">Fin de la session : </label>
                            <input id="endDate"type="text" v-model="dataSession.end" >
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-success" @click="updateSession">Enregistrer</button>
                </div>
            </div>
        </div>
    </div>-->
</div>
</template>

<script>
export default {
/*props: ['dataSession'],

    methods: {
        updateSession(id) {
            axios.patch('http://127.0.0.1:8000/admin/sessions/edit/'+ this.dataSession.id, {
                title: this.dataSession.title,
                description : this.dataSession.description,
                start :  this.dataSession.start,
                end: this.dataSession.end
            })
            .then(response => console.log(response))
            .catch(error => console.log(error));
             location.reload();
        }
    }*/
}
</script>

<style scoped>

</style>
