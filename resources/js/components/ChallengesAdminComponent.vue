<template>
    <div class="container">
        <AddChallengesAdminComponent></AddChallengesAdminComponent>
        <challenges-list-admin-component></challenges-list-admin-component>
    </div>
</template>

<script>
import AddChallengesAdminComponent from "./AddChallengesAdminComponent";
import ChallengesListAdminComponent from "./ChallengesListAdminComponent";
export default {
    name: "ChallengesAdminCompenent",
    components: {ChallengesListAdminComponent, AddChallengesAdminComponent}
}
</script>


