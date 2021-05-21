<template>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
<nav-bar-index></nav-bar-index>
    <div class="card">
        <img class="logo" src="/images/logo.png" alt="img-logo">
        <h2>Découvre notre concept : simple, convivial et compétitif !</h2>
        <div class="target-challenge">
            <img  src="/images/iconfinder_target_3827997.svg"/>
            <h2>Réalisez des défis uniques de chez vous !</h2>
            <p>Dans votre gestion de compte, une fois inscrit à une session, des challenges seront à réaliser ! Chaque challenge ne vaut pas le même nombre de points, cela varie celon la difficulté de celui-ci. Pour valider un challenge une photo vous sera demandé, après cela le challenge sera en attente de validetaion le temps qu'un administrateur l'éxamine puis l'accepte ou le refuse. Si celui-ci est refusé vous devrez refaire le challenge.</p>
        </div>
    <div class="reward-challenge">
        <img class="img-target" src="/images/iconfinder_REWARD_achievementwinner_achievements_6791528.svg"/>
        <h2>Soyez gravés dans notre leaderBoard !</h2>
        <p>Lorsque que vous gagnez des points en réalisant un challenge, vous apparaissez dans le leaderBoard afin que de comparer vos résultat avec les autres joueurs de la session.</p>
    </div>
        <a href="/register"><button> Je souhaite participer !</button></a>
    </div>

    <footer-final></footer-final>
</template>

<script>
import NavBarIndex from "@/Layouts/navBarIndex";
import FooterFinal from "@/Layouts/footerFinal";
export default {
    name: "Concept",
    components: {FooterFinal, NavBarIndex}
}
</script>

<style scoped>
.reward-challenge, .target-challenge{
    width: 800px;
    background-color: rgba(255, 255, 255);
    height: 420px;
    display: flex;
    justify-content: center;
    box-shadow: 3px 3px 3px 3px black;
    align-items: center;
    flex-direction: column;

}

.reward-challenge img, .target-challenge img{
    width: 150px;
}



.reward-challenge h2, .target-challenge h2, .card h2{
    font-family: "Acme", sans-serif;
    text-align: center;
    color: #3f3f3f;

}

.reward-challenge p, .target-challenge p{
    padding-top: 5%;
    text-align: center;
    font-size: 1.2em;
}

.card h2{
    margin-top: 3%;

}

.card .reward-challenge, .target-challenge{
    margin-top: 3%;
    margin-bottom: 3%;
}


button{
    background-color: #F59E0B;
    padding: 10px;
    margin-top: 5%;
    color: white;
    font-size: 1.5em;
    border-radius: 5px;
    box-shadow: 0 0 0 0 #F59E0B;
    animation: pulse 1.3s infinite;
    margin-bottom: 15%;
}

.card{
    display: flex;
    align-items: center;

}

.logo{
    margin-top: 3%;
    width: 300px;
}

@media only screen and (max-width: 900px) {

    .reward-challenge, .target-challenge {
        width: 80%;
    }

    .reward-challenge p, .target-challenge p {
        font-size: 13px;
    }

    .reward-challenge img, .target-challenge img{
        width: 100px;
    }

    h2{
        font-size: 1.2em;
    }

    .logo{
        width: 100px;
    }



}

@keyframes pulse {
    to {
        box-shadow: 0 0 0 20px rgb(253, 126, 20, 0.1);
    }
}

</style>
