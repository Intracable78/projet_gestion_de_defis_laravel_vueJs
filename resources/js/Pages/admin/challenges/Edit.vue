<template>
    <div>
        <navbar-admin-component></navbar-admin-component>
        <div class="container h-100 mt-5" >
            <div class="row h-100 justify-content-center align-items-center">
                <form @submit.prevent="submit">

                    <div class="form-group">
                        <label for="title">Title: </label>
                        <input id="title" type="text" v-model="challengeData.title"  class="form-control" aria-describedby="nom">
                    </div>

                    <div class="form-group">
                        <label for="description">Description : </label>
                        <input name="description" id="description"  type="text" v-model="challengeData.description"  class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="point">Point : </label>
                        <input id="point" type="number" min="0" max="100" v-model="challengeData.points" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="session_id">Session : </label><br>
                        <select id="session_id" v-model="data.sessions_id">
                            <option v-for="session in sessions" :key="session.id"
                                    :value="session.id">{{session.title}}
                            </option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary" >Enregistrer</button>

                </form>
            </div>
        </div>
    </div>
</template>

<script>
import NavbarAdminComponent from "@/components/navbarAdminComponent";
import AddChallengesAdminComponent from "@/components/AddChallengesAdminComponent";
export default {
    name: "Edit",
    components: {NavbarAdminComponent},
    props: ['challengeData', 'sessions'],
    methods: {
        submit(){
            this.$inertia.patch('/challengesList/edit/'+ this.challengeData.id, this.challengeData);
        },
        data() {
            return {
                sessions_id: '',
            }

            },
        mounted(){
            console.log("ok");
        }
        }
    }


</script>

<style scoped>

</style>
