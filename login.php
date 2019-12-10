<?php require_once './includes/header.php'; ?>
<section>
    <div class="container">
        <div class="card">
            <div class="card-header text-center">Connexion</div>
            <div class="card-body">
                <form action="./assets/login.php" method="POST">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email"  value="" required  class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" name="password" value="" required class="form-control" id="password">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-dark">Connexion</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
