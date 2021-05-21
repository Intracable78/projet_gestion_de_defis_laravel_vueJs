<template>
    <div>
        <navbar-admin-component></navbar-admin-component>
        <div class="container h-100 mt-5" >
            <div class="row h-100 justify-content-center align-items-center">
                <form @submit.prevent="submit">

                    <div class="form-group">
                        <label for="title">Title: </label>
                        <input id="title" type="text" v-model="sessionData.title"  class="form-control" aria-describedby="nom">
                    </div>

                    <div class="form-group">
                        <label for="description">Description : </label>
                        <input name="description" id="description"  type="text" v-model="sessionData.description"  class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="start">Start : </label>
                        <input id="start" type="text" v-model="sessionData.start" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="end">End : </label>
                        <input id="end" type="text" v-model="sessionData.end" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary" >Enregistrer</button>

                </form>
            </div>
        </div>
    </div>

</template>

<script>
import NavbarAdminComponent from "@/components/navbarAdminComponent";
export default {

    components: {NavbarAdminComponent},
    name: "Edit",
    props: ['sessionData'],

    methods: {
        submit(){
            this.$inertia.patch('/sessionsList/edit/'+ this.sessionData.id, this.sessionData);

        }
    },
}
</script>

<style scoped>

</style>
