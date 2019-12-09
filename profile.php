<?php require_once 'includes/header.php'; ?>

<?php
$connected = true;
if (!$connected):
    header('Location: ./register.php');
endif;
?>

    <section>
        <div class="container">
            Prénom
            Nom
        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>