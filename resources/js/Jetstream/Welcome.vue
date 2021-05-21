<template>
    <div>
        <div class="p-12 sm:px-20 bg-white border-b border-gray-200">
            <div>
                <jet-application-logo class="block h-12 w-auto" />
            </div>

            <div class="mt-12 text-2xl">
               Bienvenue dans votre gestion de compte
            </div>

            <div class="mt-6 text-gray-500">
                Ici vous pouvez vous inscrire à une session dans l'onglet du menu <a href="http://127.0.0.1:8000/sessions">"sessions disponibles"</a>. Vous pouvez aussi suivre les challenges associés à votre session dans l'onglet <a href="http://127.0.0.1:8000/session/user">"Ma session et challenges"</a>.
                Pour finir, vous pouvez <a href="http://127.0.0.1:8000/user/profile">mettre à jour les informations de votre compte</a> en cliquant en haut à gauche sur votre nom.
                Toute l'équipe At Home a Game vous souhaite une exellente aventure !
            </div>
        </div>


    </div>
</template>

<script>
    import JetApplicationLogo from '@/Jetstream/ApplicationLogo'

    export default {
        components: {
            JetApplicationLogo,
        },
    }
</script>
