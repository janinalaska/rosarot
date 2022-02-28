<?php snippet('header') ?>

<main class="noimg">

<div class="current">
<h1><?= $page->thema() ?></h1>
<div class="keywords">
    <?= $page->keywords() ?>
</div>
</div>

<div class="procedure">
<?= $page->process()->kti() ?>
</div>


</main>


<?php snippet('footer') ?>
