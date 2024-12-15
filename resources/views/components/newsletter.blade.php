<div class="container mx-auto my-12 py-12 border bg-white text-black rounded-lg">
    <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
        <div class="p-6">
            <h2 class="font-bold text-2xl">Rester dans les starting bloc</h2>
            <p class="mt-4">Pas de spam - Juste nos dernier article réédiger avec amour !</p>
            <form action="" method="POST" class="flex flex-col space-y-4 mt-6">
                <div class="flex">
                    <input type="email" name="email" placeholder="Entrez votre meilleure adresse mail" class="flex-grow border border-gray-300 rounded-l-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-gray-500" required>
                    <button type="submit" class="bg-gray-800 text-white px-6 py-2 rounded-r-md hover:bg-gray-900">Je m'abonne !</button>
                </div>
                
                <div class="flex items-start space-x-2">
                    <input type="checkbox" name="accept_consent" id="consent" class="mt-1 focus:ring-2 focus:ring-gray-500" required>
                    <label for="consent" class="text-sm">
                        J'accepte de recevoir la newsletter mensuelle et les nouveaux articles de blog. 
                        <a href="#" class="text-black underline">Nous respectons vos données</a> 
                        et vous pourrez vous désinscrire à tout moment.
                    </label>
                </div>

                @csrf
            </form>
        </div>
        <div class="text-center">
            <!-- Image ou illustration -->
            <img src="/asset/img/envelope.png" alt='Image par <a href="https://pixabay.com/fr/users/clker-free-vector-images-3736/?utm_source=link-attribution&utm_medium=referral&utm_campaign=image&utm_content=23685">Clker-Free-Vector-Images</a> de <a href="https://pixabay.com/fr//?utm_source=link-attribution&utm_medium=referral&utm_campaign=image&utm_content=23685">Pixabay</a>' class="max-w-full h-auto">
        </div>
    </div>
</div>