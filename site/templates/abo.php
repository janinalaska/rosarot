<?php snippet('header') ?>

    <main >

      <?= $page->wasimmer()->toBlocks()->filterBy('type', 'heading') ?>

    </main>

<?php snippet('footer') ?>
