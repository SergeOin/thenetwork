<?php foreach ($posts as $post){ ?>
    <div class="card post-item">
    <div class="card-body" style="padding-bottom: 0px">
        <img class="d-block w-100 rounded-circle mr-2 float-left" style="max-width: 30px" src="https://resize-parismatch.lanmedia.fr/img/var/news/storage/images/paris-match/people-a-z/michel-drucker/6000670-8-fre-FR/Michel-Drucker.jpg" alt="profile-picture">
        <small id="date" class="form-text text-muted">Publié <?php echo getDateForHumans($post['created_at']) ?> Par </small>
    </div>
    <div class="card-body">
        <span><?php echo $post['content']?></span>
    </div>
</div>
<?php } ?>