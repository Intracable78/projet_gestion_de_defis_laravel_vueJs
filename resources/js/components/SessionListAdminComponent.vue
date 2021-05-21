<template>
    <div class="container">
        <!-- <table class="table table-striped" >
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
             <tr v-for="session in sessions.data" :key="session.id">
                 <th scope="row">{{session.id}}</th>
                 <td>{{session.title}}</td>
                 <td>{{ session.description }}</td>
                 <td>{{ session.start }}</td>
                 <td>{{ session.end }}</td>
                 <td><button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal" @click="getSessionEdit(session.id)">
                     Edit
                 </button>
                 <button type="button" class="btn btn-danger" @click="getSessionDelete(session.id)">
                     Delete
                 </button></td>
                 <edit-session-admin v-bind:dataSession="dataSession"></edit-session-admin>
             </tr>
             </tbody>
         </table>
         <pagination :data="sessions" @pagination-change-page="getResults" class="mt-2"></pagination>-->
     </div>
 </template>

 <script>
 import EditSessionAdmin from "./EditSessionAdmin";
 export default {/*
     components: {EditSessionAdmin},
     data(){
         return {
             sessions: {},
             dataSession: {},

         }
     },
     created() {
         axios.get('http://127.0.0.1:8000/sessionsList')
         .then(response => this.sessions = response.data)
         .catch(error => error);
     },
     mounted() {
         console.log('Component mounted.')
     },
     methods: {
         getResults(page = 1) {
             axios.get('http://127.0.0.1:8000/sessionsList?page=' + page)
                 .then(response => {
                     this.sessions = response.data;
                 }).catch(error => error);
         },
         getSessionEdit(id){
         axios.get('http://127.0.0.1:8000/admin/sessions/edit/'+id)
             .then(response =>  this.dataSession = response.data)
             .catch(error => console.log(error));
         },
         getSessionDelete(id){
             axios.delete('http://127.0.0.1:8000/admin/sessions/delete/'+id)
                 .then(response =>  console.log(response.data))
                 .catch(error => console.log(error));
             location.reload();
         }
     }*/
 }
 </script>
