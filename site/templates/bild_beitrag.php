<?php snippet('header') ?>

<!-- <div class="test">
irgendwas
</div> -->

    <!-- <main> -->
      <div class="gallery_container">

          <?php foreach ($page->images() as $image): ?>
              <img src="<?= $image->url() ?>" alt="">
          <?php endforeach ?>


          <div class="author"><p><?= $page->author()->text() ?></p></div>


      </div>


    <!-- </main> -->

<?php snippet('footer_ohne') ?>
