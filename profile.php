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
                            <div class="mt-4 text-center">
                                <button type="button" class="btn btn-outline-dark w-100" data-toggle="modal" data-target="#myModal">Modifier mes infos</button>
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

                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title text-right">Modifier vos informations</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Anniversaire :</span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="JJ/MM/AAAA">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Genre</label>
                                    </div>
                                    <select class="custom-select" id="inputGroupSelect01">
                                        <option selected>Choisir...</option>
                                        <option value="1">Femme</option>
                                        <option value="2">Homme</option>
                                        <option value="3">Autre</option>
                                    </select>
                                </div>
                                <button type="button" class="btn btn-outline-dark mt-3" data-dismiss="modal">Enregistrer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>