<?php foreach ($posts as $post){ ?>
<div class="card post-item">
    <div class="card-body" style="padding-bottom: 0px">
        <small id="date" class="form-text text-muted">Publié <?php echo getDateForHumans($post['created_at']) ?></small>
    </div>
    <div class="card-body">
        <span><?php echo $post['content']?></span>
    </div>
</div>
<?php } ?>

