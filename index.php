<?php require_once 'includes/header.php'; ?>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card sidebar">
                        <div class="card-body">
                            <ul class="nav flex-column">
                                <li class="nav-item"><a class="nav-link" href="./index.php">Fil d'actualité</a></li>
                                <li class="nav-item"><a class="nav-link" href="./profile.php">Profil</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Amis</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Invitations</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Paramètres</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 post-section">
                    <div class="card post">
                        <div class="card-header">
                            Créer une publication
                        </div>
                        <div class="card-body">
                            <textarea class="form-control auto-expand" id="textaera" rows="2" placeholder="Exprimez-vous"></textarea>
                            <div class="mt-4 float-right">
                                <button type="submit" class="btn btn-outline-dark">Publier</button>
                            </div>
                        </div>
                    </div>
                    <div class="card post">
                        <div class="card-header">
                            Profil
                            <small id="date" class="form-text text-muted">Date Carbon</small>
                        </div>
                        <div class="card-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam architecto consectetur consequatur distinctio, dolores fugit quia quod repudiandae vero voluptas.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>