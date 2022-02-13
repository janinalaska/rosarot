<?php snippet('header') ?>

    <main class="noimg">
        <?= $page->text()->markdown()->kt() ?>

        <div class="sponsors">
          <?php foreach ($page->images() as $image): ?>
              <img src="<?= $image->url() ?>" alt="">
          <?php endforeach ?>

        </div>
    </main>

<?php snippet('footer') ?>
