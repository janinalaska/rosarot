<?php snippet('header') ?>

    <main class="withimg">


      <div class="wrapper verkauf">
        <div class="text_left">
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
        </div>
        <div class="image_right verkauf">
          <?php foreach ($page->images() as $image): ?>
            <a href="<?= $image->url() ?>" class="img_link">
              <?= $image ?>
            </a>
            <figcaption><?= $image->caption() ?></figcaption>
          <?php endforeach ?>
        </div>

      </div>

    </main>

<?php snippet('footer_ohne') ?>
