<?php require_once 'includes/header.php'; ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card profile-picture">
                        <img class="d-block w-100" src="https://resize-parismatch.lanmedia.fr/img/var/news/storage/images/paris-match/people-a-z/michel-drucker/6000670-8-fre-FR/Michel-Drucker.jpg" alt="profile-picture">
                    </div>
                    <div class="card">
                        <div class="card-header profile-name">
                            <div class="h2"><?php echo getAuth()['first_name']?> <?php echo getAuth()['last_name']?></div>
                            <small class="mb-2">Inscrit <?php echo getDateForHumans(getAuth()['created_at']);?></small>
                        </div>
                        <div class="card-body">
                            <div class="h4">Informations</div>
                            <p class="mt-3">Anniversaire : <?php echo getAuth()['birthday']?></p>
                            <p>Genre : <?php echo getAuth()['gender']?></p>
                            <div class="mt-2 mb-4 float-right">
                                <button type="submit" class="btn btn-outline-dark">Modifier mes infos</button>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-8 post-section">
                    <div>
                        <?php require_once './includes/post-form.php' ?>
                    </div>
                    <div>
                        <?php foreach (getPosts() as $post): ?>
                            <?php require './includes/post-item.php'?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>