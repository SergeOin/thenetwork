<?php require_once './includes/header.php'; ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <?php require_once './includes/sidebar.php' ?>
                </div>
                <div class="col-lg-9 post-section">
                    <div>
                        <?php require_once './includes/post-form.php' ?>
                    </div>
                    <div>
                        <?php foreach (getPosts() as $post): ?>
                            <?php require './includes/post-item.php'?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php require_once './includes/footer.php'; ?>