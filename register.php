<?php require_once './includes/header.php'; ?>

    <section>
        <div class="container">
            <div class="card mx-auto" style="max-width: 500px">
                <div class="card-header text-center">Inscription</div>
                <div class="card-body">

                    <form action="./assets/register.php" method="POST">

                        <div class="form-group">
                            <label for="first-name">Prénom</label>
                            <input class="form-control" name="first_name" id="first-name">
                        </div>
                        <div class="form-group">
                            <label for="last-name">Nom de famille</label>
                            <input class="form-control" name="last_name" id="last-name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Nouveau mot de passe</label>
                            <input type="password" class="form-control" value="" name="password" id="password">
                        </div>
                        <div class="form-group">
                            <label for="password-validation">Confirmez votre nouveau mot de passe</label>
                            <input type="password" class="form-control" value="" name="confirm_password" id="password-validation">
                        </div>
                        <div class="text-center mb-3">
                            <button type="submit" class="btn btn-dark">Inscription</button>
                        </div>
                        <div class="text-center">
                            <a href="login.php">Connexion</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>