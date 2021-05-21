<template>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body>
    <nav>
        <div class="navigation">
            <div><a class="acceuil" href="/">Accueil</a></div>
            <div ><a class="concept" href="/concept">Le concept</a></div>
           <!-- <div></div>-->
            <div ><a class="leaderboard" href="/leaderBoard">Leaderboard</a></div>
            <div v-if="!$page.props.user"><a class="inscription" href="/register">S'inscrire</a></div>
            <div v-if="!$page.props.user" ><a href="/login" class="connection">Se connecter</a></div>
            <div v-if="$page.props.user" ><a href="/dashboard" class="compte">Mon compte</a></div>
        </div>
    </nav>
    </body>

</template>

<script>
import JetApplicationMark from '@/Jetstream/ApplicationMark'
import JetBanner from '@/Jetstream/Banner'
import JetDropdown from '@/Jetstream/Dropdown'
import JetDropdownLink from '@/Jetstream/DropdownLink'
import JetNavLink from '@/Jetstream/NavLink'
import JetResponsiveNavLink from '@/Jetstream/ResponsiveNavLink'
export default {
name: "navBarIndex",
    components: {
        JetApplicationMark,
        JetBanner,
        JetDropdown,
        JetDropdownLink,
        JetNavLink,
        JetResponsiveNavLink,
    },
    props: {
        canLogin: Boolean,
        canRegister: Boolean,
    },

}
</script>

<style scoped>

.navigation {
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    align-items: center;
    background-color: #F59E0B;
    height: 50px;
    color: white;
}

*{
    padding: 0;
    margin: 0;
}



.navigation .inscription, .navigation .compte {
    height: 94%;
    width: 100px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: color 1s;
    -webkit-transition: color 1s;
    -moz-transition: color 1s;
    -ms-transition: color 1s;
    -o-transition: color 1s;
    color: white;

}

a:hover{
    text-decoration: none;
}

.navigation .concept{
    height: 94%;
    width: 100px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: color 3s;
    -webkit-transition: color 3s;
    -moz-transition: color 3s;
    -ms-transition: color 3s;
    -o-transition: color 3s;
    color: white;
}

.navigation .leaderboard{
    height: 94%;
    width: 100px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: color 3s;
    -webkit-transition: color 3s;
    -moz-transition: color 3s;
    -ms-transition: color 3s;
    -o-transition: color 3s;
    color: white;
}

.navigation .acceuil{
    height: 94%;
    width: 100px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: color 1s;
    -webkit-transition: color 1s;
    -moz-transition: color 1s;
    -ms-transition: color 1s;
    -o-transition: color 1s;
    color: white;
}

.navigation .connection{
    height: 94%;
    width: 100px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: color 1s;
    -webkit-transition: color 1s;
    -moz-transition: color 1s;
    -ms-transition: color 1s;
    -o-transition: color 1s;
    color: white;
}

.navigation .acceuil:hover{

    border-bottom: 4px solid white;
    margin-bottom: -4px;
}

.navigation .connection:hover{
    border-bottom: 4px solid white;
    margin-bottom: -4px;
}

.navigation .leaderboard:hover {

    border-bottom: 4px solid white;
    margin-bottom: -4px;
}

.navigation .concept:hover{

    border-bottom: 4px solid white;
    margin-bottom: -4px;

}

.navigation .inscription:hover, .navigation .compte:hover{
    border-bottom: 4px solid white;
    margin-bottom: -4px;
}

.navigation img{

    -webkit-animation: slideDown 2s;
}

@media only screen and (max-width: 500px) {

    .navigation img{
        display: none;
    }

    .navigation {
        justify-content: center;
    }

    .navigation .acceuil, .navigation .concept, .navigation .inscription, .navigation .leaderboard, .navigation .inscription, .navigation .connection, .navigation .compte{
        font-size: 12px;
    }

    .navigation .acceuil:hover{

        border-bottom: 2px solid white;
        margin-bottom: -2px;
    }

    .navigation .connection:hover{
        border-bottom: 2px solid white;
        margin-bottom: -2px;
    }

    .navigation .leaderboard:hover {

        border-bottom: 2px solid white;
        margin-bottom: -2px;
    }

    .navigation .concept:hover{

        border-bottom: 2px solid white;
        margin-bottom: -2px;

    }

    .navigation .inscription:hover{
        border-bottom: 2px solid white;
        margin-bottom: -2px;
    }

    .navigation .connection, .navigation .inscription, .navigation .leaderboard, .navigation .concept, .navigation .acceuil, .navigation .compte{
        width: 70px;
    }


}








</style>
