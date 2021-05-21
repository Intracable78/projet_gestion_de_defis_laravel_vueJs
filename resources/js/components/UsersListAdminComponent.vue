<template>
    <div class="container">
        <h1>Yo</h1>
     <!--   <table class="table table-striped" >
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
            <tr v-for="user in users.data" :key="user.id">
                <th>{{user.id}}</th>
                <td>{{user.name}}</td>
                <td>{{user.email}}</td>
                <td>{{user.phone}}</td>
                <td>{{user.admin}}</td>
                <td><button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal" @click="getUser(user.id)">
                    Edit
                </button>
                    <button type="button" class="btn btn-danger" @click="getUserDelete(user.id)">
                        Delete
                    </button>
                </td>
               <edit-user-component v-bind:dataUser="dataUser"></edit-user-component>
            </tr>
            </tbody>
        </table>
        <pagination :data="users" @pagination-change-page="getResults" class="mt-2"></pagination>-->
    </div>
</template>

<script>
import EditUserComponent from "./EditUserComponent";
export default {
//name: "UsersListAdminComponent",
  /*  components: {EditUserComponent},
    data(){
    return {
        users:{},
        dataUser:{},
        }
    }, */
    /*

   methods: {
       getResults(page = 1) {
           axios.get('http://127.0.0.1:8000/usersList?page=' + page)
               .then(response => {
                   this.users = response.data;
               }).catch(error => error);
       },
       getUser(id){
           axios.get('http://127.0.0.1:8000/admin/users/edit/'+id)
               .then(response =>  this.dataUser = response.data)
               .catch(error => console.log(error));
       },
       getUserDelete(id){
           axios.delete('http://127.0.0.1:8000/admin/users/delete/'+id)
               .then(response =>  consol.log(response.data))
               .catch(error => console.log(error));
           location.reload();
       }
   },
    created() {
        axios.get('http://127.0.0.1:8000/usersList')
        .then(response => this.users = response.data)
        .catch(error => console.log(error));
    }*/
    props: ['users'],
    mounted() {
        console.log(this.users);
    }
}


</script>

<style scoped>

</style>
