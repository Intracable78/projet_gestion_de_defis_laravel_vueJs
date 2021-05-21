<template>
    <div class="container">
        <add-sessions-admin-component></add-sessions-admin-component>
        <SessionListAdminComponent></SessionListAdminComponent>
    </div>
</template>

<script>
import AddSessionsAdminComponent from "./AddSessionsAdminComponent";
import SessionListAdminComponent from "./SessionListAdminComponent";
export default {
    components: {SessionListAdminComponent, AddSessionsAdminComponent},
    mounted() {
        console.log('Component mounted.')
    }
}
</script>
