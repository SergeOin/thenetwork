<?php require_once 'includes/header.php'; ?>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card profile-picture">
                        <div class="card-body">
                            <img src="#" alt="Photo de profil">
                        </div>
                    </div>
                    <div class="card profile-info">
                        <div class="card-header">
                            <div>-Prénom user--Nom user-</div>
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