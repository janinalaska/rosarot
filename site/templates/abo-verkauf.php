<?php snippet('header') ?>

    <main class="withimg">

      <div class="getit">
        <ul>
          <?php foreach ($page->children()->listed() as $item): ?>
            <li><a href="<?= $item->url() ?>">
              <h3><?= $item->title() ?> 	&#8594;</h3>
              <div class="info">
                <?= $item->info()?>
              </div>
              </a></li>
          <?php endforeach ?>
        </ul>
      </div>

    </main>

<?php snippet('footer') ?>
