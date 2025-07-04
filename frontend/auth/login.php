<?php
    session_start();
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));

    $token = $_SESSION['csrf_token'];
?>

<div class="w-screen h-screen bg-[#EFF2F5]">
    <div class="w-[400px] mx-auto">
        <img class="h-20 w-[432px] mx-auto mb-2" src="assets/images/facebook_logo.svg" alt="">
        <form class="mx-auto bg-white flex flex-col items-center rounded-lg shadow-xl py-2" method="POST">
            <h3 class="text-lg my-3 ">Se connecter à Facebook</h3>
            <div class="px-4 py-2">
                <input type="hidden" value="<?php echo $token ?>">
                <input type="email" class="w-full p-3 border border-[#CCD0D5] rounded mb-3" placeholder="Adresse e-mail">

                <input type="password" class="w-full p-3 border border-[#CCD0D5] rounded mb-3" placeholder="Mot de passe">

                <button class="w-full py-3 mb-4 py-1 mx-auto block bg-blue-500 text-white font-bold text-lg rounded-lg" type="submit">Se connecter</button>
                
                <a onclick="getLogin()" class="block text-center text-blue-600 text-sm cursor-pointer">Informations de compte oubliées ?</a>

            </div>

            <div class="mb-4 w-full flex items-center justify-center gap-6 px-2">
                <hr class="w-full border-gray-200">
                <p class="p-0 m-0 text-xs">OU</p>
                <hr class="w-full border-gray-200">
            </div>

            <button class="w-fit p-3 mb-4 mx-auto block bg-[#43B72A] text-white font-bold text-lg rounded-lg cursor-pointer" onclick="getRegister()">Créer un nouveau compte</button>

        </form>
    </div>
    
</div>