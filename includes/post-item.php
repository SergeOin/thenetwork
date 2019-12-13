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
    <div class="card-body footer-section pt-1 pb-1">
        <small id="like" class="form-text text-muted"><?php echo count(getLikePost($id)); ?> mention(s) j'aime</small>
    </div>
    <div class="card-body footer-section">
        <a class="btn btn-outline-success float-left mr-2" href="./assets/addlike.php?id=<?php echo $user['id']; ?>">J'aime</a>
        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#to-comment">Commenter</button>
        <?php require_once './includes/comment.php'?>
        <button class="btn btn-outline-dark dropdown-toggle float-right" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"></button>
        <div class="collapse" id="collapseExample">
            <!--Il faudrait insérer une boucle ici-->
            <?php foreach (getComment() as $comment): ?>
            <div class="card mt-4">
                <div class="card-body">
                    <span><?php echo $comment['first_name']." ".$comment['last_name']; ?></span>
                    <small id="date" class="form-text text-muted">Publié <?php echo getDateForHumans($post['created_at']) ?></small>
                </div>
                <div class="card-body">
                    <?php echo $comment['content']; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>