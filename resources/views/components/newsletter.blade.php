<div class="container my-5 py-5 border text-white rounded-3">
    <div class="row align-items-center">
        <div class="col-md-7">
            <h2 class="fw-bold">Rester dans les starting bloc</h2>
            <p>Pas de spam - Juste nos dernier article réédiger avec amour !</p>
            <form action="" method="POST" class="d-flex flex-column">
                <div class="input-group mb-3">
                    <input type="email" name="email" placeholder="Entrez votre meilleure adresse mail" class="form-control rounded-end-0" required>
                    <button type="submit" class="btn btn-dark text-white rounded-start-0">Je m'abonne !</button>
                </div>
            
                <div class="form-check">
                    <input type="checkbox" name="accept_consent" id="consent" class="form-check-input" required>
                    <label for="consent" class="form-check-label">
                        J'accepte de recevoir la newsletter mensuelle et les nouveaux articles de blog. 
                        <a href="#" class="text-white text-decoration-underline">Nous respectons vos données</a> 
                        et vous pourrez vous désinscrire à tout moment.
                    </label>
                </div>

                @csrf
            </form>
        </div>
        <div class="col-md-5 text-center">
            <!-- Image ou illustration -->
            <img src="/asset/img/envelope.png" alt='Image par <a href="https://pixabay.com/fr/users/clker-free-vector-images-3736/?utm_source=link-attribution&utm_medium=referral&utm_campaign=image&utm_content=23685">Clker-Free-Vector-Images</a> de <a href="https://pixabay.com/fr//?utm_source=link-attribution&utm_medium=referral&utm_campaign=image&utm_content=23685">Pixabay</a>' class="img-fluid">
        </div>
    </div>
</div>