<div class="bg-[#EFF2F5] h-screen">
    <?php require_once "../includes/navbar.php" ?>

    <div>
        <form action="" class="mx-auto mt-12 flex flex-col items-center rounded-lg py-2 w-[500px] bg-white p-4" id="email_verify">
            <h3 class="text-xl my-3 font-bold text-left w-full">Entrez le code de sécurité</h3>
            <hr class="w-full text-[#CCD0D5]">
            <p>Merci de vérifier dans vos e-mails que vous avez reçu un message avec vootre code. Celui-ci est composé de 6 chiffres.</p>
            <div class="flex w-full justify-between mt-2">
                <div class="py-2">
                    <input type="hidden" value="<?php echo $token ?>">
                    <input type="text" class="w-full p-3 border border-[#CCD0D5] rounded mb-3" placeholder="Entrez le code">
                </div>    
                <div class="flex flex-col">
                    <p>Nous avons envoyé votre code à :</p>
                    <span class="email_send"></span>
                </div>
            </div>
            <hr class="w-full text-[#CCD0D5]">
            <div class="flex justify-between items-center mt-4 w-full">
                <a href="#" class="text-blue-500">Renvoyer le code</a>
                <div>
                    <button type="submit" class="py-2 px-4 w-fit bg-gray-300 text-gray-700 rounded-lg cursor-pointer" onclick="getRegister()">Annuler</button>
                    <button class="py-2 px-4 w-fit bg-blue-500 text-white rounded-lg cursor-pointer" onclick="">Continuer</button>
                </div>
            </div>

        </form>
    </div>
</div>