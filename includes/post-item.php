<?php $id = isset($_SESSION['auth_id']) ? $_SESSION['auth_id'] : null ?>
<?php $user = isset($_GET['id']) ? getUser($_GET['id']) : getAuth(); ?>
<div class="card post-item">
    <div class="card-body pb-0">
        <span><?php echo $post['first_name']." ".$post['last_name'] ?></span>
        <small id="date" class="form-text text-muted">Publié <?php echo getDateForHumans($post['created_at']) ?></small>
    </div>
    <div class="card-body">
        <span><?php echo $post['content']; ?></span>
        <small id="like" class="form-text text-muted"><?php echo count(getLikePost($post['id'])); ?> like</small>
    </div>
    <div class="card-body footer-section">
        <a class="btn btn-outline-success float-left mr-2" href="./assets/addlike.php?id=<?php echo $user['id']; ?>">J'aime</a>
        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#to-comment">Commenter</button>
        <?php require_once './includes/comment.php'?>
        <button class="btn btn-outline-danger float-left mr-2" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Voir les commentaires
        </button>
        <div class="collapse" id="collapseExample">
            <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
            </div>
        </div>
    </div>
</div>
