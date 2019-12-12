<?php $id = isset($_SESSION['auth_id']) ? $_SESSION['auth_id'] : null ?>
<?php $user = isset($_GET['id']) ? getUser($_GET['id']) : getAuth(); ?>
<div class="card post-item">
    <div class="card-body pb-0">
        <span><?php echo $post['first_name']." ".$post['last_name'] ?></span>
        <small id="date" class="form-text text-muted">Publié <?php echo getDateForHumans($post['created_at']) ?></small>
    </div>
    <div class="card-body">
        <span><?php echo $post['content']; ?></span>
    </div>
    <div class="card-body footer-section">
        <div class="text-center">
            <button type="button" class="btn btn-outline-primary w-10 float-left" data-toggle="modal" data-target="#myModal">Commenter</button>
        </div>
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-right">Ajoutez votre commentaire</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form action="./assets/addcomment.php?id=<?php echo $user['id']; ?>" method="POST" name="comment" id="comment">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default"><?php echo $post['first_name']." ".$post['last_name'] ?></span>
                                    </div>
                                    <input type="text" value="" class="form-control" name="content" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Votre commentaire ...">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                    <button type="submit" form="comment" class="btn btn-primary">Publier</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>