<?= implode(',', $type) ?>


bestellt von:

<?= $fname ?> <?= $lname ?>

<?= $street ?> <?= $nr ?>

<?= $plz ?> <?= $city ?>


<?= $email ?>


<?php if (isset($gift)) {
 echo "Adresse der beschenkten Person:";
} ?>


<?= $gfname ?> <?= $glname ?>

<?= $gstreet ?> <?= $gnr ?>

<?= $gplz ?> <?= $gcity ?>

<?php if (isset($comment)) {
 echo "Anmerkung:";
} ?>


<?= $comment ?>
