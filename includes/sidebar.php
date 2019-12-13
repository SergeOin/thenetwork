<div class="card sidebar">
        <ul class="nav flex-column card-body text-center profile">
            <li class="nav-item"><a class="nav-link" href="./profile.php"><img class="w-100 d-block rounded-circle mx-auto mb-2" style="max-width: 50px" src="https://www.gravatar.com/avatar/<?php echo md5(getAuth()['email']); ?>?s=600" alt="profile-picture"><?php echo getAuth()['first_name']?> <?php echo getAuth()['last_name']?></a></li>
        </ul>
        <ul class="nav flex-column card-body">
            <li class="nav-item"><a class="nav-link" href="./index.php">Fil d'actualité</a></li>
            <li class="nav-item"><a class="nav-link" href="./profile.php">Profil</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Amis</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Paramètres</a></li>
            <li class="nav-item"><a class="nav-link" href="./assets/logout.php">Déconnexion</a></li>
        </ul>
</div>
