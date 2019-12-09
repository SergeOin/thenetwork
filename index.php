<?php require_once 'includes/header.php'; ?>

    <section>
        <div class="container">

            <div class="card mx-auto" style="max-width: 600px">
                <div class="card-header text-center">Inscription</div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="first-name">Prénom</label>
                            <input type="first-name" class="form-control" id="first-name">
                        </div>
                        <div class="form-group">
                            <label for="last-name">Nom de famille</label>
                            <input type="last-name" class="form-control" id="last-name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Nouveau mot de passe</label>
                            <input type="password" class="form-control" id="password">
                        </div>
                        <div class="form-group">
                            <label for="password-validation">Confirmez votre nouveau mot de passe</label>
                            <input type="password-validation" class="form-control" id="password-validation">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">Inscription</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>