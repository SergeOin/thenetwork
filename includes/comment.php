<?php $id = isset($_SESSION['auth_id']) ? $_SESSION['auth_id'] : null ?>
<?php $user = isset($_GET['id']) ? getUser($_GET['id']) : getAuth(); ?>
<div class="modal fade" id="to-comment" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-right">Votre Commentaire</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form action="../assets/addcomment.php?id=<?php echo $user['id']; ?>" method="POST" name="post-comment" id="post-comment">
            <div class="modal-body">
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Ajoutez votre commentaire : </span>
                            </div>
                            <input type="text" value="" class="form-control" name="birthday" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Écrivez ici...">
                        </div>
                    </div>
            </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <button type="submit" form="post-comment" class="btn btn-primary">Publier</button>
            </div>
        </div>
    </div>
</div>
