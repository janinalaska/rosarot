<?php snippet('header') ?>

<!-- <div class="test">
irgendwas
</div> -->

    <!-- <main> -->
      <div class="gallery_container">
          <?php foreach ($page->images()->sortBy('sort') as $image): ?>
            <div class="image_container">
              <div class="img">
                <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
              </div>
              <figcaption><?= $image->caption() ?></figcaption>
            </div>
          <?php endforeach ?>
      </div>


      <div class="mobile_gallery">
        <div class="img_wrapper">
          <?php foreach ($page->images() as $image): ?>
              <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
              <figcaption><?= $image->caption() ?></figcaption>
          <?php endforeach ?>
        </div>

          <div class="author mobile"><p><?= $page->author()->text() ?></p></div>

      </div>


    <!-- </main> -->

<?php snippet('footer_ohne') ?>
