<div class="card post-item">
    <div class="card-body pb-0">
        <span><?php echo $post['first_name']." ".$post['last_name'] ?></span>
        <small id="date" class="form-text text-muted">Publié <?php echo getDateForHumans($post['created_at']) ?></small>
    </div>
    <div class="card-body">
        <span><?php echo $post['content']; ?></span>
    </div>
    <div class="card-body footer-section">
        <button class="btn btn-outline-success">J'aime</button>
</div>
</div>