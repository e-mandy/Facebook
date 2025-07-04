<?php
    session_start();
    if(!isset($_SESSION['csrf_token'])){
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }

    $token = $_SESSION['csrf_token'];
?>

<div class="w-screen h-screen bg-[#EFF2F5]">
    <div class="w-[432px] mx-auto">
        <img class="h-25 w-[432px] mx-auto mb-2" src="assets/images/facebook_logo.svg" alt="">
        <form action="" class="mx-auto bg-white flex flex-col items-center rounded-lg shadow-xl py-2" id="register">
            <h3 class="font-bold text-[26px]">Créer un compte</h3>
            <p class="text-[#606770] mb-3">C'est simple et rapide.</p>
            <hr class="w-full text-[#CCD0D5]">
            <input type="hidden" name="csrf_token" value="<?php echo $token ?>">
            <div class="p-4">
                <div class="name w-full flex items-center justify-between mb-3 gap-3">
                    <div>
                        <input type="text" name="prenom" class="prenom border border-[#CCD0D5] rounded p-1.5" placeholder="Prénom">
                    </div>
                    <div>
                        <input type="text" name="nom_famille" class="nom_famille border border-[#CCD0D5] rounded p-1.5" placeholder="Nom de famille">
                    </div>
                </div>
                <div class="w-full mb-2">
                    <label class="text-xs block mb-2">Date de naissance</label>
                    <div class="flex gap-4 justify-between">
                        <select name="day" class="border border-[#CCD0D5] w-1/3 rounded p-1" id="day"></select>
                        <select name="month" class="border border-[#CCD0D5] w-1/3 rounded p-1" id="month"></select>
                        <select name="year" class="border border-[#CCD0D5] w-1/3 rounded p-1" id="year"></select>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="text-xs">Genre</label>
                    <div class="flex gap-5">
                        <label class="block w-1/2 py-1 px-3 flex justify-between border border-[#CCD0D5] rounded">Homme
                            <input type="radio" value="H" name="genre">
                        </label>
                        <label class="block w-1/2 py-1 px-3 flex justify-between border border-[#CCD0D5] rounded">Femme
                            <input type="radio" value="F" name="genre">
                        </label>
                    </div>
                    
                </div>
                
                <div>
                    <input type="email" name="email" class="email w-full p-2 border border-[#CCD0D5] rounded mb-3" placeholder="Adresse e-mail">
                </div>

                <div>
                    <input type="password" name="password" class="password w-full p-2 border border-[#CCD0D5] rounded mb-3" placeholder="Nouveau mot de passe">
                </div>

                <p class="text-xs mb-3">Les personnes qui utilisent notre service ont pu importer vos coordonnées sur Facebook. <a href="#" class="text-blue-800">En savoir plus</a>.</p>
                
                <p class="text-xs">En cliquant sur S’inscrire, vous acceptez nos <a href="#" class="text-blue-800">Conditions générales</a>, notre <a href="#" class="text-blue-800">Politique de confidentialité</a> et notre <a href="#" class="text-blue-800">Politique d’utilisation des cookies</a>. Vous recevrez peut-être des notifications par texto de notre part et vous pouvez à tout moment vous désabonner.</p>
                
                <button class="w-1/2 mt-6 mb-4 py-1 mx-auto block bg-green-600 rounded text-white font-bold text-lg cursor-pointer" type="submit">S'inscrire</button>
                
                <a href="#" onclick="route('/login')" class="loginLink block text-center text-blue-600 text-lg cursor-pointer">Vous avez déjà un compte ?</a>
            </div>
            
        </form>
    </div>
    
</div>