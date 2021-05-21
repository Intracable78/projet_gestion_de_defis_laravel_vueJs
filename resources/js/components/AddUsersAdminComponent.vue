<template>
    <div class="container">

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Créer un utilisateur
            </button>


     <!--Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Création d'un utilisateur</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form @submit.prevent="submit">
                        <div class="form-group" >
                            <label for="name" >Nom : </label>
                            <input id="name" type="text" v-model="this.form.name"><br><br>
                            <label for="adress">Adresse : </label><br>
                            <textarea name="adress" id="adress" rows="4" class="form-control" v-model="form.address"></textarea><br>
                            <label for="phone">Téléphone : </label>
                            <input id="phone" type="text" v-model="this.form.phone"><br><br>
                            <label for="email">Email : </label>
                            <input id="email" type="email" v-model="this.form.email"><br><br>
                            <label for="naissance">Date de naissance : </label>
                            <input id="naissance" type="date" v-model="this.form.birth"><br><br>
                            <label for="password">Mot de passe : </label>
                            <input id="password" type="password" v-model="this.form.password">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-success" @click="submit">Créer l'utilisateur</button>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    name: "AddUsersAdminComponent",
    mounted() {console.log('oh');
    },

    data(){
        return{
            form: {
                name :null,
                address: null,
                phone: null,
                email: null,
                birth: null,
                password: null,
            },
        }
    },
    methods: {
    submit(){
    this.$inertia.post('/usersList', this.form);
    location.reload();
}
        },

}
</script>



