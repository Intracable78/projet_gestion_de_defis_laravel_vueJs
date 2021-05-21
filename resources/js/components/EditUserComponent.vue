<template>
    <div>
        <!-- Modal -->
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edition de l'utilisateur {{dataUser.name}}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>

                                <div class="form-group">
                                    <label for="name" >Nom : </label>
                                    <input id="name" type="text" v-model="dataUser.name"><br><br>
                                    <label for="address">Adresse : </label><br>
                                    <textarea name="address" id="address" rows="4" class="form-control" v-model="dataUser.address"></textarea><br>
                                    <label for="phone">Téléphone : </label>
                                    <input id="phone" type="text" v-model="dataUser.phone"><br><br>
                                    <label for="email">Email : </label>
                                    <input id="email" type="email" v-model="dataUser.email"><br><br>
                                    <label for="naissance">Date de naissance : </label>
                                    <input id="naissance" type="date" v-model="dataUser.birth"><br><br>
                                    <label for="role">Admin :</label>
                                    <input type="number" id="role" min="0" max="1" v-model="dataUser.admin"><br><br>
                                    <label for="password">Mot de passe : </label>
                                    <input id="password" type="password" v-model="dataUser.password">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                        <button type="button" class="btn btn-success" @click="submit">Enregistrer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
name: "EditUserComponent",
    props: ['user'],
    methods: {
        submit(){
        this.$inertia.patch('/usersList/edit/'+ this.dataUser.id, this.form);

        }
    },
    data(){
    return {
        dataUser: this.user
        }
    },
    mounted(){
    console.log(this.dataUser)
    }


}
</script>


