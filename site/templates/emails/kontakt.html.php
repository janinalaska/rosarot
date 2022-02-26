<?= $fname ?> <?= $lname ?> (<?= $email ?>) ist umgezogen. Bisherige Adresse:


<?= $street ?> <?= $nr ?>

<?= $plz ?> <?= $city ?>


Neue Adresse:

<?= $nstreet ?> <?= $nnr ?>

<?= $nplz ?> <?= $ncity ?>


<?php if (isset($comment)) {
 echo "Anmerkung:";
} ?>


<?= $comment ?>
