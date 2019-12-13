<?php require_once 'includes/header.php'; ?>
<?php $id = isset($_SESSION['auth_id']) ? $_SESSION['auth_id'] : null ?>
<?php $user = isset($_GET['id']) ? getUser($_GET['id']) : getAuth(); ?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card profile-picture">
                    <img class="d-block w-100"
                         src="https://www.gravatar.com/avatar/<?php echo md5(getAuth()['email']); ?>?s=600"
                         alt="profile-picture">
                </div>
                <div class="card">
                    <div class="card-header profile-name">
                        <div class="h2"><?php echo getAuth()['first_name'] ?> <?php echo getAuth()['last_name'] ?></div>
                        <small class="mb-2">Inscrit <?php echo getDateForHumans(getAuth()['created_at']); ?></small>
                    </div>
                    <div class="card-body">
                        <div class="h4">Informations</div>
                        <p class="mt-3">Anniversaire : <?php echo $user['birthday'] ?></p>
                        <p>Genre : <?php echo $user['gender'] ?></p>
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
                    <?php foreach (getUserPosts($id) as $post): ?>
                        <?php require './includes/post-item.php' ?>
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
                            <form action="./assets/update-profile.php?id=<?php echo $user['id']; ?>" method="POST" name="post-update" id="post-update">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroup-sizing-default">Anniversaire : </span>
                                        </div>
                                        <input type="date" value="<?php echo $user['birthday']; ?>" class="form-control" name="birthday" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="JJ/MM/AAAA">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01">Genre</label>
                                        </div>
                                        <select class="custom-select" name="gender" id="inputGroupSelect01">
                                            <option>Choisir...</option>
                                            <option value="1" <?php echo $user['gender'] == 1 ? 'selected' : null; ?>>
                                                Homme
                                            </option>
                                            <option value="2" <?php echo $user['gender'] == 2 ? 'selected' : null; ?>>
                                                Femme
                                            </option>
                                            <option value="3" <?php echo $user['gender'] == 3 ? 'selected' : null; ?>>
                                                Autre
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                            <button type="submit" form="post-update" class="btn btn-primary">Enregistrer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>