<?php snippet('header') ?>

    <main class="noimg textbeitrag">
      <h3><?= $page->title() ?></h3>
      <div class="info">
        <?= $page->info()->kt() ?>
      </div>
      <div class="text">
        <?= $page->text()->markdown()->kt() ?>
    </div>

    <div class="author text">
      <?= $page->author() ?>
    </div>
    </main>

<?php snippet('footer') ?>
