<div class="card sidebar">
    <div class="card-body">
        <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link h6" href="./profile.php"><?php echo getAuth()['first_name']?> <?php echo getAuth()['last_name']?></a></li>
            <li class="nav-item"><a class="nav-link" href="./index.php">Fil d'actualité</a></li>
            <li class="nav-item"><a class="nav-link" href="./profile.php">Profil</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Amis</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Invitations</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Paramètres</a></li>
            <li class="nav-item"><a class="nav-link" href="./assets/logout.php">Déconnexion</a></li>
        </ul>
    </div>
</div>
