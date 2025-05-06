<div class="max-w-md mx-auto p-6 bg-white shadow-xl rounded-lg border border-gray-200">
    <?php if(!is_null($user)) { ?>
        <div class="text-center space-y-4">
            <h2 class="text-2xl font-semibold text-gray-800">Bonjour, <?php echo $user->name; ?> !</h2>
            <div class="bg-gray-100 p-4 rounded-lg text-left">
                <p class="flex items-center text-gray-700"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500 mr-2" viewBox="0 0 20 20" fill="currentColor"><path d="M2 5a2 2 0 012-2h12a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V5z" /></svg><?php echo $user->email; ?></p>
                <p class="flex items-center text-gray-700 mt-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h13a1.5 1.5 0 011.5 1.5v13a1.5 1.5 0 01-1.5 1.5h-13A1.5 1.5 0 012 16.5v-13zM3 5h14v10H3V5zm8 1.5a1 1 0 10-2 0v1a1 1 0 002 0v-1zm0 5a1 1 0 10-2 0v1a1 1 0 002 0v-1z" clip-rule="evenodd" /></svg><?php echo $user->phone ?? 'Non renseigné'; ?></p>
                <p class="flex items-center text-gray-700 mt-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-500 mr-2" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 2a6 6 0 00-6 6c0 4.904 6 10 6 10s6-5.096 6-10a6 6 0 00-6-6zm0 8a2 2 0 110-4 2 2 0 010 4z" clip-rule="evenodd" /></svg><?php echo $user->address ?? 'Non renseignée'; ?></p>
            </div>
        </div>
    <?php } else { ?>
        <div class="text-center">
            <h2 class="text-3xl font-bold text-gray-800">Connexion requise</h2>
            <p class="text-gray-600 mt-2">Veuillez vous connecter ou vous inscrire pour continuer.</p>
            <div class="mt-6 space-y-3">
                <a href="{{$manager_url}}/auth/login?url_source={{$url_source}}" 
                   class="block bg-blue-600 text-white px-5 py-3 rounded-lg hover:bg-blue-700 font-medium shadow-md transition-all">
                    Connexion
                </a>
                <a href="{{$manager_url}}/auth/register?url_source={{$url_source}}" 
                   class="block bg-green-600 text-white px-5 py-3 rounded-lg hover:bg-green-700 font-medium shadow-md transition-all">
                    Inscription
                </a>
            </div>
        </div>
    <?php } ?>
</div>
