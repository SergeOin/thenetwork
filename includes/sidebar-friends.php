<div class="card sidebar">
    <div class="card-body">
        <ul class="nav flex-column">
            <li class="nav-item mx-auto">Utilisateurs</li>
        </ul>
    </div>
    <?php foreach (getUsers() as $user): ?>
    <div class="card-footer">
        <p class="mt-1"><?php echo $user['first_name']." ".$user['last_name']?></p>
    </div>
    <?php endforeach; ?>
</div>