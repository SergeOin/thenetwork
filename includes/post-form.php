<div class="card post-form">
    <form action="./assets/post-form.php" method="POST">
    <div class="card-header">
        Créer une publication
    </div>
    <div class="card-body">
        <textarea class="form-control auto-expand" name="content" style="border-radius: 0" id="textaera" rows="2" placeholder="Exprimez-vous, <?php echo getAuth()['first_name']?>"></textarea>
        <textarea class="form-control auto-expand" name="img" style="border-radius: 0" id="textaera" rows="2" placeholder="Ajoutez image"></textarea>
        <div class="mt-4 float-right">
            <button type="submit" class="btn btn-outline-dark">Publier</button>
        </div>
    </div>
</div>
