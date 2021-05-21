
<template>
    <div>
        <navbar-admin-component></navbar-admin-component>
        <add-users-admin-component></add-users-admin-component>
        <div class="container">
        <table class="table table-striped" >
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">phone</th>
                <th scope="col">admin</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="user in this.usersList" :key="user.id">
                <th>{{user.id}}</th>
                <td>{{user.name}}</td>
                <td>{{user.email}}</td>
                <td>{{user.phone}}</td>
                <td>{{user.admin}}</td>
                <td>
                    <a :href="'/usersList/edit/'+user.id" class="btn btn-warning " role="button" aria-disabled="true">Edit</a>
                    <button class="btn btn-danger ml-2" role="button" aria-disabled="true" @click="deleteUser(user.id)">Delete</button>
                </td>


            </tr>
            </tbody>
        </table>
        </div>
    </div>
</template>
<script>

import NavbarAdminComponent from "@/components/navbarAdminComponent";
import AddUsersAdminComponent from "@/components/AddUsersAdminComponent";
import Button from "../../../../../vendor/laravel/jetstream/stubs/inertia/resources/js/Jetstream/Button";

export default {
name: "users",
    components: {Button, AddUsersAdminComponent, NavbarAdminComponent},
    props: ['users'],
    mounted() {
    console.log(this.usersList)
    },
    methods: {
    deleteUser(id){
            this.$inertia.delete('/usersList/delete/' + id );
        }
    },
    data(){
    return {
        usersList: this.users,
    }
    },

}

</script>



