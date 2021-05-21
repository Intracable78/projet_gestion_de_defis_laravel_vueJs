<template>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
<nav-bar-index></nav-bar-index>
    <div class="img-header">
        <div class="info">
            <h1 class="h1-header">Découvrez</h1><br>
            <h1 class="h1-header"> At Home a Game</h1>
            <p class="p-header">Une aventure inédite !</p>
            <h1 class="h1-header"> Jouez en vous amusant</h1>
            <a href=""><button class="button-header">Rejoindre l'aventure !</button></a>
        </div>
    </div>
    <div class="header-challenge">
        <h2>Rejoignez l'aventure At Home a Game !</h2>
    </div>
    <div class="challenge">
        <div class="target-challenge">
        <img src="/images/iconfinder_target_3827997.svg"/>
        <h2>Réalisez des défis uniques de chez vous !</h2></div>
        <div class="reward-challenge">
            <img class="img-target" src="/images/iconfinder_REWARD_achievementwinner_achievements_6791528.svg"/>
            <h2>Soyez gravés dans notre leaderBoard !</h2>
        </div>
    </div>
    <footer>
        <p>Copyright 2021 © Ynov | Tous droits réservés</p>
        <img src="/images/logo.png" alt="img-logo"  width="200px">
    </footer>
</template>


<style scoped>

.img-header{
    background-image: url('/images/OTR-Header.jpg');
    height: 700px;
    width: 100%;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
    padding-right: 50%;
    padding-bottom: 10%;
}


.info{
    background-color: rgba(255, 255, 255, 0.85);
    width: 400px;
    height: 400px;
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    animation: slideDown 3s;

}

.h1-header{
    font-family: "Acme", sans-serif;
   color: #3f3f3f;

}
.p-header{
    font-size: 1.5em;
}

.button-header{
    background-color: #F59E0B;
    padding: 10px;
    margin-top: 5%;
    color: white;
    font-size: 1.5em;
    border-radius: 5px;
    box-shadow: 0 0 0 0 #F59E0B;
    animation: pulse 1.3s infinite;

}

.challenge {
    height: 400px;

    display: flex;
    justify-content: space-evenly;
    align-items: center;
}

.target-challenge, .reward-challenge{
    width: 400px;
    background-color: rgba(255, 255, 255);
    height: 350px;
    display: flex;
    justify-content: center;
    box-shadow: 3px 3px 3px 3px black;
    align-items: center;
    flex-direction: column;

}

.target-challenge img, .reward-challenge img{
    width: 150px;
}

.target-challenge h2, .reward-challenge h2{
    font-family: "Acme", sans-serif;
    text-align: center;
    color: #3f3f3f;

}

.target-challenge:hover, .reward-challenge:hover{
    transition: 1s;
    transform: translateY(-10px);

}

.img-target{
    fill: green;
}

footer{
    height: 200px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background-color:  #fd7e14;
}


.header-challenge{
    display: flex;
    justify-content: center;
    font-family: "Acme", sans-serif;
    font-size: 2em;
    padding-top: 2%;
}

@keyframes slideDown {
    0% {
        transform: translateY(-100px);
        -webkit-transform: translateY(-100px);
        -moz-transform: translateY(-100px);
        -ms-transform: translateY(-100px);
        -o-transform: translateY(-100px);
        opacity: 0;
    }
    100% {
        transform: translateY(0);
        -webkit-transform: translateY(0);
        -moz-transform: translateY(0);
        -ms-transform: translateY(0);
        -o-transform: translateY(0);
        opacity: 1;
    }

}

@keyframes pulse {
    to {
        box-shadow: 0 0 0 12px rgb(253, 126, 20, 0.1);
    }
}



@media only screen and (max-width: 900px) {
    .challenge {
        flex-direction: column;
    }

    .target-challenge, .reward-challenge {
        height: 40%;
        width: 90%;
    }

    .target-challenge img, .reward-challenge img {
        width: 20%;
    }

    .header-challenge {
        font-size: 1em;
        text-align: center;

    }

    .img-header {
        padding-right: 0%;
        padding-bottom: 5%;
    }

    .info {
        width: 90%;
        text-align: center;
    }





}

</style>

<script>

    import NavBarIndex from "@/Layouts/navBarIndex";
    export default {
        components: {NavBarIndex},
        props: {
            canLogin: Boolean,
            canRegister: Boolean,
            laravelVersion: String,
            phpVersion: String,
        }
    }
</script>
