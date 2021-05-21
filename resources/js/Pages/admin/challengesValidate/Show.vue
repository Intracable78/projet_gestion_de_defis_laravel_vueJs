<template>
<navbar-admin-component></navbar-admin-component>
<div id="container" class="d-flex justify-content-center align-items-center mt-5">
    <div class="card" style="width: 22rem;">
        <img :src="'/storage/images/pictureChallenges/' + picture[0].image" alt="image challenge" class="card-img-top">
        <div class="card-body">
            <h4 class="card-title">Session : {{session.title }}</h4>
            <h5 class="card-title">Titre : {{challenge.title }}</h5>
            <h5 class="card-title">Participant : {{user.name}}</h5>
            <p class="card-text">Description : {{challenge.description}}</p>
            <a :href="'/challengesList/validate/user/'+ user.id +'/session/' + session.id+ '/challenge/' + challenge.id + '/updateVerified'"><button  class="btn btn-success" @click="">
                Valider le challenge
            </button></a>
            <a :href="'/challengesList/validate/user/'+ user.id +'/session/' + session.id+ '/challenge/' + challenge.id + '/delete'"><button  class="btn btn-danger mt-2" @click="">
                Refuser le challenge
            </button></a>
        </div>
    </div>

</div>

</template>

<script>
import NavbarAdminComponent from "@/components/navbarAdminComponent";
export default {
name: "Show",
    components: {NavbarAdminComponent},
    props: {
        challenge: String,
        user : String,
        session: String,
        picture: String,
    },
    mounted() {
    console.log(this.picture[0].id);
    }
}
</script>

<style scoped>

</style>
