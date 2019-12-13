<div class="card sidebar">
    <div class="card-body title">
        <ul class="nav flex-column">
            <li class="nav-item mx-auto">Utilisateurs</li>
        </ul>
    </div>
    <div class="card-body">
    <?php foreach (getUsers() as $user): ?>
    <div>
        <p class="mt-auto"><?php echo $user['first_name']." ".$user['last_name']?></p>
    </div>
    <?php endforeach; ?>
    </div>
</div>
