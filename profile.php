<?php require_once 'includes/header.php'; ?>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card profile-picture">
                        <div class="card-body">
                            <button class="btn-outline-dark rounded float-right">+</button>
                            <img class="d-block w-100" src="#" alt="Photo de profil">
                        </div>
                    </div>
                    <div class="card profile-info">
                        <div class="card-header">
                            <div>-Prénom user--Nom user-</div>
                            <p class="mb-0">Inscrit<?php echo getDateForHumans($user['created_at']);?></p>
                        </div>
                        <div class="card-body">
                            <div>Informations</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 post-section">
                    <div>
                        <?php require_once 'includes/post-form.php' ?>
                    </div>
                    <div>
                        <?php require_once 'includes/post-item.php'?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>