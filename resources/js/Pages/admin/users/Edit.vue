<template>
    <div>
<div>
    <navbar-admin-component></navbar-admin-component>
    <div class="container h-100 mt-5" >
        <div class="row h-100 justify-content-center align-items-center">
    <form @submit.prevent="submit">

        <div class="form-group">
            <label for="name">Nom : </label>
            <input id="name" type="text" v-model="dataUser.name"  class="form-control" aria-describedby="nom">
        </div>

        <div class="form-group">
            <label for="address">Adresse : </label>
            <input name="address" id="address"  v-model="dataUser.address"  class="form-control">
        </div>

        <div class="form-group">
            <label for="phone">Téléphone : </label>
            <input id="phone" type="text" v-model="dataUser.phone" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email : </label>
            <input id="email" type="email" v-model="dataUser.email" class="form-control">
        </div>

        <div class="form-group">
            <label for="naissance">Date de naissance : </label>
            <input id="naissance" type="date" v-model="dataUser.birth" class="form-control">
        </div>

        <div class="form-group">
            <label for="admin">Admin :</label>
            <input type="number" id="admin" min="0" max="1" v-model="dataUser.admin" class="form-control">
        </div>

        <div class="form-group">
            <label for="password">Mot de passe : </label>
            <input id="password" type="password" v-model="dataUser.password" class="form-control input-sm">

        </div>

        <button type="submit" class="btn btn-primary" >Enregistrer</button>

    </form>
        </div>
        </div>


    </div>

    </div>
</template>

<script>
import NavbarAdminComponent from "@/components/navbarAdminComponent";
export default {
    name: "userEdit",
    components: {NavbarAdminComponent},
    props: ['userData'],
    methods: {
        submit(){
            this.$inertia.patch('/usersList/edit/'+ this.dataUser.id, this.dataUser);

        }
    },
    data(){
        return {
            dataUser: this.userData
        }
    },
    mounted(){
        console.log(this.dataUser)
    }
}
</script>

<style scoped>

</style>
