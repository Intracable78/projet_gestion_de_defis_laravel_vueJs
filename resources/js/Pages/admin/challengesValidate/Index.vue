<template>
<navbar-admin-component></navbar-admin-component>
    <div class="container">

        <table class="table table-striped" >
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">user_id</th>
                <th scope="col">session_id</th>
                <th scope="col">challenge_id</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="picture in pictures" :key="picture.id">
                <td v-if="picture.state !== 'vérifié' ">{{picture.id}}</td>
                <td v-if="picture.state !== 'vérifié'">{{picture.user_id}}</td>
                <td v-if="picture.state !== 'vérifié'">{{picture.session_id}}</td>
                <td v-if="picture.state !== 'vérifié'">{{picture.challenge_id}}</td>
                <td v-if="picture.state !== 'vérifié'">
                    <a :href="'/challengesList/validate/user/' + picture.user_id + '/session/' + picture.session_id + '/challenge/' + picture.challenge_id" class="btn btn-warning" role="button" aria-disabled="true">Voir le challenge</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import NavbarAdminComponent from "@/components/navbarAdminComponent";
export default {
name: "Index",
    components: {NavbarAdminComponent},
    props: ['pictures'],
    mounted() {
    console.log(this.pictures);
    }
}
</script>

<style scoped>

</style>
