<?php snippet('header') ?>

    <main class="noimg textbeitrag">
      <h3><?= $page->title() ?></h3>
      <?php if($page->info()->isNotEmpty()): ?>
      <div class="info">
        <?= $page->info()->kt() ?>
      </div>
    <?php endif ?>

      <div class="text">
        <?= $page->text()->markdown()->kt() ?>
    </div>

    <div class="author text">
      <?= $page->author() ?>
    </div>
    </main>

<?php snippet('footer') ?>
