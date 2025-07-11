<?php
    session_start();
    if(!isset($_SESSION['csrf_token'])){
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }

    $token = $_SESSION['csrf_token'];
?>
<div class="bg-[#EFF2F5] h-screen">
    <nav class="py-4 w-full flex justify-start shadow-lg bg-white">
        <img class="h-16 w-fit" src="assets/images/facebook_logo.svg" alt="">
    </nav>

    <div>
        <form action="" class="mx-auto mt-12 flex flex-col items-center rounded-lg py-2 w-[500px] bg-white p-4" id="email_verify">
            <h3 class="text-xl my-3 font-bold text-left w-full">Entrez le code de sécurité</h3>
            <hr class="w-full text-[#CCD0D5]">
            <p>Merci de vérifier dans vos e-mails que vous avez reçu un message avec votre code. Celui-ci est composé de 6 chiffres.</p>
            <div class="flex w-full justify-between mt-2">
                <div class="py-2">
                    <input type="hidden" class="csrf_token" name="csrf_token" value="<?php echo $token ?>">
                    
                    <input type="text" name="code_otp" class="w-full p-3 border border-[#CCD0D5] rounded mb-3" placeholder="Entrez le code">
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
                    <button class="py-2 px-4 w-fit bg-gray-300 text-gray-700 rounded-lg cursor-pointer">Annuler</button>
                    <button type="submit" class="py-2 px-4 w-fit bg-blue-500 text-white rounded-lg cursor-pointer">Continuer</button>
                </div>
            </div>

        </form>
    </div>
</div>