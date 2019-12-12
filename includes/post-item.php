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
        <a class="btn btn-outline-success float-left mr-2" href="./assets/addlike.php">J'aime</a>
        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#myModal">Commenter</button>
        <?php require_once './includes/comment.php'?>
    </div>
</div>
