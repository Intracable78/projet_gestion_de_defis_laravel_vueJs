<template>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <a class="navbar-brand" href="#">Home a Game Admin</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/usersList" class="nav-link" style="color: #ffffff">Users</a>
                    </li>
                    <li class="nav-item">
                        <a href="/sessionsList" class="nav-link" style="color: #ffffff">Sessions</a>
                    </li>
                    <li class="nav-item" >
                        <a href="/challengesList" class="nav-link" style="color: #ffffff">Challenges</a>
                    </li>
                    <li class="nav-item" >
                        <a href="/challengesList/validate" class="nav-link" style="color: #ffffff">Validation Challenges</a>
                    </li>
                </ul>
            </div>
        </nav>

    </div>
</template>

<script>
export default {
name: "navbarAdminComponent"
}
</script>

<style scoped>

</style>
