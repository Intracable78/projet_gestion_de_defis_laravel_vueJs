<template>
    <div>
        <navbar-admin-component></navbar-admin-component>
        <add-sessions-admin-component></add-sessions-admin-component>
        <div class="container">
        <table class="table table-striped" >
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">description</th>
                <th scope="col">start</th>
                <th scope="col">end</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
           <tr v-for="session in sessionsList" :key="session.id">
                <th>{{session.id}}</th>
                <td>{{session.title}}</td>
                <td>{{session.description}}</td>
                <td>{{session.start}}</td>
                <td>{{session.end}}</td>
                <td>
                    <a :href="'/sessionsList/edit/'+session.id" class="btn btn-warning " role="button" aria-disabled="true">Edit</a>
                    <button class="btn btn-danger  ml-2" role="button" aria-disabled="true" @click="deleteSession(session.id)">Delete</button>
                </td>
            </tr>
            </tbody>
        </table>
        </div>
    </div>
</template>

<script>
import NavbarAdminComponent from "@/components/navbarAdminComponent";
import AddSessionsAdminComponent from "@/components/AddSessionsAdminComponent";
export default {
    name: "Index",
    components: {NavbarAdminComponent, AddSessionsAdminComponent},
    props: ['sessions'],

    data() {
        return {
            sessionsList: this.sessions,
        }
    },
    methods: {
        deleteSession(id) {
            this.$inertia.delete('/sessionsList/delete/' + id);
            location.reload();
        }
    }
}
</script>

<style scoped>

</style>
