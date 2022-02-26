<?= $issue ?>


bestellt von:

<?= $fname ?> <?= $lname ?>

<?= $street ?> <?= $nr ?>

<?= $plz ?> <?= $city ?>


<?= $email ?>


<?php if (isset($comment)) {
 echo "Anmerkung:";
} ?>


<?= $comment ?>
